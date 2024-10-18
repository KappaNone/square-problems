<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/global.css" type="text/css" />
    <link rel="stylesheet" href="styles/main.css" type="text/css"/>
  </head>
  <body>
    <?php render_header(); ?>
    <main class="main">
      <div class="main-text-container">
        <div class="company-name">Circle Solutions</div>
        <div class="main-heading">Our Solutions Are Circular</div>
        <div class="main-buttons-container">
          <a href="solutions.php"><button>Solve</button></a>
          <a href="contact.php"><button>Contact</button></a>
        </div>
      </div>
      <img src="img/mainSectionImg.png" alt="main-image" class="main-img" />
    </main>
  </body>
</html>
