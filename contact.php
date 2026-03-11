<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact — The Hatch Burgers</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,600;1,400&family=Bebas+Neue&family=DM+Sans:wght@200;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <a href="index.html" class="nav-brand">
      <div class="nav-brand-title">The Hatch</div>
      <div class="nav-brand-sub">Burgers · Nijmegen</div>
    </a>
    <ul class="nav-links">
      <li><a href="index.html" class="nav-link">Home</a></li>
      <li class="nav-dot">•</li>
      <li><a href="menu.html" class="nav-link">Menu</a></li>
      <li class="nav-dot">•</li>
      <li><a href="search.html" class="nav-link">Search</a></li>
      <li class="nav-dot">•</li>
      <li><a href="reservation.html" class="nav-link">Reserve</a></li>
      <li class="nav-dot">•</li>
      <li><a href="contact.html" class="nav-link active">Contact</a></li>
    </ul>
    <a href="login.html" class="nav-cart">Login</a>
  </nav>

  <div class="page-header">
    <div class="page-title">Contact</div>
    <div class="page-subtitle">Get in touch with us</div>
    <div class="gold-rule"></div>
  </div>

  <main>
    <div class="contact-layout">

      <!-- CONTACT INFO -->
      <div>
        <div class="contact-info-block">
          <div class="contact-info-label">Address</div>
          <div class="contact-info-value">Placeholder Street 1<br>6511 AB Nijmegen</div>
        </div>
        <div class="contact-info-block">
          <div class="contact-info-label">Phone</div>
          <div class="contact-info-value">+31 00 000 0000</div>
        </div>
        <div class="contact-info-block">
          <div class="contact-info-label">Email</div>
          <div class="contact-info-value">hello@thehatch.nl</div>
        </div>
        <div class="contact-info-block">
          <div class="contact-info-label">Opening Hours</div>
          <div class="contact-info-value">
            Mon–Fri: 12:00 — 22:00<br>
            Sat–Sun: 12:00 — 23:00
          </div>
        </div>
      </div>

      <!-- CONTACT FORM — connect action to PHP mail handler -->
      <form action="contact.php" method="POST">
        <div class="form-group">
          <label class="form-label">Your Name</label>
          <input class="form-input" type="text" name="name" placeholder="John Smith" required>
        </div>
        <div class="form-group">
          <label class="form-label">Email Address</label>
          <input class="form-input" type="email" name="email" placeholder="john@example.com" required>
        </div>
        <div class="form-group">
          <label class="form-label">Subject</label>
          <input class="form-input" type="text" name="subject" placeholder="Question about...">
        </div>
        <div class="form-group">
          <label class="form-label">Message</label>
          <textarea class="form-textarea" name="message" placeholder="Your message..." required></textarea>
        </div>
        <button class="btn" type="submit">Send Message</button>
      </form>

    </div>
  </main>
</body>
</html>
