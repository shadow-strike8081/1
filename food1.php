<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Flavor Fusion Restaurant - Experience extraordinary culinary delights with our creative fusion cuisine. Book your table today!">
    <meta name="keywords" content="restaurant, food, dining, fusion cuisine, fine dining, reservations">
    <meta name="author" content="Flavor Fusion">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Flavor Fusion Restaurant - Creative Culinary Experience">
    <meta property="og:description" content="Experience extraordinary culinary delights with our creative fusion cuisine.">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#FF6B35">
    <title>Flavor Fusion Restaurant | Creative Culinary Experience</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #FF6B35;
            --secondary: #F7C59F;
            --accent: #2EC4B6;
            --dark: #1A1A2E;
            --light: #FFFCF9;
            --gradient: linear-gradient(135deg, #FF6B35 0%, #F7C59F 50%, #2EC4B6 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
        }
        
        /* Navbar */
        .navbar {
            background: rgba(26, 26, 46, 0.95) !important;
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .nav-link {
            color: var(--light) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--primary) !important;
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.9) 0%, rgba(26, 26, 46, 0.7) 100%),
                        url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1920&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: var(--primary);
            border-radius: 50%;
            filter: blur(150px);
            opacity: 0.3;
            top: -100px;
            right: -100px;
            animation: pulse 4s ease-in-out infinite;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: var(--accent);
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.3;
            bottom: -100px;
            left: -100px;
            animation: pulse 4s ease-in-out infinite reverse;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 4rem;
            font-weight: 700;
            color: var(--light);
            line-height: 1.2;
        }
        
        .hero h1 span {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            margin: 1.5rem 0 2rem;
        }
        
        .btn-primary-custom {
            background: var(--gradient);
            border: none;
            padding: 1rem 2.5rem;
            font-weight: 600;
            border-radius: 50px;
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.4);
            color: white;
        }
        
        .btn-outline-custom {
            border: 2px solid var(--secondary);
            padding: 1rem 2.5rem;
            font-weight: 600;
            border-radius: 50px;
            color: var(--secondary);
            background: transparent;
            transition: all 0.3s ease;
        }
        
        .btn-outline-custom:hover {
            background: var(--secondary);
            color: var(--dark);
        }
        
        /* Floating Food Images */
        .floating-food {
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
        }
        
        .food-circle {
            width: 400px;
            height: 400px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid var(--primary);
            animation: float 3s ease-in-out infinite;
            box-shadow: 0 20px 60px rgba(255, 107, 53, 0.3);
        }
        
        .food-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        /* Section Styling */
        section {
            padding: 100px 0;
        }
        
        .section-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
        }
        
        .section-title span {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-subtitle {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 3rem;
        }
        
        /* Menu Section */
        #menu {
            background: var(--dark);
            color: var(--light);
        }
        
        .menu-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(255, 107, 53, 0.2);
        }
        
        .menu-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .menu-card-body {
            padding: 1.5rem;
        }
        
        .menu-card h4 {
            color: var(--secondary);
            margin-bottom: 0.5rem;
        }
        
        .menu-card .price {
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        .menu-category-btn {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--light);
            padding: 0.8rem 2rem;
            border-radius: 50px;
            margin: 0.3rem;
            transition: all 0.3s ease;
        }
        
        .menu-category-btn:hover,
        .menu-category-btn.active {
            background: var(--primary);
            color: white;
        }
        
        /* About Section */
        .about-img-container {
            position: relative;
        }
        
        .about-img-container img {
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }
        
        .about-img-container::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--gradient);
            border-radius: 20px;
            top: 20px;
            left: 20px;
            z-index: -1;
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: var(--gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            margin-bottom: 1rem;
        }
        
        /* Game Section */
        #game {
            background: linear-gradient(135deg, #1A1A2E 0%, #16213E 100%);
            color: var(--light);
        }
        
        .game-container {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 30px;
            padding: 2rem;
            border: 2px solid rgba(255, 107, 53, 0.3);
        }
        
        #gameCanvas {
            background: linear-gradient(180deg, #2a2a4a 0%, #1a1a2e 100%);
            border-radius: 20px;
            display: block;
            margin: 0 auto;
            max-width: 100%;
        }
        
        .game-btn {
            background: var(--gradient);
            border: none;
            padding: 1rem 3rem;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            color: white;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        
        .game-btn:hover {
            transform: scale(1.05);
        }
        
        .game-score {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        /* Contact Section */
        .contact-form {
            background: white;
            padding: 3rem;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }
        
        .form-control {
            border: 2px solid #eee;
            padding: 1rem;
            border-radius: 15px;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }
        
        .contact-info-card {
            background: var(--gradient);
            padding: 2rem;
            border-radius: 20px;
            color: white;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .contact-info-card:hover {
            transform: translateY(-5px);
        }
        
        .contact-info-card i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        /* Testimonials */
        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            font-size: 6rem;
            font-family: 'Playfair Display', serif;
            color: var(--primary);
            opacity: 0.2;
            position: absolute;
            top: -10px;
            left: 20px;
        }
        
        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: var(--light);
            padding: 60px 0 30px;
        }
        
        .footer-brand {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive */
        @media (max-width: 991px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .floating-food {
                display: none;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 767px) {
            .hero {
                text-align: center;
            }
            
            .hero-buttons {
                justify-content: center;
            }
            
            section {
                padding: 60px 0;
            }
            
            .contact-form {
                padding: 1.5rem;
            }
        }
        
        /* Scroll to top button */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            border: none;
        }
        
        .scroll-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .scroll-top:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">🍽️ Flavor Fusion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#game">Play Game</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="fade-in">Experience <span>Extraordinary</span> Culinary Delights</h1>
                    <p class="fade-in">Welcome to Flavor Fusion, where every dish tells a story. Discover our creative fusion cuisine crafted with passion and the finest ingredients.</p>
                    <div class="d-flex gap-3 flex-wrap hero-buttons fade-in">
                        <a href="#menu" class="btn btn-primary-custom">Explore Menu</a>
                        <a href="#contact" class="btn btn-outline-custom">Book a Table</a>
                    </div>
                    <div class="mt-5 d-flex gap-4 fade-in">
                        <div>
                            <h3 class="text-white mb-0">15+</h3>
                            <small class="text-white-50">Years Experience</small>
                        </div>
                        <div>
                            <h3 class="text-white mb-0">50+</h3>
                            <small class="text-white-50">Special Dishes</small>
                        </div>
                        <div>
                            <h3 class="text-white mb-0">10K+</h3>
                            <small class="text-white-50">Happy Customers</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="floating-food">
                        <div class="food-circle">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&q=80" alt="Delicious food presentation" width="400" height="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fade-in">Our <span>Signature</span> Menu</h2>
                <p class="section-subtitle fade-in" style="color: rgba(255,255,255,0.7);">Discover our chef's specially crafted dishes</p>
                <div class="fade-in">
                    <button class="menu-category-btn active" onclick="filterMenu('all')">All</button>
                    <button class="menu-category-btn" onclick="filterMenu('appetizer')">Appetizers</button>
                    <button class="menu-category-btn" onclick="filterMenu('main')">Main Course</button>
                    <button class="menu-category-btn" onclick="filterMenu('dessert')">Desserts</button>
                </div>
            </div>
            <div class="row g-4" id="menuContainer">
                <!-- Menu items will be loaded dynamically -->
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 fade-in">
                    <div class="about-img-container">
                        <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=800&q=80" alt="Restaurant interior with elegant dining setup" class="img-fluid" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6 fade-in">
                    <h2 class="section-title">Why Choose <span>Us</span></h2>
                    <p class="mb-4">At Flavor Fusion, we believe in creating memorable dining experiences. Our passionate chefs combine traditional techniques with modern innovation to bring you dishes that delight all senses.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="feature-icon"><i class="bi bi-award"></i></div>
                            <h5>Premium Quality</h5>
                            <p class="text-muted">Only the finest, freshest ingredients make it to your plate.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-icon"><i class="bi bi-people"></i></div>
                            <h5>Expert Chefs</h5>
                            <p class="text-muted">Our culinary team brings decades of combined experience.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-icon"><i class="bi bi-clock"></i></div>
                            <h5>Fast Service</h5>
                            <p class="text-muted">Enjoy prompt service without compromising quality.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-icon"><i class="bi bi-heart"></i></div>
                            <h5>Made with Love</h5>
                            <p class="text-muted">Every dish is prepared with passion and care.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Game Section -->
    <section id="game">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fade-in">🎮 <span>Food Catcher</span> Game</h2>
                <p class="section-subtitle fade-in" style="color: rgba(255,255,255,0.7);">Catch the falling food items and earn points! Win discounts on your next meal!</p>
            </div>
            <div class="game-container fade-in">
                <div class="row align-items-center mb-4">
                    <div class="col-md-4 text-center mb-3 mb-md-0">
                        <p class="mb-1">Score</p>
                        <span class="game-score" id="score">0</span>
                    </div>
                    <div class="col-md-4 text-center mb-3 mb-md-0">
                        <button class="game-btn" id="startBtn" onclick="startGame()">🎮 Start Game</button>
                    </div>
                    <div class="col-md-4 text-center">
                        <p class="mb-1">High Score</p>
                        <span class="game-score" id="highScore">0</span>
                    </div>
                </div>
                <canvas id="gameCanvas" width="600" height="400" aria-label="Food Catcher Game Canvas"></canvas>
                <p class="text-center mt-3 text-white-50">Use ← → arrow keys or touch to move the basket</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fade-in">What Our <span>Guests</span> Say</h2>
                <p class="section-subtitle fade-in">Real reviews from our valued customers</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 fade-in">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/100?img=1" alt="Sarah Johnson profile photo" class="testimonial-avatar me-3" width="60" height="60" loading="lazy">
                            <div>
                                <h6 class="mb-0">Sarah Johnson</h6>
                                <small class="text-muted">Food Blogger</small>
                            </div>
                        </div>
                        <p class="mb-3">"Absolutely incredible experience! The fusion of flavors was unlike anything I've ever tasted. The ambiance is perfect for both romantic dinners and family gatherings."</p>
                        <div class="text-warning">★★★★★</div>
                    </div>
                </div>
                <div class="col-lg-4 fade-in">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/100?img=3" alt="Michael Chen profile photo" class="testimonial-avatar me-3" width="60" height="60" loading="lazy">
                            <div>
                                <h6 class="mb-0">Michael Chen</h6>
                                <small class="text-muted">Regular Customer</small>
                            </div>
                        </div>
                        <p class="mb-3">"I've been coming here for 3 years now. The quality never disappoints and the staff treats you like family. Their signature fusion pasta is to die for!"</p>
                        <div class="text-warning">★★★★★</div>
                    </div>
                </div>
                <div class="col-lg-4 fade-in">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/100?img=5" alt="Emma Williams profile photo" class="testimonial-avatar me-3" width="60" height="60" loading="lazy">
                            <div>
                                <h6 class="mb-0">Emma Williams</h6>
                                <small class="text-muted">Chef</small>
                            </div>
                        </div>
                        <p class="mb-3">"As a fellow chef, I appreciate the attention to detail here. Every plate is a masterpiece. The flavor combinations are innovative yet perfectly balanced."</p>
                        <div class="text-warning">★★★★★</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fade-in">Get In <span>Touch</span></h2>
                <p class="section-subtitle fade-in">Book a table or send us your queries</p>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-4 fade-in">
                    <div class="contact-info-card h-100">
                        <i class="bi bi-geo-alt"></i>
                        <h5>Location</h5>
                        <p class="mb-0">123 Culinary Street<br>New York, NY 10001</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in">
                    <div class="contact-info-card h-100">
                        <i class="bi bi-telephone"></i>
                        <h5>Phone</h5>
                        <p class="mb-0">+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in">
                    <div class="contact-info-card h-100">
                        <i class="bi bi-clock"></i>
                        <h5>Opening Hours</h5>
                        <p class="mb-0">Mon-Fri: 11am - 10pm<br>Sat-Sun: 10am - 11pm</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 fade-in">
                    <div class="contact-form">
                        <h4 class="text-center mb-4">Make a Reservation</h4>
                        <form id="reservationForm" onsubmit="handleFormSubmit(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required placeholder="John Doe" aria-required="true">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="john@example.com" aria-required="true">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required placeholder="+1 (555) 000-0000" aria-required="true">
                                </div>
                                <div class="col-md-6">
                                    <label for="guests" class="form-label">Number of Guests *</label>
                                    <select class="form-control" id="guests" name="guests" required aria-required="true">
                                        <option value="">Select guests</option>
                                        <option value="1">1 Person</option>
                                        <option value="2">2 People</option>
                                        <option value="3">3 People</option>
                                        <option value="4">4 People</option>
                                        <option value="5">5 People</option>
                                        <option value="6+">6+ People</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label">Reservation Date *</label>
                                    <input type="date" class="form-control" id="date" name="date" required aria-required="true">
                                </div>
                                <div class="col-md-6">
                                    <label for="time" class="form-label">Preferred Time *</label>
                                    <input type="time" class="form-control" id="time" name="time" required aria-required="true">
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Special Requests</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Any dietary restrictions or special occasions?"></textarea>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary-custom btn-lg">
                                        <i class="bi bi-calendar-check me-2"></i>Book Table
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="formMessage" class="text-center mt-4" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h4 class="footer-brand mb-3">🍽️ Flavor Fusion</h4>
                    <p class="text-white-50">Experience the perfect blend of tradition and innovation. Every dish tells a story of passion and creativity.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-icon" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h6 class="text-white mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#menu" class="text-white-50 text-decoration-none">Menu</a></li>
                        <li class="mb-2"><a href="#about" class="text-white-50 text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="#contact" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h6 class="text-white mb-3">Contact Info</h6>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>123 Culinary Street, NY</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i>+1 (555) 123-4567</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i>hello@flavorfusion.com</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h6 class="text-white mb-3">Newsletter</h6>
                    <p class="text-white-50 small">Subscribe for exclusive offers and updates!</p>
                    <form class="d-flex" onsubmit="handleNewsletter(event)">
                        <input type="email" class="form-control me-2" placeholder="Your email" aria-label="Newsletter email" required>
                        <button class="btn btn-primary-custom" type="submit">Join</button>
                    </form>
                </div>
            </div>
            <hr class="my-4 border-secondary">
            <div class="text-center text-white-50">
                <p class="mb-0">&copy; 2024 Flavor Fusion Restaurant. All rights reserved. Made with ❤️</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop" aria-label="Scroll to top">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Menu Data
        const menuItems = [
            { id: 1, name: "Truffle Bruschetta", category: "appetizer", price: "$14", description: "Crispy bread with truffle oil and fresh tomatoes", image: "https://images.unsplash.com/photo-1572695157366-5e585ab2b69f?w=400&q=80" },
            { id: 2, name: "Fusion Spring Rolls", category: "appetizer", price: "$12", description: "Crispy rolls with Asian-Mexican fusion filling", image: "https://images.unsplash.com/photo-1544025162-d76694265947?w=400&q=80" },
            { id: 3, name: "Seafood Paella", category: "main", price: "$32", description: "Traditional Spanish rice with fresh seafood", image: "https://images.unsplash.com/photo-1534080564583-6be75777b70a?w=400&q=80" },
            { id: 4, name: "Wagyu Steak", category: "main", price: "$55", description: "Premium A5 Wagyu with seasonal vegetables", image: "https://images.unsplash.com/photo-1600891964092-4316c288032e?w=400&q=80" },
            { id: 5, name: "Fusion Pasta", category: "main", price: "$24", description: "Italian pasta with Asian spices", image: "https://images.unsplash.com/photo-1473093295043-cdd812d0e601?w=400&q=80" },
            { id: 6, name: "Lava Cake", category: "dessert", price: "$15", description: "Warm chocolate cake with molten center", image: "https://images.unsplash.com/photo-1624353365286-3f8d62daad51?w=400&q=80" },
            { id: 7, name: "Matcha Tiramisu", category: "dessert", price: "$13", description: "Japanese-Italian fusion dessert", image: "https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=400&q=80" },
            { id: 8, name: "Crispy Calamari", category: "appetizer", price: "$16", description: "Lightly fried with spicy aioli", image: "https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?w=400&q=80" }
        ];

        // Render Menu
        function renderMenu(filter = 'all') {
            const container = document.getElementById('menuContainer');
            const filtered = filter === 'all' ? menuItems : menuItems.filter(item => item.category === filter);
            
            container.innerHTML = filtered.map(item => `
                <div class="col-lg-3 col-md-6 fade-in visible">
                    <article class="menu-card h-100">
                        <img src="${item.image}" alt="${item.name}" width="400" height="200" loading="lazy">
                        <div class="menu-card-body">
                            <h4>${item.name}</h4>
                            <p class="text-white-50 small">${item.description}</p>
                            <span class="price">${item.price}</span>
                        </div>
                    </article>
                </div>
            `).join('');
        }

        function filterMenu(category) {
            document.querySelectorAll('.menu-category-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            renderMenu(category);
        }

        // Initialize menu
        renderMenu();

        // Form Handling
        function handleFormSubmit(e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const messageDiv = document.getElementById('formMessage');
            
            // Simulate form submission
            messageDiv.style.display = 'block';
            messageDiv.innerHTML = `
                <div class="alert alert-success">
                    <i class="bi bi-check-circle me-2"></i>
                    Thank you, ${formData.get('name')}! Your reservation for ${formData.get('guests')} guest(s) on ${formData.get('date')} at ${formData.get('time')} has been received. We'll confirm shortly!
                </div>
            `;
            form.reset();
            
            setTimeout(() => {
                messageDiv.style.display = 'none';
            }, 5000);
        }

        function handleNewsletter(e) {
            e.preventDefault();
            alert('🎉 Thank you for subscribing! Get ready for exclusive offers!');
            e.target.reset();
        }

        // Set minimum date for reservation
        document.getElementById('date').min = new Date().toISOString().split('T')[0];

        // Scroll Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

        // Scroll to Top
        const scrollTopBtn = document.getElementById('scrollTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Smooth scroll for nav links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // ====== FOOD CATCHER GAME ======
        const canvas = document.getElementById('gameCanvas');
        const ctx = canvas.getContext('2d');
        
        let gameRunning = false;
        let score = 0;
        let highScore = localStorage.getItem('foodCatcherHighScore') || 0;
        document.getElementById('highScore').textContent = highScore;

        const foodEmojis = ['🍕', '🍔', '🍟', '🌮', '🍩', '🍎', '🍇', '🧁', '🍪', '🍰'];
        const badItems = ['💀', '🦠'];

        const basket = {
            x: canvas.width / 2 - 40,
            y: canvas.height - 50,
            width: 80,
            height: 40,
            speed: 8
        };

        let foods = [];
        let keys = {};
        let animationId;
        let touchStartX = 0;

        function drawBasket() {
            ctx.font = '40px Arial';
            ctx.textAlign = 'center';
            ctx.fillText('🧺', basket.x + basket.width / 2, basket.y + 35);
        }

        function createFood() {
            const isBad = Math.random() < 0.15;
            foods.push({
                x: Math.random() * (canvas.width - 30),
                y: -30,
                emoji: isBad ? badItems[Math.floor(Math.random() * badItems.length)] : foodEmojis[Math.floor(Math.random() * foodEmojis.length)],
                speed: 2 + Math.random() * 2 + score * 0.02,
                isBad: isBad
            });
        }

        function drawFood() {
            ctx.font = '30px Arial';
            foods.forEach(food => {
                ctx.fillText(food.emoji, food.x + 15, food.y + 25);
            });
        }

        function updateGame() {
            // Move basket
            if (keys['ArrowLeft'] && basket.x > 0) {
                basket.x -= basket.speed;
            }
            if (keys['ArrowRight'] && basket.x < canvas.width - basket.width) {
                basket.x += basket.speed;
            }

            // Update foods
            foods.forEach((food, index) => {
                food.y += food.speed;

                // Check collision
                if (food.y + 30 > basket.y && 
                    food.x + 30 > basket.x && 
                    food.x < basket.x + basket.width) {
                    if (food.isBad) {
                        endGame();
                        return;
                    } else {
                        score += 10;
                        document.getElementById('score').textContent = score;
                    }
                    foods.splice(index, 1);
                }

                // Remove if out of screen
                if (food.y > canvas.height) {
                    foods.splice(index, 1);
                }
            });
        }

        function drawGame() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            // Draw gradient background
            const gradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
            gradient.addColorStop(0, '#2a2a4a');
            gradient.addColorStop(1, '#1a1a2e');
            ctx.fillStyle = gradient;
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            drawBasket();
            drawFood();
        }

        function gameLoop() {
            if (!gameRunning) return;
            updateGame();
            drawGame();
            animationId = requestAnimationFrame(gameLoop);
        }

        function startGame() {
            if (gameRunning) return;
            gameRunning = true;
            score = 0;
            foods = [];
            document.getElementById('score').textContent = score;
            document.getElementById('startBtn').textContent = '🎮 Playing...';
            document.getElementById('startBtn').disabled = true;
            
            // Spawn food periodically
            const spawnInterval = setInterval(() => {
                if (!gameRunning) {
                    clearInterval(spawnInterval);
                    return;
                }
                createFood();
            }, 800);
            
            gameLoop();
        }

        function endGame() {
            gameRunning = false;
            cancelAnimationFrame(animationId);
            
            if (score > highScore) {
                highScore = score;
                localStorage.setItem('foodCatcherHighScore', highScore);
                document.getElementById('highScore').textContent = highScore;
                alert(`🎉 NEW HIGH SCORE: ${score}! You earned a 15% discount coupon: WINNER15`);
            } else {
                alert(`Game Over! Score: ${score}. Try again to beat your high score!`);
            }
            
            document.getElementById('startBtn').textContent = '🎮 Play Again';
            document.getElementById('startBtn').disabled = false;
            foods = [];
            drawGame();
        }

        // Keyboard controls
        document.addEventListener('keydown', (e) => {
            keys[e.key] = true;
            if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                e.preventDefault();
            }
        });
        document.addEventListener('keyup', (e) => keys[e.key] = false);

        // Touch controls
        canvas.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
        });

        canvas.addEventListener('touchmove', (e) => {
            e.preventDefault();
            const touchX = e.touches[0].clientX;
            const diff = touchX - touchStartX;
            
            if (diff > 0 && basket.x < canvas.width - basket.width) {
                basket.x += basket.speed;
            } else if (diff < 0 && basket.x > 0) {
                basket.x -= basket.speed;
            }
            touchStartX = touchX;
        });

        // Initial canvas draw
        drawGame();

        // Responsive canvas
        function resizeCanvas() {
            const container = canvas.parentElement;
            const maxWidth = Math.min(600, container.clientWidth - 40);
            canvas.style.width = maxWidth + 'px';
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();
    </script>
</body>
</html>