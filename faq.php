<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circle Solutions | FAQ</title>
  <link rel="stylesheet" href="./styles/global.css">
  <link rel="stylesheet" href="./styles/faq.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
  <?php render_header(); ?>
  <div>

    <div class="main">
      <h2>Frequently Asked Questions</h2>
      <h1><b>Find Answers</b></h1>
  
      <div class="accordion-item">
        <input type="checkbox" id="item1">
        <label for="item1"> What is an intranet?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Intranet means a closed network that resides on a local network. An intranet acts like a website that only
            authorized users can access and is generally used by organizations who wish to share knowledge,
            internal communications, and information with their colleagues.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item2">
        <label for="item2">What is the difference between the internet and an intranet?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>The main difference between an intranet and the internet is that the former is a closed network, and the
            latter is a public network. In short, the internet is for all; a company intranet is for a select group of
            people.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item3">
        <label for="item3">What is an intranet and an extranet?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>An intranet is a closed network designed to allow an organization to share information and corporate
            communication among its employees. An extranet is similar to an intranet, but allows third-party entry, so
            vendors or partners can experience full or selected access.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item4">
        <label for="item4">What are intranet sites?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Intranet sites are closed internal networks for authorized members of an organization to share information.
            They act as a company news channel, an internal communications tool, and a collaboration tool.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item5">
        <label for="item5">What are intranet applications?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Intranet applications are software within an intranet like document publishing, communication tools,
            broadcasts, etc. These applications allow the user to do a range of activities, for example: publish a blog,
            connect with a colleague, or run employee surveys.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item6">
        <label for="item6">What is an intranet portal?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>An intranet portal is the access point to the user's company intranet. It is on the intranet portal where the
            user can access intranet applications as well as external apps, and information and knowledge that is stored
            within the intranet itself.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item7">
        <label for="item7">Can an intranet work without the internet?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Former on-premise company intranets could operate without internet. But for a wide range of reasons, the
            majority of company intranet applications are now cloud-based, so an internet connection is necessary.
          </p>
        </div>
  
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item8">
        <label for="item8">Can an intranet be accessed remotely?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Yes, an intranet can be accessed on a range of devices, regardless of location - all that is required is an
            internet connection. This is ideal for any organization with dispersed or front-line employees who need
            communication tools and access to organizational information wherever they are.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item9">
        <label for="item9">What does an intranet do?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Offering all types of organizational solutions, intranet software can improve employee engagement, aid
            communication, and increase collaboration. Modern intranets are now mostly cloud-based which allows global
            organizations to connect, share knowledge, and broadcast news quickly and easily.
          </p>
        </div>
      </div>
      <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          echo "<p class='thanks'>Thank you for your question!</p>"; 
        } else {
      ?>

      <div class="submit_question">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
          <label for="question">Have a question? Ask us:</label><br>
          <textarea name="question" id="question" rows="4" cols="50" required></textarea><br>
          <input type="submit">
        </form>
      </div>

      <?php } ?>
    </div>
  </div>

</body>

</html>