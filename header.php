<?php 
function render_header() {
  $pages = [
    "Home" => "index.php",
    "Solutions" => "solutions.php",
    "Contact" => "contact.php",
    "Customer Reviews" => "reviews.php",
    "FAQ" => "faq.php"
  ];
  
  echo '
    <div class="header">
      <div class="headerbuttonbox">
        <a href="' . $pages["Home"] . '">
          <img src="img/circlesolutions.png" alt="logo" class="headerlogo"/>
          </a>
        <div class="hamburgermenu">
          <button class="hamburger-btn" id="hamburger-button">
            <svg class="hamburger-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
          </button>
          <div class="">
          </div>
        </div>
        <span class="headerlinks" id="links">';
          

  foreach ($pages as $page_name => $page_link) {
    if ($page_link == basename($_SERVER["PHP_SELF"])) {
      echo '<a href="' . $page_link . '"><button class="headerbutton active">' . $page_name . '</button></a>';
    } else {
      echo '<a href="' . $page_link . '"><button class="headerbutton">' . $page_name . '</button></a>';
    }
  }
  echo '
        </span>
      </div>
      <div class="headerright">
        <div class="dropdown">
          <button class="dropbtn">
            EN <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="NL/' . basename($_SERVER["PHP_SELF"]) . '">NL</a>
          </div>
        </div>
        <button class="Demobutton">Try Demo</button>
      </div>
    </div>
    <script src="js/hamburgerMenu.js"></script>';

}