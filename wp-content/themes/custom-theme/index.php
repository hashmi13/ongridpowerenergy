<?php
get_header();
?>
<section class="hero">
  <div class="hero-content">
    <h1>On Grid Power Energy</h1>
    <p>The Complete Power Solution</p>
    <a href="<?php echo site_url('/contact'); ?>" class="btn btn-hero">Get Started</a>
  </div>
</section>
<section class="energy-section">
  <div class="energy-container">
    <div class="energy-image">
     <img src="<?php echo get_template_directory_uri(); ?>/images/solar.png" alt="About Image" />

    </div>

    <div class="energy-content">
      <h2>Renewable energy<br>opportunities</h2>
      <div class="underline"></div>

      <ul>
        <li>You will find the latest information about our company here. You will find the latest...</li>
        <li>You will find the latest information about our company here. You will find the latest...</li>
      </ul>
    </div>
  </div>
</section>

<div class="cards-header">
    <h2>Our Comprehensive Solar Energy Services</h2>
  </div>
<section class="cards-section">
  <div class="card">
    <img src="https://cdn-icons-png.flaticon.com/128/1557/1557682.png" alt="Solar Icon" class="card-logo" />
    <h3>Solar Installation</h3>
    <p>We provide reliable and cost-effective solar panel installation services for homes and businesses.</p>
    <div class="card-footer">
      <a href="<?php echo site_url('/contact'); ?>" class="btn-card">Get Now</a>
    </div>
  </div>

  <div class="card">
    <img src="https://cdn-icons-png.flaticon.com/128/7822/7822735.png" alt="Battery Icon" class="card-logo" />
    <h3>Energy Storage</h3>
    <p>Our energy storage solutions help you store excess power efficiently for future use.</p>
    <div class="card-footer">
      <a href="<?php echo site_url('/contact'); ?>" class="btn-card">Get Now</a>
    </div>
  </div>

  <div class="card">
    <img src="https://cdn-icons-png.flaticon.com/128/18651/18651270.png" alt="Maintenance Icon" class="card-logo" />
    <h3>Maintenance & Support</h3>
    <p>We ensure your solar system runs smoothly with our expert maintenance and support team.</p>
    <div class="card-footer">
     <a href="<?php echo site_url('/contact'); ?>" class="btn-card">Get Now</a>

    </div>
  </div>
</section>

    <div class="services-container">
        <div class="section-header">
            <h2 class="section-title">Let's see how it's work</h2>
            <p class="section-subtitle">Comprehensive renewable energy services to power your home or business sustainably</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt="star Image" />

                </div>
                <h3 class="service-title">Initial Consultation</h3>
                <p class="service-description">We assess your energy needs and provide a personalized solar solution plan, understanding your unique requirements.</p>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
            
            <div class="service-card">
                <div class="card-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/maintain.png" alt=" power Image" />

                </div>
                <h3 class="service-title">Expert Installation</h3>
                <p class="service-description">Our certified technicians ensure a seamless and efficient installation of your solar panels and system.</p>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
            <div class="service-card">
                <div class="card-icon">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/power.png" alt="About Image" />

                </div>
                <h3 class="service-title">System Activation</h3>
                <p class="service-description">Once installed, your solar system is activated, connecting to the grid and beginning energy generation.</p>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
            
            <div class="service-card">
                <div class="card-icon">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/leaf.png" alt="leaf Image" />

                </div>
                <h3 class="service-title">Enjoy CleanEnergy</h3>
                <p class="service-description">Experience significant savings on your electricity bills while contributing to a greener, more sustainable planet.</p>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
        </div>
    </div>


<?php
get_footer();

?>
</html>
