<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Hub - Delicious Cuisine</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ============ HEADER STYLES ============ */
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0; 
            box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4);
            z-index: 1000;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .logo::before {
            content: "🍽️";
            font-size: 2rem;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding-bottom: 5px;
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(90deg, #FFD700, #FFA500);
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        nav a:hover {
            color: #FFD700;
        }

        .header-icons {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .icon-btn {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .icon-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .icon-btn:active {
            transform: translateY(-1px);
        }

        /* ============ MAIN CONTENT ============ */
        main {
            flex: 1;
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
            width: 100%;
        }

        /* ============ FOOTER STYLES ============ */
        footer {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #fff;
            margin-top: 3rem;
            padding: 3rem 0 0;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            color: #FFD700;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #FFD700, #FFA500);
            bottom: 0;
            left: 0;
        }

        .footer-section p {
            color: #bbb;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.8rem;
        }

        .footer-section ul li a {
            color: #bbb;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-section ul li a:hover {
            color: #FFD700;
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid #FFD700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #FFD700;
            font-size: 1.2rem;
        }

        .social-icon:hover {
            background: #FFD700;
            color: #16213e;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 3rem;
            padding-top: 2rem;
            text-align: center;
            color: #999;
        }

        .footer-bottom p {
            margin-bottom: 0.5rem;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 1rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #FFD700;
        }

        /* ============ RESPONSIVE DESIGN ============ */
        @media (max-width: 768px) {
            .header-container {
                flex-wrap: wrap;
                padding: 1rem;
            }

            nav ul {
                gap: 1rem;
                order: 3;
                width: 100%;
                margin-top: 1rem;
                justify-content: center;
            }

            .logo {
                font-size: 1.4rem;
            }

            nav a {
                font-size: 0.9rem;
            }

            .icon-btn {
                padding: 0.5rem 0.8rem;
                font-size: 0.9rem;
            }

            .header-icons {
                gap: 1rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
                padding: 2rem 1rem;
            }

            main {
                margin: 2rem auto;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="header-container">
            <div class="logo">Food Hub</div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <button class="icon-btn">🔍</button>
                <button class="icon-btn">❤️</button>
                <button class="icon-btn">🛒</button>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        <h1>Welcome to Food Hub</h1>
        <p>Discover delicious cuisines from around the world.</p>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <!-- About Section -->
            <div class="footer-section">
                <h3>🍽️ About Us</h3>
                <p>Food Hub is your ultimate destination for culinary excellence. We bring the finest flavors and freshest ingredients to your table.</p>
                <div class="social-links">
                    <div class="social-icon">f</div>
                    <div class="social-icon">𝕏</div>
                    <div class="social-icon">📷</div>
                    <div class="social-icon">▶</div>
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="footer-section">
                <h3>📍 Quick Links</h3>
                <ul>
                    <li><a href="#home">→ Home</a></li>
                    <li><a href="#menu">→ Menu</a></li>
                    <li><a href="#reservations">→ Reservations</a></li>
                    <li><a href="#events">→ Events</a></li>
                    <li><a href="#gallery">→ Gallery</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="footer-section">
                <h3>📞 Contact Info</h3>
                <p><strong>Address:</strong> 123 Food Street, Culinary City, CC 12345</p>
                <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                <p><strong>Email:</strong> <a href="mailto:info@foodhub.com" style="color: #FFD700;">info@foodhub.com</a></p>
                <p><strong>Hours:</strong> Mon - Sun, 10:00 AM - 10:00 PM</p>
            </div>

            <!-- Newsletter Section -->
            <div class="footer-section">
                <h3>💌 Newsletter</h3>
                <p>Subscribe to get the latest recipes and food updates!</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                    <input type="email" placeholder="Your email" style="flex: 1; padding: 0.7rem; border: none; border-radius: 5px; background: rgba(255,255,255,0.1); color: white; border: 1px solid #FFD700;">
                    <button style="padding: 0.7rem 1.5rem; background: #FFD700; color: #16213e; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">Send</button>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; 2025 Food Hub. All rights reserved.</p>
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#cookies">Cookie Settings</a>
                <a href="#sitemap">Sitemap</a>
            </div>
        </div>
    </footer>
</body>
</html>