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
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe
                class="gmap_iframe"
                width="100%"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=670&amp;height=382&amp;hl=en&amp;q=Van Schaikweg 94&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
              ></iframe
              ><a href="https://embed-googlemap.com">google maps embed</a>
            </div>
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                width: 100%;
                height: 382px;
              }
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                width: 100%;
                height: 382px;
              }
              .gmap_iframe {
                height: 382px !important;
              }
            </style>
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
      // const fn = () => {
      //   const mapElement = document.getElementsByClassName('map')[0];

      //   if (mapElement) {
      //     const links = mapElement.getElementsByTagName('a');
      //     while (links.length > 0) {
      //       links[0].parentNode.removeChild(links[0]);
      //     }
      //   }
      // };

      // setTimeout(fn, 300);
    </script>
  </body>
</html>
