<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Play the ultimate Fruit Cutting Game! Slice juicy fruits, avoid bombs, and beat your high score. A fun, responsive, and free arcade game for all ages.">
    <meta name="keywords" content="fruit cut, slice game, arcade game, browser game, html5 game, free game">
    <meta name="author" content="Fruit Cutter Master">
    <meta name="theme-color" content="#2c3e50">
    <title>Fruit Slice Master - Free Arcade Game</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #ff4757;
            --secondary-color: #2ed573;
            --bg-gradient: radial-gradient(circle at center, #2c3e50 0%, #000000 100%);
            --ui-bg: rgba(255, 255, 255, 0.15);
        }

        body {
            background: var(--bg-gradient);
            font-family: 'Poppins', sans-serif;
            color: white;
            overflow: hidden;
            touch-action: none;
            height: 100vh;
            display: flex;
            flex-direction: column;
            user-select: none;
            -webkit-user-select: none;
        }

        .game-header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
            pointer-events: none;
        }

        .score-board {
            display: flex;
            gap: 15px;
        }

        .score-pill {
            background: var(--ui-bg);
            backdrop-filter: blur(8px);
            padding: 8px 20px;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-family: 'Fredoka One', cursive;
            font-size: 1.2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .score-label {
            font-size: 0.8rem;
            opacity: 0.8;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-right: 5px;
        }

        .lives-container {
            display: flex;
            gap: 5px;
        }

        .heart {
            color: #ff4757;
            font-size: 1.5rem;
            filter: drop-shadow(0 0 5px rgba(255, 71, 87, 0.5));
            animation: beat 1s infinite alternate;
        }

        @keyframes beat {
            to { transform: scale(1.1); }
        }

        #gameCanvas {
            display: block;
            width: 100%;
            height: 100%;
            cursor: crosshair;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 20;
            backdrop-filter: blur(5px);
            transition: opacity 0.4s ease, visibility 0.4s;
        }

        .hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .game-title {
            font-family: 'Fredoka One', cursive;
            font-size: 5rem;
            background: linear-gradient(to bottom, #f1c40f, #e67e22, #e74c3c);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
            filter: drop-shadow(0 5px 15px rgba(230, 126, 34, 0.4));
            text-align: center;
            animation: float 3s ease-in-out infinite;
            line-height: 1.1;
        }

        .btn-custom {
            font-family: 'Fredoka One', cursive;
            font-size: 1.8rem;
            padding: 15px 50px;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            position: relative;
            overflow: hidden;
            margin-top: 20px;
        }

        .btn-play {
            background: linear-gradient(180deg, #2ecc71, #27ae60);
            color: white;
            box-shadow: 0 6px 0 #1e8449, 0 15px 20px rgba(0,0,0,0.4);
            text-shadow: 0 2px 2px rgba(0,0,0,0.2);
        }

        .btn-play:active {
            transform: translateY(6px);
            box-shadow: 0 0 0 #1e8449, inset 0 2px 5px rgba(0,0,0,0.2);
        }

        .btn-play:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 0 #1e8449, 0 20px 25px rgba(0,0,0,0.4);
            color: white;
        }

        .instructions {
            margin-top: 2.5rem;
            color: rgba(255,255,255,0.7);
            font-size: 1rem;
            max-width: 400px;
            text-align: center;
            line-height: 1.6;
            background: rgba(255,255,255,0.05);
            padding: 15px;
            border-radius: 15px;
        }

        .key-badge {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            margin: 0 2px;
            font-weight: 600;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(-2deg); }
            50% { transform: translateY(-15px) rotate(2deg); }
        }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .game-title { font-size: 3rem; }
            .score-pill { padding: 5px 12px; font-size: 1rem; }
            .heart { font-size: 1.2rem; }
            .instructions { font-size: 0.85rem; padding: 10px; margin-top: 1.5rem; width: 90%; }
            .btn-custom { font-size: 1.4rem; padding: 12px 35px; }
            .score-label { display: none; } /* Hide labels on very small screens to save space */
        }
    </style>
