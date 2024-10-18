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
        <a href="index.html">
          <img src="img/circlesolutions.png" alt="logo" class="headerlogo"/>
        </a>';

  foreach ($pages as $page_name => $page_link) {
    if ($page_link == basename($_SERVER["PHP_SELF"])) {
      echo '<a href="' . $page_link . '"><button class="headerbutton active">' . $page_name . '</button></a>';
    } else {
      echo '<a href="' . $page_link . '"><button class="headerbutton">' . $page_name . '</button></a>';
    }
  }

  echo '
      </div>
      <div class="headerright">
        <div class="dropdown">
          <button class="dropbtn">
            EN <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">NL</a>
            <a href="#">2</a>
            <a href="#">3</a>
          </div>
        </div>
        <button class="Demobutton">Try Demo</button>
      </div>
    </div>';
}