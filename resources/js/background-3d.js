
export function initBackground3D() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isDesktop = window.matchMedia('(min-width: 1024px)').matches;
    if (prefersReducedMotion || !isDesktop) return;

    const THREE = window.THREE;
    if (!THREE) {
        console.error('Three.js not loaded');
        return;
    }
    const canvas = document.querySelector('#bg-3d-canvas');
    if (!canvas) return;

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
    let i = 0, j = 0;
    for (let ix = 0; ix < particleCountX; ix++) {
        for (let iz = 0; iz < particleCountZ; iz++) {
            const x = ix * 2 - particleCountX; // Centered
            const z = iz * 2 - particleCountZ; // Centered
            const y = 0;

            positions[i] = x;
            positions[i + 1] = y;
            positions[i + 2] = z;

            scales[j] = 1;

            i += 3;
            j++;
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
        });
    }

    // --- Animation ---
    let countAnimation = 0;

    function animate() {
        requestAnimationFrame(animate);

        const positions = particles.geometry.attributes.position.array;
        
        // Wave Animation
        let i = 0;
        let ix = 0;
        let iz = 0;

        for (let ix = 0; ix < particleCountX; ix++) {
            for (let iz = 0; iz < particleCountZ; iz++) {
                
                // Classic Sine Wave Formula
                // y = sin(x + time) + cos(z + time)
                const x = positions[i];
                const z = positions[i + 2];
                
                // Add mouse influence
                const distToMouse = Math.sqrt(Math.pow(x - mouseX * 50, 2) + Math.pow(z - mouseY * 20, 2));
                let mouseRipple = 0;
                if(distToMouse < 15) {
                    mouseRipple = (15 - distToMouse) * 0.5;
                }

                // Complex wave motion
                positions[i + 1] = (Math.sin((ix + countAnimation) * 0.3) * 2) + 
                                   (Math.sin((iz + countAnimation) * 0.5) * 2) + 
                                   mouseRipple; 

                i += 3;
            }
        }

        particles.geometry.attributes.position.needsUpdate = true;
        countAnimation += 0.05; // Speed

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
