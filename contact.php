<?php include_once("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Page</title>
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
          <form action="" id="newsletterForm">
            <input type="email" name="newsletterEmail" id="newsletterEmail" placeholder="Type your email" required />
            <input type="submit" value="Submit" />
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
          <iframe
            width="670"
            height="382"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
            id="gmap_canvas"
            src="https://maps.google.com/maps?width=640&amp;height=380&amp;hl=en&amp;q=Van%20Schaikweg%2094%20Emmen+(Find%20us%20here%20ahh)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
          ></iframe>
          <a href="https://doktorarbeitschreiben.com/ghostwriter-fuer-doktorarbeit-medizin.html"
            >Medizin Doktorarbeit Hilfe</a
          >
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
        <form id="contactForm">
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
            minlength="20"
          ></textarea>
          <input type="submit" value="Submit" />
        </form>
      </div>
    </main>
    <script
      type="text/javascript"
      src="https://embedmaps.com/google-maps-authorization/script.js?id=778bd8f53c085eab5995ac0241865984c3d857a8"
    ></script>
    <script>
      document.getElementById('newsletterForm').addEventListener('submit', function (e) {
        e.preventDefault();
        window.alert('Thank you for subscribing to our media updates!');
        document.getElementById('newsletterEmail').value = '';
      });

      document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault();
        window.alert("Your message has been sent successfully! We'll get back to you as soon as possible");
        document.getElementById('topic').value = '';
        document.getElementById('email').value = '';
        document.getElementById('message').value = '';
      });
    </script>
  </body>
</html>
