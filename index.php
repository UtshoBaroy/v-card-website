<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Creative Portfolio</title>

<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

</head>

<body>

<!-- NAVBAR -->
<nav>

  <div class="logo">

    <img src="assets/arif.jpg" alt="arif-khan">

    <div class="logo-text">
      <h2>Arif Khan</h2>
      <p>Graphic Designer & Videographer</p>
    </div>

  </div>

  <div class="menu">

    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#portfolio">Portfolio</a>
    <a href="#contact">Contact</a>

  </div>

</nav>


<!-- MAIN CONTENT -->
<main class="main-content">

<!-- HOME -->
<section id="home" class="hero">

  <div class="video-container">

    <iframe width="560" height="315"
    src="https://www.youtube.com/embed/J19Zncf1wAQ"
    title="YouTube video player"
    frameborder="0"
    allowfullscreen>
    </iframe>

  </div>

  <div class="hero-text">
    <h1>Creative Visual Storytelling</h1>
    <p>Graphic Design • Video Editing • Branding</p>

    <a href="#portfolio" class="btn">
      View Projects
    </a>
  </div>

</section>


<!-- ABOUT -->
<section id="about">
  <h2>About Me</h2>
  <p>
    I create logos, branding, cinematic edits,
    social media content and motion graphics.
  </p>
</section>


<!-- SERVICES -->
<section id="services">

  <h2>Services</h2>

  <div class="cards">

    <div class="card">
      <h3>Logo Design</h3>
      <p>Modern brand identity creation</p>
    </div>

    <div class="card">
      <h3>Video Editing</h3>
      <p>Cinematic editing and reels</p>
    </div>

    <div class="card">
      <h3>Motion Graphics</h3>
      <p>Creative animated visuals</p>
    </div>

  </div>

</section>


<!-- PORTFOLIO -->
<section id="portfolio">

  <h2>Portfolio</h2>

  <div class="gallery">

    <div class="item">
      <img src="https://picsum.photos/400/300?1">
      <h4>Brand Project</h4>
    </div>

    <div class="item">
      <img src="https://picsum.photos/400/300?2">
      <h4>Poster Design</h4>
    </div>

    <div class="item">
      <img src="https://picsum.photos/400/300?3">
      <h4>Video Editing</h4>
    </div>

  </div>

</section>


<!-- CONTACT -->
<section id="contact">

  <h2>Contact</h2>

  <form method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Message"></textarea>
    <button type="submit">Send Message</button>
  </form>

</section>

</main>


<!-- FOOTER -->
<footer class="footer">

  <div class="footer-container">

    <div class="footer-links">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
    </div>

    <div class="footer-social">
      <a href="#"><i class="ri-facebook-line"></i></a>
      <a href="#"><i class="ri-instagram-line"></i></a>
      <a href="#"><i class="ri-youtube-line"></i></a>
    </div>

    <p class="copyright">
      © 2026 Arif Khan. All Rights Reserved.
    </p>

  </div>

</footer>

</body>
</html>