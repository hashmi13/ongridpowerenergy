<?php
/* Template Name: About us Page */
get_header();
?>

<div class="about-section">
        

        <div class="section-header">
            <h1 class="main-heading">5 Years Experience In Solar & Renewable Energy Industry</h1>
            <div class="heading-decoration"></div>
        </div>

        <div class="team-grid">
            <div class="team-card">
                <div class="image-container">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/man-2.png" alt="img" />
                    <div class="image-overlay">
                        <p class="overlay-text">Leading innovation in solar energy with 5+ years of industry expertise</p>
                    </div>
                </div>
                <div class="team-info">
                    <h3 class="team-name">Site engineer</h3>
                    <!-- <p class="team-role">Site engineer</p> -->
                </div>
            </div>

            <div class="team-card">
                <div class="image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/man-1.png" alt="img" />
                    <div class="image-overlay">
                        <p class="overlay-text">Pioneering sustainable energy solutions for a greener tomorrow</p>
                    </div>
                </div>
                <div class="team-info">
                    <h3 class="team-name">Propriator</h3>
                    <!-- <p class="team-role">Propriator</p> -->
                </div>
            </div>

            <div class="team-card">
                <div class="image-container">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/man-3.png" alt="img" />
                    <div class="image-overlay">
                        <p class="overlay-text">Expert engineer specializing in renewable energy systems</p>
                    </div>
                </div>
                <div class="team-info">
                    <h3 class="team-name">Director | Founder</h3>
                    <!-- <p class="team-role">Director | Founder</p> -->
                </div>
            </div>

        </div>
    </div>


    
        <div class="testimonial-section">
        <div class="section-header">
            <h1 class="main-heading">What Our Clients Say</h1>
            <p class="sub-heading">Hear from satisfied customers who have transformed their energy consumption with our solar solutions</p>
        </div>

        <div class="carousel-wrapper">
            <div class="carousel-track">
                <!-- Original Set -->
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/client-1.png" alt="About Image" />
                </div>
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/client-2.png" alt="About Image" />
                </div>

                <!-- Duplicate Set for Seamless Loop -->
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/client-1.png" alt="About Image" />
                </div>
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/client-2.png" alt="About Image" />
                </div>
                 <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/client-1.png" alt="About Image" />
                </div>
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/client-2.png" alt="About Image" />
                </div>

            </div>
        </div>
    </div>


<?php get_footer(); ?>
