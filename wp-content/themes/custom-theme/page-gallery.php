<?php
/* Template Name: About Page */
get_header();
?>

 

  <!-- Residential Section -->
  <section class="gallery-section">
  <h2>Residential Installations</h2>
  <p>
    Discover how homeowners are embracing solar energy with rooftop and home-based systems designed for efficiency and beauty.
  </p>
  <div class="gallery-grid">
    <img src="<?php echo get_template_directory_uri(); ?>/images/img-1.png" alt="Residential Solar" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/client-1.png" alt="Residential Solar" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/img-8.png" alt="Residential Solar" />
  </div>

  <h2>Maintenance & Monitoring</h2>
  <p>
    We ensure each solar system continues to perform at its peak with professional maintenance and support.
  </p>
  <div class="gallery-grid">
    <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" alt="Residential Solar" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/img-3.png" alt="Residential Solar" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Residential Solar" />
  </div>
</section>



  <!-- CTA Section -->
  <section class="gallery-cta">
    <h2>Join the <span class='sol-1'>Solar Revolution</span></h2>
    <p>Ready to switch to solar? Let’s build a cleaner, brighter future together.</p>
    <a href="<?php echo site_url('/contact'); ?>" class="btn">Get a Free Quote</a>
  </section>

<?php get_footer(); ?>
