<?php include_once("dutch_header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Circle Solutions | Contact</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="../styles/global.css" />
  <link rel="stylesheet" href="../styles/contactPage.css" />
</head>

<body>
  <?php render_dutch_header(); ?>
  <main>
    <div class="mediaAndMapContainer">
      <div class="media">
        <h2>Bezoek ons 👋</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="newsletterForm">
          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newsletterSubmit'])) {
            $newsletterEmail = filter_input(INPUT_POST, 'newsletterEmail', FILTER_VALIDATE_EMAIL);

            if ($newsletterEmail) {
              echo "<b>Bedankt voor het abonneren op onze media-updates!</b>";
            } else {
              echo "<b>Vul een geldig e-mailadres in.</b>";
            }
          } else {
          ?>
            <input type="email" name="newsletterEmail" id="newsletterEmail" placeholder="Vul je e-mailadres in" required />
            <input type="submit" name="newsletterSubmit" value="Verzenden" />
          <?php
          }
          ?>
        </form>

        <span>of onze sociale media</span>
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
        <h2>Zoek Contact</h2>
        <div class="grid">
          <div>
            <span>E-mail</span>
            <b>Circles@solutions.com</b>
          </div>
          <div class="phone">
            <span> Telefoon </span>
            <b>+31 6 567788234</b>
          </div>
          <div>
            <span> Adres </span>
            <b>Van Schaikweg 94</b>
          </div>
          <div>
            <span>Stad</span>
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
          $onderwerp = filter_input(INPUT_POST, 'topic');
          $bericht = filter_input(INPUT_POST, 'message');

          if ($email && $onderwerp && $bericht && strlen($bericht) >= 20) {
            echo "<b>Bedankt voor het versturen van je bericht!</b>";
          } else {
            echo "<b>Fout: Vul alle velden correct in en zorg ervoor dat het bericht minimaal 20 tekens lang is.</b>";
          }
        } else {
        ?>
          <div>
            <div>
              <label for="onderwerp">Onderwerp</label>
              <input type="text" name="topic" id="onderwerp" placeholder="Onderwerp" required />
            </div>
            <div>
              <label for="email">E-mail</label>
              <input type="email" name="email" id="email" placeholder="E-mail" required />
            </div>
          </div>

          <label for="bericht">Bericht</label>
          <textarea
            id="bericht"
            name="message"
            rows="4"
            cols="50"
            placeholder="Typ je bericht"
            required
            minlength="20"></textarea>
          <input type="submit" name="contactSubmit" value="Versturen" />
        <?php
        }
        ?>
      </form>
    </div>
  </main>
</body>

</html>