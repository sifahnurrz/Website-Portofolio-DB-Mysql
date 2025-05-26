<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Sifah Nur Rizkiyah</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/abc123xyz.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo"> 
                <img src="logo.png" alt="Logo"> 
            </div>
            <div class="hamburger" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul class="nav-links"> 
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonial">Testimoni</a></li>
                <li><a href="#contact" class="contact-link">Let's Contact</a></li> 
            </ul>
        </nav>        
    </header>
    
    <div class="side-menu" id="sideMenu">
        <span class="close-btn" onclick="toggleMenu()" style="cursor: pointer; font-size: 24px; color: #5755FE;">&times;</span>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#testimonial">Testimoni</a></li>
            <li><a href="#contact">Let's Contact</a></li>
        </ul>
    </div>

    <section id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Sifah Nur Rizkiyah</h1>
            <h2>I'm a <span class="highlight-title">Graphic Designer</span></h2>
            <p>Get ready to immerse yourself in a universe where imagination meets design.</p>
            <button class="btn-profile">View My Profile</button>
        </div>
        <div class="home-right">
            <img src="profile.png" alt="Sifah Nur Rizkiyah">
        </div>
    </section>

    <section id="about">
        <div class="about-image">
            <img src="profile.png" alt="Sifah Nur Rizkiyah">
        </div>
        <div class="about-content">
            <h2><span class="blue-text">About</span> <span class="black-text">Me</span></h2>
            <p>
                Hi, I'm Sifah Nur Rizkiyah, a passionate Graphic Designer who transforms ideas into impactful visuals. 
                With a keen eye for aesthetics, I specialize in branding, digital illustrations, and social media design.
            </p>
            <p>
                For me, design is more than visuals—it's about storytelling and emotion. My journey began with a love for 
                colors, typography, and composition, leading me to explore the world of graphic design and digital art.
            </p>
            <a href="#" class="btn-about">Read More</a>
        </div>
    </section>    

    <section id="services">
        <h2><span class="black-text">Our</span> <span class="blue-text">Services</span></h2>
        <div class="service-container">
            <div class="service-item">
                <i class="fas fa-paint-brush"></i>
                <img src="palette.png" style="width: 20%;" alt="Sifah Nur Rizkiyah">
                <h3>Branding & Identity</h3>
                <p>Create a strong and unique brand presence with custom logos, brand guidelines, and visual identity.</p>
                <button class="btn">See More</button>
            </div>
            <div class="service-item">
                <i class="fas fa-desktop"></i>
                <img src="mobile.png" style="width: 10%;" alt="Sifah Nur Rizkiyah">
                <h3>Social Media Design</h3>
                <p>Engaging and eye-catching designs for social media, including posts, banners, and templates to boost online presence.</p>
                <button class="btn">See More</button>
            </div>
            <div class="service-item">
                <i class="fas fa-print"></i>
                <img src="gallery.png" style="width: 18%;" alt="Sifah Nur Rizkiyah">
                <h3>Print & Digital Design</h3>
                <p>Professional designs for both print and digital needs, such as brochures, posters, and marketing materials.</p>
                <button class="btn">See More</button>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <h2>Portfolio</h2>
        <div class="portfolio-container">
            <img src="porto1.jpg" style="width: 30%;" alt="Portfolio 1">
            <img src="porto2.jpg" style="width: 30%;" alt="Portfolio 2">
            <img src="porto3.jpg" style="width: 30%;" alt="Portfolio 3">
        </div>
    </section>

    <section id="testimonial">
        <h2>Testimoni</h2>
        <div class="testimonial-container">
            <div class="testimoni-card">
                <img src="testi2.png" alt="Foto Testimoni">
                <p>Sifah is incredibly talented! She transformed our brand identity with a fresh and modern look that truly stands out.</p>
                <p>-Sarah M., Brand Manager</p>
            </div>
            <div class="testimoni-card">
                <img src="testi1.png" alt="Foto Testimoni">
                <p>The social media graphics she created were exactly what we needed. Our engagement and interactions skyrocketed!</p>
                <p>-Daniel R., Marketing Specialist</p>
            </div>
            <div class="testimoni-card">
                <img src="testi1.png" alt="Foto Testimoni">
                <p>Sifah's work exceeded my expectations. She understood my ideas and turned them into beautiful, effective designs.</p>
                <p>-Michael T., Startup Founder</p>
            </div>
            <div class="testimoni-card">
                <img src="testi1.png" alt="Foto Testimoni">
                <p>Her designs are not just aesthetically pleasing but also strategically impactful. Highly recommended!</p>
                <p>-Kevin J., E-Commerce Entrepreneur</p>
            </div>
            <div class="testimoni-card">
                <img src="testi2.png" alt="Foto Testimoni">
                <p>Professional, creative, and detail-oriented! The branding package she designed perfectly reflects our company's vision.</p>
                <p>-Jessica L., Business Owner</p>
            </div>
            <div class="testimoni-card">
                <img src="testi2.png" alt="Foto Testimoni">
                <p>Working with Sifah was a great experience! She delivers high-quality visuals and always meets deadlines.</p>
                <p>-Emma R., Project Manager</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2><span>Contact</span> Me</h2>
        <div class="contact-container">
            <img src="contact.png" class="contact-img" alt="Contact">
            <form id="contactForm" action="submit_contact.php" method="POST">
                <div class="form-group">
                <input type="text" id="firstName" name="firstName" placeholder="First Name" maxlength="25" required>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" maxlength="25" required>
                </div>
                <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email Address" maxlength="50" required>
                <input type="tel" id="phone" name="phone" placeholder="Phone Number" maxlength="15" required>
                </div>
                <textarea id="message" name="message" placeholder="Message" maxlength="250" required></textarea>
                <button type="submit">Send Message</button>
            </form>
            <div>
    </section>
    
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close close-popup">&times;</span>
                <div class="error-icon">✖</div>
                <h2 class="error-title">Pesan Error</h2>
                <p id="errorMsg"></p>
                <button class="ok-button close-popup">Ok</button>
            </div>
        </div>
      
    
    <footer>
        <div class="social-icons">
            <a href="#"><img src="ig.png" alt="Instagram"></a>
            <a href="#"><img src="fb.png" alt="Facebook"></a>
            <a href="#"><img src="email.png" alt="Email"></a>
            <a href="#"><img src="pinterest.png" alt="Pinterest"></a>
        </div>
    </footer>    

    <script src="script.js"></script>
</body>
</html>