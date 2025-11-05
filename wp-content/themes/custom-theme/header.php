
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ON Grid</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <header class="navbar">
  <div class="nav-container">
    <!-- Logo -->
    <div class="logo">
      <a href="<?php echo site_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" height="60px">
      </a>
    </div>

    <!-- Nav Links -->
    <nav class="nav-links" id="nav-menu">
      <button class="close-btn" id="close-btn">&times;</button> 

      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary-menu',
          'container' => false,
          'menu_class' => '',
        ));
      ?>

      <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary mobile-btn">Get Quote</a>
    </nav>

    <!-- Right Actions -->
    <div class="nav-actions">
      <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary desktop-btn">Get Quote</a>
      <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</header>


     
<script>
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.getElementById('nav-menu');
  const closeBtn = document.getElementById('close-btn');

  hamburger.addEventListener('click', () => {
    navMenu.classList.add('show');
  });

  closeBtn.addEventListener('click', () => {
    navMenu.classList.remove('show');
  });

  // Optional: close menu when clicking outside or on a link
  document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => navMenu.classList.remove('show'));
  });

  // Navbar scroll effect
  window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>


