
export function initBackground3D() {
    const THREE = window.THREE;
    if (!THREE) {
        console.error('Three.js not loaded');
        return;
    }
    const canvas = document.querySelector('#bg-3d-canvas');
    if (!canvas) return;

    // --- Scene Setup ---
    const scene = new THREE.Scene();
    
    // Background color matching the body but slightly darker/bluer for depth
    // Or transparent if we want the CSS background to show through
    scene.fog = new THREE.FogExp2(0xffffff, 0.002);

    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({
        canvas,
        alpha: true,
        antialias: true
    });

    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    // --- Knowledge Net (Constellation) Setup ---
    const particlesCount = 150;
    const positions = new Float32Array(particlesCount * 3);
    const velocities = [];

    for (let i = 0; i < particlesCount; i++) {
        // Spread particles in a large cube
        positions[i * 3] = (Math.random() - 0.5) * 20;
        positions[i * 3 + 1] = (Math.random() - 0.5) * 20;
        positions[i * 3 + 2] = (Math.random() - 0.5) * 10;

        velocities.push({
            x: (Math.random() - 0.5) * 0.005,
            y: (Math.random() - 0.5) * 0.005,
            z: (Math.random() - 0.5) * 0.005
        });
    }

    const particlesGeometry = new THREE.BufferGeometry();
    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

    // Get primary color from CSS variable
    const style = getComputedStyle(document.documentElement);
    const emeraldColor = style.getPropertyValue('--color-primary').trim() || style.getPropertyValue('--primary').trim() || '#00ab66';

    const particlesMaterial = new THREE.PointsMaterial({
        color: new THREE.Color(emeraldColor),
        size: 0.08,
        transparent: true,
        opacity: 0.8,
        sizeAttenuation: true
    });

    const particles = new THREE.Points(particlesGeometry, particlesMaterial);
    scene.add(particles);

    // --- Lines (Connections) ---
    const linesMaterial = new THREE.LineBasicMaterial({
        color: new THREE.Color(emeraldColor),
        transparent: true,
        opacity: 0.1
    });

    let linesMesh;

    function updateLines() {
        if (linesMesh) scene.remove(linesMesh);

        const linePositions = [];
        const posArray = particlesGeometry.attributes.position.array;

        for (let i = 0; i < particlesCount; i++) {
            for (let j = i + 1; j < particlesCount; j++) {
                const dx = posArray[i * 3] - posArray[j * 3];
                const dy = posArray[i * 3 + 1] - posArray[j * 3 + 1];
                const dz = posArray[i * 3 + 2] - posArray[j * 3 + 2];
                const dist = Math.sqrt(dx * dx + dy * dy + dz * dz);

                // Create connection if close enough
                if (dist < 2.5) {
                    linePositions.push(posArray[i * 3], posArray[i * 3 + 1], posArray[i * 3 + 2]);
                    linePositions.push(posArray[j * 3], posArray[j * 3 + 1], posArray[j * 3 + 2]);
                }
            }
        }

        const linesGeometry = new THREE.BufferGeometry();
        linesGeometry.setAttribute('position', new THREE.Float32BufferAttribute(linePositions, 3));
        linesMesh = new THREE.LineSegments(linesGeometry, linesMaterial);
        scene.add(linesMesh);
    }

    camera.position.z = 8;

    // --- Interaction State ---
    let mouseX = 0;
    let mouseY = 0;
    let targetX = 0;
    let targetY = 0;
    let scrollY = window.scrollY;

    // Only on desktop
    if (window.matchMedia("(min-width: 768px)").matches) {
        window.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX / window.innerWidth) - 0.5;
            mouseY = (e.clientY / window.innerHeight) - 0.5;
        });
    }

    window.addEventListener('scroll', () => {
        scrollY = window.scrollY;
    });

    // --- Animation Loop ---
    const clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);
        const delta = clock.getDelta();

        // Update positions based on velocities
        const posArray = particlesGeometry.attributes.position.array;
        for (let i = 0; i < particlesCount; i++) {
            posArray[i * 3] += velocities[i].x;
            posArray[i * 3 + 1] += velocities[i].y;
            posArray[i * 3 + 2] += velocities[i].z;

            // Boundary check (keep in cube)
            if (Math.abs(posArray[i * 3]) > 10) velocities[i].x *= -1;
            if (Math.abs(posArray[i * 3 + 1]) > 10) velocities[i].y *= -1;
            if (Math.abs(posArray[i * 3 + 2]) > 10) velocities[i].z *= -1;
        }
        particlesGeometry.attributes.position.needsUpdate = true;

        // Dynamic connections
        updateLines();

        // Smooth camera movement (Parallax + Mouse)
        targetX = mouseX * 3;
        targetY = (mouseY * 3);
        
        // Parallax scroll effect
        const targetScrollY = scrollY * 0.005;
        
        camera.position.x += (targetX - camera.position.x) * 0.02;
        camera.position.y += (-targetY - targetScrollY - camera.position.y) * 0.02;
        
        camera.lookAt(scene.position);

        renderer.render(scene, camera);
    }

    animate();

    // --- Resize Handler ---
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
}