</head>
<body>

    <!-- Header UI -->
    <header class="game-header">
        <div class="score-board">
            <div class="score-pill">
                <span class="score-label">Score</span>
                <span id="score">0</span>
            </div>
            <div class="score-pill">
                <span class="score-label">Best</span>
                <span id="bestScore">0</span>
            </div>
        </div>
        <div class="lives-container" id="lives">
            <span class="heart">❤</span>
            <span class="heart">❤</span>
            <span class="heart">❤</span>
        </div>
    </header>

    <!-- Canvas -->
    <canvas id="gameCanvas"></canvas>

    <!-- Start Screen -->
    <div id="startScreen" class="overlay">
        <h1 class="game-title">Fruit<br>Slice</h1>
        <button id="startBtn" class="btn btn-custom btn-play">Play Now</button>
        <div class="instructions">
            <p>🔪 Swipe to cut fruits</p>
            <p>💣 Avoid the bombs</p>
            <p>❤ Don't let fruits drop</p>
        </div>
    </div>

    <!-- Game Over Screen -->
    <div id="gameOverScreen" class="overlay hidden">
        <h1 class="game-title" style="font-size: 3.5rem;">Game Over</h1>
        <div class="score-pill mb-4" style="font-size: 2rem; padding: 10px 30px;">
            <span>Score: </span>
            <span id="finalScore">0</span>
        </div>
        <div id="newHighScoreMsg" class="mb-4 text-warning fw-bold hidden" style="font-family: 'Fredoka One'; letter-spacing: 1px;">
            🎉 NEW HIGH SCORE! 🎉
        </div>
        <button id="restartBtn" class="btn btn-custom btn-play">Try Again</button>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Game Logic -->
    <script>
        // Game Configuration
        const canvas = document.getElementById('gameCanvas');
        const ctx = canvas.getContext('2d');
        const scoreEl = document.getElementById('score');
        const bestScoreEl = document.getElementById('bestScore');
        const finalScoreEl = document.getElementById('finalScore');
        const livesEl = document.getElementById('lives');
        const startScreen = document.getElementById('startScreen');
        const gameOverScreen = document.getElementById('gameOverScreen');
        const newHighScoreMsg = document.getElementById('newHighScoreMsg');
        const startBtn = document.getElementById('startBtn');
        const restartBtn = document.getElementById('restartBtn');

        let width, height;
        let score = 0;
        let highScore = localStorage.getItem('fruitSliceHighScore') || 0;
        let lives = 3;
        let gameRunning = false;
        let fruits = [];
        let particles = [];
        let bombProbability = 0.1;
        let spawnRate = 1000;
        let lastSpawn = 0;
        let gameLoopId;
        
        // Update High Score UI immediately
        bestScoreEl.innerText = highScore;

        // Blade Trail
        let mouseX = 0;
        let mouseY = 0;
        let isMouseDown = false;
        let trail = [];
        const MAX_TRAIL_LENGTH = 12;

        // Resize Canvas
        function resize() {
            width = window.innerWidth;
            height = window.innerHeight;
            canvas.width = width;
            canvas.height = height;
        }
        window.addEventListener('resize', resize);
        resize();

        // Audio Effects (Synthesized)
        const AudioContext = window.AudioContext || window.webkitAudioContext;
        const audioCtx = new AudioContext();

        function playSound(type) {
            if (audioCtx.state === 'suspended') audioCtx.resume();
            
            const osc = audioCtx.createOscillator();
            const gainNode = audioCtx.createGain();
            
            osc.connect(gainNode);
            gainNode.connect(audioCtx.destination);
            
            const now = audioCtx.currentTime;

            if (type === 'slice') {
                // High pitched swipe
                osc.type = 'triangle';
                osc.frequency.setValueAtTime(600 + Math.random()*200, now);
                osc.frequency.exponentialRampToValueAtTime(100, now + 0.15);
                
                gainNode.gain.setValueAtTime(0.1, now);
                gainNode.gain.linearRampToValueAtTime(0, now + 0.15);
                
                osc.start(now);
                osc.stop(now + 0.15);
            } else if (type === 'bomb') {
                // Explosion
                osc.type = 'sawtooth';
                osc.frequency.setValueAtTime(100, now);
                osc.frequency.exponentialRampToValueAtTime(10, now + 0.5);
                
                gainNode.gain.setValueAtTime(0.3, now);
                gainNode.gain.exponentialRampToValueAtTime(0.001, now + 0.5);
                
                osc.start(now);
                osc.stop(now + 0.5);
            } else if (type === 'start') {
                // Game start chime
                osc.type = 'sine';
                osc.frequency.setValueAtTime(440, now);
                osc.frequency.exponentialRampToValueAtTime(880, now + 0.3);
                
                gainNode.gain.setValueAtTime(0.1, now);
                gainNode.gain.linearRampToValueAtTime(0, now + 0.3);
                
                osc.start(now);
                osc.stop(now + 0.3);
            }
        }

        // Classes
        class Particle {
            constructor(x, y, color, speed, size = null) {
                this.x = x;
                this.y = y;
                this.color = color;
                this.size = size || Math.random() * 4 + 2;
                this.speedX = (Math.random() - 0.5) * speed;
                this.speedY = (Math.random() - 0.5) * speed;
                this.life = 1.0;
                this.decay = Math.random() * 0.02 + 0.015;
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                this.speedY += 0.15; // Gravity
                this.life -= this.decay;
            }

            draw() {
                ctx.save();
                ctx.globalAlpha = Math.max(0, this.life);
                ctx.fillStyle = this.color;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            }
        }

        class Fruit {
            constructor() {
                this.type = Math.random() < bombProbability ? 'bomb' : 'fruit';
                this.x = Math.random() * (width - 100) + 50;
                this.y = height + 60;
                
                // Physics
                // Bias slightly towards center to keep action on screen
                const centerBias = (width / 2 - this.x) * 0.003;
                this.vx = (Math.random() - 0.5) * 5 + centerBias;
                this.vy = -(Math.random() * 9 + 13); // Upward velocity
                this.gravity = 0.25;
                
                this.radius = this.type === 'bomb' ? 35 : 30;
                
                // Visuals
                if (this.type === 'fruit') {
                    // Juicy colors
                    const fruitTypes = [
                        { color: '#ff4757', inner: '#ff6b81' }, // Red
                        { color: '#2ed573', inner: '#7bed9f' }, // Green
                        { color: '#ffa502', inner: '#ffc048' }, // Orange
                        { color: '#a55eea', inner: '#d1d8e0' }, // Purple
                        { color: '#eccc68', inner: '#f1f2f6' }  // Yellow
                    ];
                    const type = fruitTypes[Math.floor(Math.random() * fruitTypes.length)];
                    this.color = type.color;
                    this.innerColor = type.inner;
                    this.rotation = 0;
                    this.rotationSpeed = (Math.random() - 0.5) * 0.2;
                } else {
                    this.color = '#2f3542';
                }
                
                this.active = true;
                this.sliced = false;
            }

            update() {
                this.x += this.vx;
                this.y += this.vy;
                this.vy += this.gravity;
                if (this.type === 'fruit') this.rotation += this.rotationSpeed;
            }

            draw() {
                ctx.save();
                ctx.translate(this.x, this.y);
                
                if (this.type === 'bomb') {
                    // Bomb Body
                    ctx.fillStyle = '#2f3542';
                    ctx.beginPath();
                    ctx.arc(0, 0, this.radius, 0, Math.PI * 2);
                    ctx.fill();
                    
                    // Shine
                    ctx.fillStyle = 'rgba(255,255,255,0.2)';
                    ctx.beginPath();
                    ctx.arc(-10, -10, 8, 0, Math.PI * 2);
                    ctx.fill();

                    // Fuse
                    ctx.beginPath();
                    ctx.moveTo(0, -this.radius);
                    ctx.quadraticCurveTo(10, -this.radius - 15, 20, -this.radius - 5);
                    ctx.lineWidth = 4;
                    ctx.lineCap = 'round';
                    ctx.strokeStyle = '#a4b0be';
                    ctx.stroke();
                    
                    // Spark pulsing
                    const pulse = Math.sin(Date.now() / 50) * 2 + 6;
                    ctx.fillStyle = '#ff6b6b';
                    ctx.shadowBlur = 10;
                    ctx.shadowColor = '#ff4757';
                    ctx.beginPath();
                    ctx.arc(20, -this.radius - 5, pulse, 0, Math.PI * 2);
                    ctx.fill();
                    ctx.shadowBlur = 0;
                    
                    // Skull icon hint?
                    ctx.fillStyle = '#57606f';
                    ctx.textAlign = 'center';
                    ctx.font = '20px Arial';
                    ctx.fillText('☠', 0, 7);
                    
                } else {
                    // Fruit Body
                    ctx.rotate(this.rotation);
                    ctx.fillStyle = this.color;
                    ctx.beginPath();
                    ctx.arc(0, 0, this.radius, 0, Math.PI * 2);
                    ctx.fill();
                    
                    // Inner part (makes it look 3D ish)
                    ctx.fillStyle = this.innerColor;
                    ctx.beginPath();
                    ctx.arc(0, 0, this.radius * 0.8, 0, Math.PI * 2);
                    ctx.fill();
                    
                    // Highlight
                    ctx.fillStyle = 'rgba(255,255,255,0.4)';
                    ctx.beginPath();
                    ctx.arc(-8, -8, 8, 0, Math.PI * 2);
                    ctx.fill();
                }

                ctx.restore();
            }
        }

        // Input Handling
        function updateTrail(x, y) {
            trail.push({ x, y, age: 0 });
            if (trail.length > MAX_TRAIL_LENGTH) {
                trail.shift();
            }
        }

        function checkCollision(x, y) {
            if (!gameRunning) return;

            for (let i = 0; i < fruits.length; i++) {
                let f = fruits[i];
                if (!f.active || f.sliced) continue;

                const dx = x - f.x;
                const dy = y - f.y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < f.radius + 10) { // Slight hit tolerance
                    sliceFruit(f);
                }
            }
        }

        function sliceFruit(f) {
            f.sliced = true;
            f.active = false;
            
            if (f.type === 'bomb') {
                playSound('bomb');
                createExplosion(f.x, f.y);
                loseLife();
            } else {
                playSound('slice');
                score += 10;
                scoreEl.innerText = score;
                createSliceEffect(f.x, f.y, f.color, f.innerColor);
            }
        }

        function createSliceEffect(x, y, color, innerColor) {
            // Juice Splash
            for (let i = 0; i < 12; i++) {
                particles.push(new Particle(x, y, color, 12, Math.random()*5+3));
            }
            // Inner pulp
            for (let i = 0; i < 6; i++) {
                particles.push(new Particle(x, y, innerColor, 8, Math.random()*3+2));
            }
            // White glint
            for (let i = 0; i < 4; i++) {
                particles.push(new Particle(x, y, 'white', 15, 2));
            }
        }

        function createExplosion(x, y) {
            for (let i = 0; i < 40; i++) {
                particles.push(new Particle(x, y, '#ff4757', 25));
                particles.push(new Particle(x, y, '#ffa502', 20));
                particles.push(new Particle(x, y, '#2f3542', 15));
            }
            
            // Screen Shake
            const shake = 20;
            canvas.style.transform = `translate(${Math.random()*shake-shake/2}px, ${Math.random()*shake-shake/2}px)`;
            setTimeout(() => { canvas.style.transform = 'translate(0,0)'; }, 100);
        }

        function loseLife() {
            if (lives > 0) {
                lives--;
                updateLivesUI();
                
                // Flash red overlay
                const flash = document.createElement('div');
                flash.style.position = 'absolute';
                flash.style.top = '0';
                flash.style.left = '0';
                flash.style.width = '100%';
                flash.style.height = '100%';
                flash.style.background = 'rgba(255, 0, 0, 0.3)';
                flash.style.pointerEvents = 'none';
                flash.style.zIndex = '15';
                document.body.appendChild(flash);
                setTimeout(() => flash.remove(), 100);

                if (lives <= 0) {
                    endGame();
                }
            }
        }

        function updateLivesUI() {
            livesEl.innerHTML = '';
            for (let i = 0; i < lives; i++) {
                livesEl.innerHTML += '<span class="heart">❤</span>';
            }
        }

        function endGame() {
            gameRunning = false;
            finalScoreEl.innerText = score;
            
            // Check High Score
            if (score > highScore) {
                highScore = score;
                localStorage.setItem('fruitSliceHighScore', highScore);
                bestScoreEl.innerText = highScore;
                newHighScoreMsg.classList.remove('hidden');
            } else {
                newHighScoreMsg.classList.add('hidden');
            }
            
            gameOverScreen.classList.remove('hidden');
        }

        function startGame() {
            score = 0;
            lives = 3;
            scoreEl.innerText = '0';
            updateLivesUI();
            fruits = [];
            particles = [];
            trail = [];
            
            // Reset Difficulty
            bombProbability = 0.1;
            spawnRate = 1000;
            
            gameRunning = true;
            startScreen.classList.add('hidden');
            gameOverScreen.classList.add('hidden');
            
            playSound('start');
            
            lastSpawn = performance.now();
            requestAnimationFrame(loop);
        }

        // Event Listeners
        const handleStart = (x, y) => {
            isMouseDown = true;
            updateTrail(x, y);
            checkCollision(x, y);
        };
        
        const handleMove = (x, y) => {
            if (isMouseDown) {
                updateTrail(x, y);
                checkCollision(x, y);
            }
        };

        const handleEnd = () => {
            isMouseDown = false;
            trail = [];
        };

        // Mouse
        window.addEventListener('mousedown', e => handleStart(e.clientX, e.clientY));
        window.addEventListener('mousemove', e => handleMove(e.clientX, e.clientY));
        window.addEventListener('mouseup', handleEnd);

        // Touch
        window.addEventListener('touchstart', e => {
            const t = e.touches[0];
            handleStart(t.clientX, t.clientY);
        }, { passive: false });
        
        window.addEventListener('touchmove', e => {
            e.preventDefault(); 
            const t = e.touches[0];
            handleMove(t.clientX, t.clientY);
        }, { passive: false });
        
        window.addEventListener('touchend', handleEnd);

        startBtn.addEventListener('click', startGame);
        restartBtn.addEventListener('click', startGame);

        // Main Loop
        function loop(timestamp) {
            if (!gameRunning) return;

            ctx.clearRect(0, 0, width, height);

            // Spawning
            if (timestamp - lastSpawn > spawnRate) {
                fruits.push(new Fruit());
                lastSpawn = timestamp;
                
                // Dynamic Difficulty
                if (spawnRate > 400) spawnRate -= 10;
                if (bombProbability < 0.35) bombProbability += 0.002;
            }

            // Fruits
            for (let i = fruits.length - 1; i >= 0; i--) {
                let f = fruits[i];
                f.update();
                f.draw();

                if (f.y > height + 100) {
                    if (f.type === 'fruit' && !f.sliced && f.active) {
                        loseLife();
                    }
                    fruits.splice(i, 1);
                } else if (f.sliced) {
                    fruits.splice(i, 1);
                }
            }

            // Particles
            for (let i = particles.length - 1; i >= 0; i--) {
                let p = particles[i];
                p.update();
                p.draw();
                if (p.life <= 0) particles.splice(i, 1);
            }

            // Blade Trail
            if (trail.length > 1) {
                ctx.beginPath();
                ctx.moveTo(trail[0].x, trail[0].y);
                for (let i = 1; i < trail.length; i++) {
                    const xc = (trail[i].x + trail[i-1].x) / 2;
                    const yc = (trail[i].y + trail[i-1].y) / 2;
                    ctx.quadraticCurveTo(trail[i-1].x, trail[i-1].y, xc, yc);
                }
                ctx.lineTo(trail[trail.length-1].x, trail[trail.length-1].y);
                
                // Blade Glow
                ctx.lineCap = 'round';
                ctx.lineJoin = 'round';
                ctx.lineWidth = 8;
                ctx.strokeStyle = '#ffffff';
                ctx.shadowBlur = 20;
                ctx.shadowColor = '#00ffff'; // Neon Blue blade
                ctx.stroke();
                
                ctx.shadowBlur = 0;
            }

            // Decay Trail
            for (let i = trail.length - 1; i >= 0; i--) {
                trail[i].age++;
                if (trail[i].age > 5) trail.splice(i, 1);
            }

            gameLoopId = requestAnimationFrame(loop);
        }
    </script>
</body>
</html>
