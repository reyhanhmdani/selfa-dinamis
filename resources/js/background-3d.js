let threeLoadPromise;

function loadThreeFromCdn() {
    if (window.THREE) return Promise.resolve(window.THREE);
    if (threeLoadPromise) return threeLoadPromise;

    threeLoadPromise = new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = 'https://unpkg.com/three@0.160.0/build/three.min.js';
        script.async = true;
        script.onload = () => resolve(window.THREE);
        script.onerror = () => reject(new Error('Failed to load Three.js'));
        document.head.appendChild(script);
    });

    return threeLoadPromise;
}

export async function initBackground3D() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isDesktop = window.matchMedia('(min-width: 1024px)').matches;
    if (prefersReducedMotion || !isDesktop) return;

    const canvas = document.querySelector('#bg-3d-canvas');
    if (!canvas) return;

    let THREE;
    try {
        THREE = await loadThreeFromCdn();
    } catch (err) {
        console.warn('Three.js failed to load, disabling 3D background:', err);
        return;
    }

    if (!THREE) {
        return;
    }

    // --- Scene Setup ---
    const scene = new THREE.Scene();
    // Light fog for depth
    scene.fog = new THREE.FogExp2(0xffffff, 0.002);

    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 1, 1000);
    const renderer = new THREE.WebGLRenderer({
        canvas,
        alpha: true,
        antialias: true
    });

    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    // --- Emerald Flow (Particle Wave) ---
    // Geometry: A plane buffer geometry of particles
    const particleCountX = 100; // Density Width
    const particleCountZ = 60;  // Density Depth
    const particleCount = particleCountX * particleCountZ;

    const geometry = new THREE.BufferGeometry();
    const positions = new Float32Array(particleCount * 3);
    const scales = new Float32Array(particleCount);
    
    // Initial Grid Layout
    let initPosIdx = 0;
    let initScaleIdx = 0;
    for (let ix = 0; ix < particleCountX; ix++) {
        for (let iz = 0; iz < particleCountZ; iz++) {
            const x = ix * 2 - particleCountX; // Centered
            const z = iz * 2 - particleCountZ; // Centered
            const y = 0;

            positions[initPosIdx] = x;
            positions[initPosIdx + 1] = y;
            positions[initPosIdx + 2] = z;

            scales[initScaleIdx] = 1;

            initPosIdx += 3;
            initScaleIdx++;
        }
    }

    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('scale', new THREE.BufferAttribute(scales, 1));

    // Material
    const style = getComputedStyle(document.documentElement);
    const emeraldColor = style.getPropertyValue('--color-primary').trim() || style.getPropertyValue('--primary').trim() || '#00ab66';

    const material = new THREE.PointsMaterial({
        color: new THREE.Color(emeraldColor),
        size: 0.15,
        transparent: true,
        opacity: 0.8,
    });

    const particles = new THREE.Points(geometry, material);
    scene.add(particles);

    // Camera Position
    camera.position.y = 15; // High up looking down
    camera.position.z = 40;
    camera.lookAt(new THREE.Vector3(0, 5, 0));

    // --- Interaction ---
    let mouseX = 0;
    let mouseY = 0;

    if (window.matchMedia("(min-width: 768px)").matches) {
        window.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX / window.innerWidth) * 2 - 1;
            mouseY = -(e.clientY / window.innerHeight) * 2 + 1;
        }, { passive: true });
    }

    // --- Animation ---
    let countAnimation = 0;
    const INFLUENCE_RADIUS = 15;
    const INFLUENCE_RADIUS_SQ = INFLUENCE_RADIUS * INFLUENCE_RADIUS; // 225

    function animate() {
        requestAnimationFrame(animate);

        const posArray = particles.geometry.attributes.position.array;
        const targetMouseX = mouseX * 50;
        const targetMouseY = mouseY * 20;

        let ptr = 0;
        for (let ix = 0; ix < particleCountX; ix++) {
            // Compute X wave once per column instead of every inner iteration
            const waveX = Math.sin((ix + countAnimation) * 0.3) * 2;

            for (let iz = 0; iz < particleCountZ; iz++) {
                const x = posArray[ptr];
                const z = posArray[ptr + 2];

                // Fast distance check avoids expensive Math.sqrt for particles far from cursor
                const dx = x - targetMouseX;
                const dz = z - targetMouseY;
                const distSq = dx * dx + dz * dz;

                let mouseRipple = 0;
                if (distSq < INFLUENCE_RADIUS_SQ) {
                    mouseRipple = (INFLUENCE_RADIUS - Math.sqrt(distSq)) * 0.5;
                }

                posArray[ptr + 1] = waveX + (Math.sin((iz + countAnimation) * 0.5) * 2) + mouseRipple;
                ptr += 3;
            }
        }

        particles.geometry.attributes.position.needsUpdate = true;
        countAnimation += 0.05;

        // Gentle Camera Float
        camera.position.x += (mouseX * 5 - camera.position.x) * 0.05;
        camera.position.y += (-mouseY * 2 + 15 - camera.position.y) * 0.05;
        camera.lookAt(scene.position);

        renderer.render(scene, camera);
    }

    animate();

    // --- Resize ---
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
}
