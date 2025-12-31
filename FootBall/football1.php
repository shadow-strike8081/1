<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Football Hub - Your ultimate destination for football news, matches, players, and live scores. Join millions of football fans worldwide.">
    <meta name="keywords" content="football, soccer, premier league, champions league, world cup, football news, live scores">
    <meta name="author" content="Football Hub">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#1a1a2e">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Football Hub - Ultimate Football Experience">
    <meta property="og:description" content="Your ultimate destination for football news, matches, players, and live scores.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://footballhub.com">
    
    <title>Football Hub | Ultimate Football Experience</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #ff6b35;
            --secondary: #1a1a2e;
            --accent: #16213e;
            --highlight: #00d9ff;
            --gold: #ffd700;
            --grass: #2ecc71;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: var(--secondary);
            color: #fff;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Russo One', sans-serif;
        }
        
        /* Navbar */
        .navbar {
            background: rgba(26, 26, 46, 0.95) !important;
            backdrop-filter: blur(10px);
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 30px rgba(255, 107, 53, 0.3);
        }
        
        .navbar-brand {
            font-family: 'Russo One', sans-serif;
            font-size: 1.8rem;
            background: linear-gradient(135deg, var(--primary), var(--highlight));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .nav-link {
            color: #fff !important;
            font-weight: 500;
            margin: 0 10px;
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--highlight));
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-link:hover {
            color: var(--primary) !important;
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.9), rgba(22, 33, 62, 0.9)),
                        url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=1920') center/cover fixed;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 107, 53, 0.1) 0%, transparent 50%);
            animation: pulse 8s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.2); opacity: 0.8; }
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 20px;
        }
        
        .hero h1 span {
            background: linear-gradient(135deg, var(--primary), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary), #ff8c42);
            border: none;
            padding: 15px 40px;
            font-weight: 600;
            border-radius: 50px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.4);
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 107, 53, 0.6);
            color: #fff;
        }
        
        .btn-outline-custom {
            border: 2px solid var(--highlight);
            color: var(--highlight);
            padding: 13px 38px;
            font-weight: 600;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            background: transparent;
        }
        
        .btn-outline-custom:hover {
            background: var(--highlight);
            color: var(--secondary);
            transform: translateY(-3px);
        }
        
        /* Floating Ball Animation */
        .floating-ball {
            position: absolute;
            right: 10%;
            top: 50%;
            transform: translateY(-50%);
            font-size: 15rem;
            opacity: 0.15;
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(-50%) rotate(0deg); }
            50% { transform: translateY(-60%) rotate(180deg); }
        }
        
        /* Stats Section */
        .stats-section {
            background: var(--accent);
            padding: 60px 0;
            margin-top: -100px;
            position: relative;
            z-index: 10;
        }
        
        .stat-card {
            background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(0, 217, 255, 0.1));
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 40px rgba(255, 107, 53, 0.2);
        }
        
        .stat-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            background: linear-gradient(135deg, var(--primary), var(--highlight));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--gold);
        }
        
        /* Features Section */
        .features-section {
            padding: 100px 0;
            background: var(--secondary);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        .section-title h2 span {
            color: var(--primary);
        }
        
        .section-title p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.1rem;
        }
        
        .feature-card {
            background: linear-gradient(145deg, var(--accent), #0f0f1a);
            border-radius: 25px;
            padding: 40px;
            height: 100%;
            transition: all 0.4s ease;
            border: 1px solid transparent;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--highlight));
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }
        
        .feature-card:hover {
            transform: translateY(-15px);
            border-color: rgba(255, 107, 53, 0.3);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--highlight));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 25px;
        }
        
        /* Matches Section */
        .matches-section {
            padding: 100px 0;
            background: linear-gradient(180deg, var(--accent), var(--secondary));
        }
        
        .match-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .match-card:hover {
            background: rgba(255, 107, 53, 0.1);
            transform: scale(1.02);
        }
        
        .team-logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--grass), var(--highlight));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        .match-score {
            font-size: 2rem;
            font-weight: 700;
            color: var(--gold);
        }
        
        .match-status {
            background: var(--grass);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .match-status.upcoming {
            background: var(--primary);
        }
        
        /* Form Section */
        .form-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            position: relative;
        }
        
        .form-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1508098682722-e99c43a406b2?w=1920') center/cover;
            opacity: 0.05;
        }
        
        .contact-form {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 50px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 2;
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            padding: 15px 20px;
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: var(--primary);
            box-shadow: 0 0 20px rgba(255, 107, 53, 0.2);
            color: #fff;
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        
        .form-label {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            margin-bottom: 10px;
        }
        
        .form-select {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            padding: 15px 20px;
            color: #fff;
        }
        
        .form-select option {
            background: var(--secondary);
            color: #fff;
        }
        
        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        /* Players Section */
        .players-section {
            padding: 100px 0;
            background: var(--secondary);
        }
        
        .player-card {
            background: linear-gradient(145deg, var(--accent), #0f0f1a);
            border-radius: 25px;
            overflow: hidden;
            transition: all 0.4s ease;
            position: relative;
        }
        
        .player-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 30px 60px rgba(255, 107, 53, 0.3);
        }
        
        .player-img {
            height: 250px;
            background: linear-gradient(135deg, var(--primary), var(--highlight));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 6rem;
        }
        
        .player-info {
            padding: 25px;
        }
        
        .player-number {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--gold);
            color: var(--secondary);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
        }
        
        .player-position {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary), var(--highlight));
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 10px;
        }
        
        /* Footer */
        footer {
            background: var(--accent);
            padding: 60px 0 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer-logo {
            font-family: 'Russo One', sans-serif;
            font-size: 2rem;
            background: linear-gradient(135deg, var(--primary), var(--highlight));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--primary);
            padding-left: 10px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: #fff;
            margin-right: 10px;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }
        
        .social-icons a:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
        }
        
        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .floating-ball {
                font-size: 8rem;
                opacity: 0.1;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .contact-form {
                padding: 30px;
            }
            
            .stat-card {
                margin-bottom: 20px;
            }
        }
        
        /* Scroll to top */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--highlight));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
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
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.5);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-trophy-fill"></i> FootballHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#matches">Matches</a></li>
                    <li class="nav-item"><a class="nav-link" href="#players">Players</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content">
                    <p class="text-uppercase mb-3" style="color: var(--primary); letter-spacing: 3px; font-weight: 600;">
                        <i class="bi bi-star-fill"></i> Welcome to the Ultimate Football Experience
                    </p>
                    <h1 class="mb-4">Feel The <span>Passion</span> of Beautiful Game</h1>
                    <p class="lead mb-5" style="color: rgba(255,255,255,0.8);">
                        Join millions of football fans worldwide. Get live scores, match updates, 
                        player stats, and exclusive content from the world's biggest leagues.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#matches" class="btn btn-primary-custom">
                            <i class="bi bi-play-fill"></i> Watch Live
                        </a>
                        <a href="#contact" class="btn btn-outline-custom">
                            <i class="bi bi-person-plus"></i> Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="floating-ball">⚽</div>
    </header>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-lg-3">
                    <div class="stat-card fade-in">
                        <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
                        <div class="stat-number" data-count="50">0</div>
                        <p class="mb-0">Million Fans</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card fade-in">
                        <div class="stat-icon"><i class="bi bi-controller"></i></div>
                        <div class="stat-number" data-count="500">0</div>
                        <p class="mb-0">Live Matches</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card fade-in">
                        <div class="stat-icon"><i class="bi bi-flag-fill"></i></div>
                        <div class="stat-number" data-count="120">0</div>
                        <p class="mb-0">Countries</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card fade-in">
                        <div class="stat-icon"><i class="bi bi-trophy-fill"></i></div>
                        <div class="stat-number" data-count="25">0</div>
                        <p class="mb-0">Leagues</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Why Choose <span>FootballHub?</span></h2>
                <p>Experience football like never before with our premium features</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon"><i class="bi bi-broadcast"></i></div>
                        <h4>Live Streaming</h4>
                        <p style="color: rgba(255,255,255,0.7);">Watch every match live in HD quality. Never miss a goal with our reliable streaming service.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <h4>Real-time Stats</h4>
                        <p style="color: rgba(255,255,255,0.7);">Get detailed statistics, player performance metrics, and match analysis in real-time.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon"><i class="bi bi-bell-fill"></i></div>
                        <h4>Instant Alerts</h4>
                        <p style="color: rgba(255,255,255,0.7);">Receive instant notifications for goals, red cards, and match results on your device.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon"><i class="bi bi-calendar-event"></i></div>
                        <h4>Match Schedule</h4>
                        <p style="color: rgba(255,255,255,0.7);">Plan ahead with our comprehensive match schedules across all major leagues worldwide.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon"><i class="bi bi-chat-dots-fill"></i></div>
                        <h4>Fan Community</h4>
                        <p style="color: rgba(255,255,255,0.7);">Connect with fans worldwide, share opinions, and celebrate victories together.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon"><i class="bi bi-phone-fill"></i></div>
                        <h4>Mobile Ready</h4>
                        <p style="color: rgba(255,255,255,0.7);">Access all features on the go with our fully responsive mobile experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Matches Section -->
    <section class="matches-section" id="matches">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Live <span>Matches</span></h2>
                <p>Catch all the action from today's biggest games</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="match-card fade-in">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="d-flex align-items-center gap-3">
                                <div class="team-logo">MU</div>
                                <div>
                                    <h5 class="mb-0">Manchester United</h5>
                                    <small style="color: rgba(255,255,255,0.5);">Premier League</small>
                                </div>
                            </div>
                            <div class="text-center my-3 my-md-0">
                                <span class="match-status">LIVE 67'</span>
                                <div class="match-score mt-2">2 - 1</div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="text-end">
                                    <h5 class="mb-0">Liverpool FC</h5>
                                    <small style="color: rgba(255,255,255,0.5);">Premier League</small>
                                </div>
                                <div class="team-logo">LFC</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="match-card fade-in">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="d-flex align-items-center gap-3">
                                <div class="team-logo">RMA</div>
                                <div>
                                    <h5 class="mb-0">Real Madrid</h5>
                                    <small style="color: rgba(255,255,255,0.5);">La Liga</small>
                                </div>
                            </div>
                            <div class="text-center my-3 my-md-0">
                                <span class="match-status upcoming">20:45</span>
                                <div class="match-score mt-2">VS</div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="text-end">
                                    <h5 class="mb-0">FC Barcelona</h5>
                                    <small style="color: rgba(255,255,255,0.5);">La Liga</small>
                                </div>
                                <div class="team-logo">FCB</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="match-card fade-in">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="d-flex align-items-center gap-3">
                                <div class="team-logo">BAY</div>
                                <div>
                                    <h5 class="mb-0">Bayern Munich</h5>
                                    <small style="color: rgba(255,255,255,0.5);">Bundesliga</small>
                                </div>
                            </div>
                            <div class="text-center my-3 my-md-0">
                                <span class="match-status">LIVE 82'</span>
                                <div class="match-score mt-2">3 - 0</div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="text-end">
                                    <h5 class="mb-0">Borussia Dortmund</h5>
                                    <small style="color: rgba(255,255,255,0.5);">Bundesliga</small>
                                </div>
                                <div class="team-logo">BVB</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Players Section -->
    <section class="players-section" id="players">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Top <span>Players</span></h2>
                <p>Meet the legends dominating the pitch this season</p>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="player-card fade-in">
                        <div class="player-number">7</div>
                        <div class="player-img">👨‍🦱</div>
                        <div class="player-info">
                            <h5>Cristiano Ronaldo</h5>
                            <p class="mb-0" style="color: rgba(255,255,255,0.6);">Al Nassr</p>
                            <span class="player-position">Forward</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="player-card fade-in">
                        <div class="player-number">10</div>
                        <div class="player-img">👨</div>
                        <div class="player-info">
                            <h5>Lionel Messi</h5>
                            <p class="mb-0" style="color: rgba(255,255,255,0.6);">Inter Miami</p>
                            <span class="player-position">Forward</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="player-card fade-in">
                        <div class="player-number">9</div>
                        <div class="player-img">🧔</div>
                        <div class="player-info">
                            <h5>Erling Haaland</h5>
                            <p class="mb-0" style="color: rgba(255,255,255,0.6);">Man City</p>
                            <span class="player-position">Striker</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="player-card fade-in">
                        <div class="player-number">10</div>
                        <div class="player-img">👱</div>
                        <div class="player-info">
                            <h5>Kylian Mbappé</h5>
                            <p class="mb-0" style="color: rgba(255,255,255,0.6);">Real Madrid</p>
                            <span class="player-position">Forward</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="form-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title fade-in">
                        <h2>Join The <span>Community</span></h2>
                        <p>Sign up to receive exclusive updates and offers</p>
                    </div>
                    <div class="contact-form fade-in">
                        <form id="contactForm" novalidate>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
                                    <div class="invalid-feedback">Please enter your first name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
                                    <div class="invalid-feedback">Please enter your last name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                                    <div class="invalid-feedback">Please enter a valid email.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone">
                                </div>
                                <div class="col-12">
                                    <label for="team" class="form-label">Favorite Team</label>
                                    <select class="form-select form-control" id="team">
                                        <option value="">Select your favorite team</option>
                                        <option value="manchester-united">Manchester United</option>
                                        <option value="real-madrid">Real Madrid</option>
                                        <option value="barcelona">FC Barcelona</option>
                                        <option value="liverpool">Liverpool FC</option>
                                        <option value="bayern">Bayern Munich</option>
                                        <option value="psg">Paris Saint-Germain</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4" placeholder="Tell us about yourself..."></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="newsletter">
                                        <label class="form-check-label" for="newsletter" style="color: rgba(255,255,255,0.8);">
                                            Subscribe to our newsletter for weekly updates
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms" required>
                                        <label class="form-check-label" for="terms" style="color: rgba(255,255,255,0.8);">
                                            I agree to the Terms & Conditions *
                                        </label>
                                        <div class="invalid-feedback">You must agree to the terms.</div>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary-custom btn-lg">
                                        <i class="bi bi-send-fill me-2"></i>Submit Application
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="formSuccess" class="text-center mt-4" style="display: none;">
                            <div style="font-size: 4rem;">🎉</div>
                            <h3 style="color: var(--grass);">Thank You!</h3>
                            <p>Welcome to the FootballHub family! Check your email for confirmation.</p>
                        </div>
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
                    <div class="footer-logo"><i class="bi bi-trophy-fill"></i> FootballHub</div>
                    <p style="color: rgba(255,255,255,0.7);">Your ultimate destination for everything football. Join millions of fans and experience the beautiful game like never before.</p>
                    <div class="social-icons mt-4">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h5 class="mb-4">Quick Links</h5>
                    <div class="footer-links">
                        <a href="#home">Home</a>
                        <a href="#features">Features</a>
                        <a href="#matches">Matches</a>
                        <a href="#players">Players</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h5 class="mb-4">Leagues</h5>
                    <div class="footer-links">
                        <a href="#">Premier League</a>
                        <a href="#">La Liga</a>
                        <a href="#">Bundesliga</a>
                        <a href="#">Serie A</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h5 class="mb-4">Support</h5>
                    <div class="footer-links">
                        <a href="#">Help Center</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h5 class="mb-4">Download App</h5>
                    <div class="footer-links">
                        <a href="#"><i class="bi bi-apple me-2"></i>App Store</a>
                        <a href="#"><i class="bi bi-google-play me-2"></i>Play Store</a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p class="mb-0">&copy; 2024 FootballHub. All rights reserved. Made with ❤️ for football fans.</p>
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
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Scroll to top button
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

        // Fade in animation on scroll
        const fadeElements = document.querySelectorAll('.fade-in');
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

        fadeElements.forEach(el => observer.observe(el));

        // Counter animation
        const counters = document.querySelectorAll('.stat-number');
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-count'));
                    let count = 0;
                    const increment = target / 50;
                    const updateCounter = () => {
                        count += increment;
                        if (count < target) {
                            counter.textContent = Math.ceil(count) + '+';
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target + '+';
                        }
                    };
                    updateCounter();
                    counterObserver.unobserve(counter);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => counterObserver.observe(counter));

        // Form validation and submission
        const form = document.getElementById('contactForm');
        const formSuccess = document.getElementById('formSuccess');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!form.checkValidity()) {
                e.stopPropagation();
                form.classList.add('was-validated');
                return;
            }

            // Simulate form submission
            const submitBtn = form.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Submitting...';
            submitBtn.disabled = true;

            setTimeout(() => {
                form.style.display = 'none';
                formSuccess.style.display = 'block';
                formSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 1500);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const navHeight = navbar.offsetHeight;
                    const targetPosition = target.offsetTop - navHeight;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                        bsCollapse.hide();
                    }
                }
            });
        });
    </script>
</body>
</html>