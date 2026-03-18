<nav>
  <a href="index.php" class="nav-brand">
    <div class="nav-brand-title">The Hatch</div>
    <div class="nav-brand-sub">Burgers · Nijmegen</div>
  </a>
  <ul class="nav-links">
    <li><a href="index.php" class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>">Home</a></li>
    <li class="nav-dot">•</li>
    <li><a href="menu.php" class="nav-link <?= $activePage === 'menu' ? 'active' : '' ?>">Menu</a></li>
    <li class="nav-dot">•</li>
    <li><a href="search.php" class="nav-link <?= $activePage === 'search' ? 'active' : '' ?>">Search</a></li>
    <li class="nav-dot">•</li>
    <li><a href="reservation.php" class="nav-link <?= $activePage === 'reservation' ? 'active' : '' ?>">Reserve</a></li>
    <li class="nav-dot">•</li>
    <li><a href="contact.php" class="nav-link <?= $activePage === 'contact' ? 'active' : '' ?>">Contact</a></li>
  </ul>
  <a href="login.php" class="nav-cart">Login</a>
</nav>
