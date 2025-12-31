<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FlavorQuest - Experience the fusion of creative dining and interactive fun. Reserve your table or play our food game!">
    <meta name="keywords" content="Restaurant, Food, Dining, Game, Bistro, Creative Food, Reservation">
    <meta name="author" content="FlavorQuest Team">
    <title>FlavorQuest | Taste the Adventure</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🍔</text></svg>">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700&family=Yellowtail&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #FF6B6B;
            --secondary-color: #4ECDC4;
            --dark-color: #292F36;
            --light-color: #F7FFF7;
            --accent-color: #FFE66D;
        }

        body {
            font-family: 'Outfit', sans-serif;
            color: var(--dark-color);
            background-color: var(--light-color);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
        }

        .font-script {
            font-family: 'Yellowtail', cursive;
            color: var(--primary-color);
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-family: 'Yellowtail', cursive;
            font-size: 2rem;
            color: var(--primary-color) !important;
        }

        .nav-link {
            font-weight: 600;
            color: var(--dark-color) !important;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: 600;
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-custom:hover {
            background-color: #ff5252;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 107, 107, 0.3);
        }

        /* Hero Section */
        .hero {
            position: relative;
            padding: 150px 0 100px;
            background: linear-gradient(135deg, var(--light-color) 0%, #fff 100%);
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -10%;
            right: -10%;
            width: 50vw;
            height: 50vw;
            background: radial-gradient(circle, var(--secondary-color) 0%, transparent 70%);
            opacity: 0.1;
            border-radius: 50%;
            z-index: 0;
        }

        .hero-img {
            border-radius: 30px;
            box-shadow: 20px 20px 0px var(--secondary-color);
            transition: transform 0.3s;
        }

        .hero-img:hover {
            transform: scale(1.02);
        }

        /* Menu Section */
        .menu-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            background: white;
            height: 100%;
        }

        .menu-card:hover {
            transform: translateY(-10px);
        }

        .menu-img-container {
            height: 200px;
            overflow: hidden;
            background-color: #eee;
        }

        .menu-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .menu-card:hover .menu-img-container img {
            transform: scale(1.1);
        }

        .price-tag {
            background-color: var(--accent-color);
            color: var(--dark-color);
            font-weight: bold;
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
        }

        /* Game Section */
        #game-section {
            background-color: var(--dark-color);
            color: white;
            position: relative;
        }

        #gameCanvas {
            border: 4px solid var(--secondary-color);
            border-radius: 10px;
            background-color: #333;
            cursor: pointer;
            box-shadow: 0 0 20px rgba(78, 205, 196, 0.3);
            max-width: 100%;
        }

        .game-ui {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Reservation Form */
        .reservation-section {
            background-color: var(--primary-color);
            color: white;
            border-radius: 30px;
            padding: 4rem;
            margin-top: 5rem;
            position: relative;
            overflow: hidden;
        }

        .reservation-section::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .form-control {
            border-radius: 15px;
            padding: 15px;
            border: none;
            background: rgba(255,255,255,0.9);
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(255,255,255,0.3);
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: rgba(255,255,255,0.7);
            padding: 4rem 0 2rem;
        }

        .footer-logo {
            font-family: 'Yellowtail', cursive;
            font-size: 2rem;
            color: var(--secondary-color);
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 10px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .social-link:hover {
            background: var(--primary-color);
            color: white;
        }

        /* Utilities */
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 50%;
            height: 3px;
            background: var(--primary-color);
            margin: 10px auto 0;
            border-radius: 2px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-utensils me-2"></i>FlavorQuest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#game-section">Play & Win</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-custom" href="#reservation">Book a Table</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <span class="font-script fs-3">Welcome to the future of taste</span>
                    <h1 class="display-3 mb-4">Creative Dining meets <span style="color: var(--secondary-color);">Playful Vibes</span>.</h1>
                    <p class="lead mb-5 text-muted">Experience culinary excellence crafted with passion. Join us for an unforgettable journey of flavors, or play our mini-game to win a discount!</p>
                    <div class="d-flex gap-3">
                        <a href="#menu" class="btn btn-custom btn-lg">Explore Menu</a>
                        <a href="#game-section" class="btn btn-outline-dark btn-lg rounded-pill px-4">Play Game</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <!-- Placeholder for Hero Image -->
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Delicious Food Plate" class="img-fluid hero-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Features / Stats -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-3">
                        <i class="fas fa-award fa-3x mb-3 text-warning"></i>
                        <h4>Award Winning</h4>
                        <p class="text-muted">Recognized for creative excellence.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-3">
                        <i class="fas fa-leaf fa-3x mb-3 text-success"></i>
                        <h4>Fresh Ingredients</h4>
                        <p class="text-muted">Farm-to-table freshness guaranteed.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3">
                        <i class="fas fa-shipping-fast fa-3x mb-3 text-danger"></i>
                        <h4>Fast Delivery</h4>
                        <p class="text-muted">Hot and fresh at your doorstep.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-5">
        <div class="container py-5">
            <div class="text-center">
                <h2 class="section-title display-5">Our Creative Menu</h2>
                <p class="text-muted mb-5">Selected dishes prepared with love</p>
            </div>

            <div class="row g-4">
                <!-- Item 1 -->
                <div class="col-md-4">
                    <div class="menu-card">
                        <div class="menu-img-container">
                            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Gourmet Burger">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title m-0">Nebula Burger</h5>
                                <span class="price-tag">$18</span>
                            </div>
                            <p class="card-text text-muted">A towering masterpiece of wagyu beef, smoked cheddar, and truffle aioli.</p>
                            <button class="btn btn-sm btn-outline-dark rounded-pill mt-2">Order Now</button>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="col-md-4">
                    <div class="menu-card">
                        <div class="menu-img-container">
                            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pizza">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title m-0">Solar Flare Pizza</h5>
                                <span class="price-tag">$22</span>
                            </div>
                            <p class="card-text text-muted">Spicy pepperoni, jalapeños, and honey glaze on a charcoal-infused crust.</p>
                            <button class="btn btn-sm btn-outline-dark rounded-pill mt-2">Order Now</button>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="col-md-4">
                    <div class="menu-card">
                        <div class="menu-img-container">
                            <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Healthy Salad">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title m-0">Zen Garden Bowl</h5>
                                <span class="price-tag">$16</span>
                            </div>
                            <p class="card-text text-muted">Quinoa, avocado, roasted beets, and tahini dressing. Pure harmony.</p>
                            <button class="btn btn-sm btn-outline-dark rounded-pill mt-2">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Game Section -->
    <section id="game-section" class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 class="display-5 text-white">Hungry Chef Challenge</h2>
                    <p class="lead text-light opacity-75">Catch the falling ingredients to build the ultimate dish! Avoid the burnt toast.</p>
                    <div class="mt-4">
                        <p><i class="fas fa-arrow-left me-2"></i> Use Left/Right Arrows or Touch</p>
                        <p><i class="fas fa-trophy me-2"></i> High Score: <span id="highScore">0</span></p>
                    </div>
                    <button id="startGameBtn" class="btn btn-custom mt-3">Start Game</button>
                </div>
                <div class="col-lg-7 text-center">
                    <div class="game-ui">
                        <span class="badge bg-danger fs-5" id="scoreBoard">Score: 0</span>
                    </div>
                    <canvas id="gameCanvas" width="600" height="400"></canvas>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Section -->
    <section id="reservation" class="py-5 bg-white">
        <div class="container">
            <div class="reservation-section shadow-lg">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mb-4">Book Your Table</h2>
                        <p class="mb-5 opacity-75">Reserve a spot for an evening of elegance and taste.</p>
                        
                        <form id="bookingForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required aria-label="Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" placeholder="Phone Number" required aria-label="Phone">
                                </div>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" required aria-label="Date">
                                </div>
                                <div class="col-md-4">
                                    <input type="time" class="form-control" required aria-label="Time">
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" aria-label="Guests">
                                        <option selected>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="3" placeholder="Special Requests" aria-label="Message"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-dark btn-lg rounded-pill px-5">Confirm Reservation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="footer-logo mb-3">FlavorQuest</div>
                    <p>123 Culinary Avenue,<br>Food District, FD 10101</p>
                    <p class="mt-3"><i class="fas fa-phone me-2"></i> +1 (555) 123-4567</p>
                    <p><i class="fas fa-envelope me-2"></i> hello@flavorquest.com</p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="text-white mb-3">Opening Hours</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">Mon - Fri: 11:00 AM - 10:00 PM</li>
                        <li class="mb-2">Sat - Sun: 10:00 AM - 11:00 PM</li>
                        <li class="mb-2 text-warning">Happy Hour: 4:00 PM - 6:00 PM</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white mb-3">Follow Us</h5>
                    <div class="d-flex mb-4">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div>
                    <p>&copy; 2023 FlavorQuest. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Game & Interaction JS -->
    <script>
        // --- Form Validation ---
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you! Your table has been reserved. We will confirm shortly via phone.');
            this.reset();
        });

        // --- Game Logic ---
        const canvas = document.getElementById('gameCanvas');
        const ctx = canvas.getContext('2d');
        const scoreEl = document.getElementById('scoreBoard');
        const highScoreEl = document.getElementById('highScore');
        const startBtn = document.getElementById('startGameBtn');

        let gameRunning = false;
        let score = 0;
        let highScore = localStorage.getItem('fq_highscore') || 0;
        highScoreEl.innerText = highScore;

        // Player (Basket/Chef)
        const player = {
            x: canvas.width / 2 - 25,
            y: canvas.height - 60,
            w: 50,
            h: 50,
            speed: 7,
            dx: 0,
            color: '#FF6B6B'
        };

        // Falling Items
        let items = [];
        const itemSize = 20;

        // Controls
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') player.dx = player.speed;
            if (e.key === 'ArrowLeft') player.dx = -player.speed;
        });

        document.addEventListener('keyup', (e) => {
            if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') player.dx = 0;
        });
        
        // Touch Controls for Mobile
        canvas.addEventListener('touchmove', (e) => {
            e.preventDefault();
            const rect = canvas.getBoundingClientRect();
            const touchX = e.touches[0].clientX - rect.left;
            player.x = touchX - player.w/2;
            
            // Boundary checks
            if (player.x < 0) player.x = 0;
            if (player.x + player.w > canvas.width) player.x = canvas.width - player.w;
        }, { passive: false });

        function createItem() {
            const type = Math.random() > 0.2 ? 'good' : 'bad'; // 80% good, 20% bad
            items.push({
                x: Math.random() * (canvas.width - itemSize),
                y: -itemSize,
                speed: Math.random() * 2 + 2,
                type: type,
                color: type === 'good' ? '#4ECDC4' : '#292F36'
            });
        }

        function drawPlayer() {
            ctx.fillStyle = player.color;
            // Draw a simple chef hat/basket shape
            ctx.beginPath();
            ctx.moveTo(player.x, player.y);
            ctx.lineTo(player.x + player.w, player.y);
            ctx.lineTo(player.x + player.w - 10, player.y + player.h);
            ctx.lineTo(player.x + 10, player.y + player.h);
            ctx.fill();
            ctx.closePath();
            
            // Decoration
            ctx.fillStyle = "#fff";
            ctx.fillRect(player.x + 15, player.y + 15, 20, 5);
        }

        function drawItems() {
            items.forEach(item => {
                ctx.fillStyle = item.color;
                ctx.beginPath();
                ctx.arc(item.x + itemSize/2, item.y + itemSize/2, itemSize/2, 0, Math.PI * 2);
                ctx.fill();
                
                // Add symbol
                ctx.fillStyle = "#fff";
                ctx.font = "12px Arial";
                ctx.fillText(item.type === 'good' ? "+" : "x", item.x + 6, item.y + 14);
            });
        }

        function update() {
            if (!gameRunning) return;

            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Move Player
            player.x += player.dx;
            // Boundaries
            if (player.x < 0) player.x = 0;
            if (player.x + player.w > canvas.width) player.x = canvas.width - player.w;

            // Move Items
            items.forEach((item, index) => {
                item.y += item.speed;

                // Collision Detection
                if (
                    item.x < player.x + player.w &&
                    item.x + itemSize > player.x &&
                    item.y < player.y + player.h &&
                    item.y + itemSize > player.y
                ) {
                    // Hit
                    if (item.type === 'good') {
                        score += 10;
                    } else {
                        score -= 20;
                        if (score < 0) score = 0;
                        // Flash red
                        ctx.fillStyle = "rgba(255,0,0,0.3)";
                        ctx.fillRect(0,0,canvas.width, canvas.height);
                    }
                    items.splice(index, 1);
                }
                // Out of bounds
                else if (item.y > canvas.height) {
                    items.splice(index, 1);
                }
            });

            drawPlayer();
            drawItems();
            scoreEl.innerText = `Score: ${score}`;

            requestAnimationFrame(update);
        }

        // Game Loop Interval for spawning
        let spawnInterval;

        function startGame() {
            if (gameRunning) return;
            gameRunning = true;
            score = 0;
            items = [];
            scoreEl.innerText = `Score: 0`;
            startBtn.innerText = "Playing...";
            startBtn.disabled = true;

            spawnInterval = setInterval(createItem, 1000); // Spawn every second
            update();

            // End game after 30 seconds
            setTimeout(endGame, 30000);
        }

        function endGame() {
            gameRunning = false;
            clearInterval(spawnInterval);
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            ctx.fillStyle = "white";
            ctx.font = "30px Outfit";
            ctx.textAlign = "center";
            ctx.fillText("Game Over!", canvas.width/2, canvas.height/2 - 20);
            ctx.fillText(`Final Score: ${score}`, canvas.width/2, canvas.height/2 + 20);

            if (score > highScore) {
                highScore = score;
                localStorage.setItem('fq_highscore', highScore);
                highScoreEl.innerText = highScore;
                ctx.fillStyle = "#FFE66D";
                ctx.fillText("New High Score!", canvas.width/2, canvas.height/2 + 60);
            }

            startBtn.innerText = "Play Again";
            startBtn.disabled = false;
        }

        startBtn.addEventListener('click', startGame);

        // Initial Draw
        ctx.fillStyle = "white";
        ctx.font = "20px Outfit";
        ctx.textAlign = "center";
        ctx.fillText("Click 'Start Game' to play!", canvas.width/2, canvas.height/2);

    </script>
</body>
</html>
