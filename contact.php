<?php include_once("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Circle Solutions | Contact</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/contactPage.css" />
</head>

<body>
  <?php render_header(); ?>
  <main>
    <div class="mediaAndMapContainer">
      <div class="media">
        <h2>Visit Us 👋</h2>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="newsletterForm">
          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newsletterSubmit'])) {
            $newsletterEmail = filter_input(INPUT_POST, 'newsletterEmail', FILTER_VALIDATE_EMAIL);

            if ($newsletterEmail) {
              echo "<b>Thank you for subscribing to our media updates!</b>";
            } else {
              echo "<b>Please enter a valid email address.</b>";
            };
          } else {
          ?>
            <input type="email" name="newsletterEmail" id="newsletterEmail" placeholder="Type your email" required />
            <input type="submit" name="newsletterSubmit" value="Submit" />
          <?php
          }
          ?>
        </form>
        <span>or our social medias</span>
        <div class="socials">
          <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
      </div>

      <div class="map">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe
              class="gmap_iframe"
              width="100%"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              src="https://maps.google.com/maps?width=670&amp;height=382&amp;hl=en&amp;q=Van Schaikweg 94&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">google maps embed</a>
          </div>
        </div>
      </div>
    </div>

    <div class="contactContainer">
      <div class="contactInfo">
        <h2>Contact Us</h2>
        <div class="grid">
          <div>
            <span>E-mail</span>
            <b>Circles@solutions.com</b>
          </div>
          <div class="phone">
            <span> Phone </span>
            <b>+31 6 567788234</b>
          </div>
          <div>
            <span> Street </span>
            <b>Van Schaikweg 94</b>
          </div>
          <div>
            <span>City</span>
            <b>Emmen</b>
          </div>
          <div>
            <span>Postcode</span>
            <b>7811 KL</b>
          </div>
        </div>
      </div>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="contactForm">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contactSubmit'])) {
          $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
          $topic = filter_input(INPUT_POST, 'topic');
          $message = filter_input(INPUT_POST, 'message');

          if ($email && $topic && $message && strlen($message) >= 20) {
            echo "<b>Thanks for sending your message!</b>";
          } else {
            echo "<b>Error: Please fill in all fields correctly and ensure the message is at least 20 characters long.</b>";
          }
        } else {
        ?>
          <div>
            <div>
              <label for="topic">Topic</label>
              <input type="text" name="topic" id="topic" placeholder="Topic" required />
            </div>
            <div>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" required />
            </div>
          </div>

          <label for="message">Message</label>
          <textarea
            id="message"
            name="message"
            rows="4"
            cols="50"
            placeholder="Type"
            required
            minlength="20"></textarea>
          <input type="submit" name="contactSubmit" value="Submit" />
        <?php
        }
        ?>
      </form>
    </div>
  </main>


</body>

</html>