<?php
get_header();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $first_name = sanitize_text_field($_POST['first_name']);
  $last_name  = sanitize_text_field($_POST['last_name']);
  $email      = sanitize_email($_POST['email']);
  $phone      = sanitize_text_field($_POST['phone']);
  $message    = sanitize_textarea_field($_POST['message']);

  $to = get_option('admin_email'); // Admin email from WP settings
  $subject = "New Contact Form Submission from $first_name $last_name";

  $body = "You have received a new message from your website contact form:\n\n";
  $body .= "Name: $first_name $last_name\n";
  $body .= "Email: $email\n";
  $body .= "Phone: $phone\n\n";
  $body .= "Message:\n$message\n";

  $headers = array('Reply-To: ' . $email);

  // Send the email
  if (wp_mail($to, $subject, $body, $headers)) {
    echo '<p style="color: green; text-align:center; margin-top:20px;">✅ Thank you! Your message has been sent successfully.</p>';
  } else {
    echo '<p style="color: red; text-align:center; margin-top:20px;">❌ Sorry, something went wrong. Please try again later.</p>';
  }
}
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
