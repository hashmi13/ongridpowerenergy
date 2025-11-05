<?php

get_header();
?>

<section class="contact-hero">
  <div class="contact-overlay">
    <div class="contact-content">
      <div class="contact-text">
        <h1>Convert Light <br> to Energy</h1>
        <p>Reduce your electricity bill today!</p>
      </div>

      <div class="contact-form-box">
        <h2>CONTACT US</h2>
        <p>We will get back to you within 24 hours or call us if you need immediate assistance 9978458710</p>

        <form method="post" action="">
          <div class="form-row">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
          </div>
          <input type="email" name="email" placeholder="Email" required>
          <input type="text" name="phone" placeholder="Phone" required>
          <textarea name="message" placeholder="How can we help?" required></textarea>
          <button type="submit">Send</button>
        </form>
      </div>
    </div>
 
  </div>
  
  
</section>

<?php get_footer(); ?>
