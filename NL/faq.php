<?php include_once("dutch_header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circle Solutions | FAQ</title>
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/faq.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
  <?php render_dutch_header(); ?>
  <div>

    <div class="main">
      <h2>Frequently Asked Questions</h2>
      <h1><b>Find Answers</b></h1>
  
      <div class="accordion-item">
        <input type="checkbox" id="item1">
        <label for="item1"> Wat is een intranet?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Intranet betekent een gesloten netwerk dat zich op een lokaal netwerk bevindt. Een intranet fungeert als een website die alleen
            geautoriseerde gebruikers hebben toegang tot en worden doorgaans gebruikt door organisaties die kennis willen delen,
            interne communicatie en informatie met hun collega's.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item2">
        <label for="item2">Wat is het verschil tussen internet en intranet?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Het belangrijkste verschil tussen een intranet en internet is dat het eerste een gesloten netwerk is, en het internet
            laatste is een openbaar netwerk. Kortom, internet is voor iedereen; een bedrijfsintranet is voor een selecte groep
            mensen.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item3">
        <label for="item3">Wat is een intranet en een extranet?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Een intranet is een gesloten netwerk dat is ontworpen om een ​​organisatie in staat te stellen informatie en bedrijven te delen
            communicatie tussen haar medewerkers. Een extranet is vergelijkbaar met een intranet, maar biedt toegang aan derden
            leveranciers of partners kunnen volledige of geselecteerde toegang ervaren.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item4">
        <label for="item4">Wat zijn intranet sites?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Intranetsites zijn gesloten interne netwerken waar geautoriseerde leden van een organisatie informatie kunnen delen.
          Ze fungeren als bedrijfsnieuwskanaal, interne communicatietool en samenwerkingstool.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item5">
        <label for="item5">Wat zijn intranet applicaties?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Intranettoepassingen zijn software binnen een intranet, zoals het publiceren van documenten, communicatiemiddelen,
            uitzendingen, enz. Met deze toepassingen kan de gebruiker een reeks activiteiten uitvoeren, bijvoorbeeld: een blog publiceren,
            maak contact met een collega of voer enquêtes onder medewerkers uit.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item6">
        <label for="item6">Wat is een intranet portaal?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Een intranetportaal is het toegangspunt tot het bedrijfsintranet van de gebruiker. Het bevindt zich op het intranetportaal waar de
            De gebruiker heeft toegang tot intranetapplicaties, maar ook tot externe apps en tot informatie en kennis die is opgeslagen
            binnen het intranet zelf.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item7">
        <label for="item7">werkt een intranet zonder internet?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Voormalige bedrijfsintranetten zouden zonder internet kunnen functioneren. Maar om een ​​breed scala aan redenen is de
          De meeste bedrijfsintranetapplicaties zijn nu cloudgebaseerd, dus een internetverbinding is noodzakelijk.
          </p>
        </div>
  
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item8">
        <label for="item8">kan een intranet op afstand beheerd worden?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Ja, een intranet is toegankelijk op een groot aantal apparaten, ongeacht de locatie. Het enige dat nodig is, is een
            internetverbinding. Dit is ideaal voor elke organisatie met verspreide medewerkers of medewerkers in de frontlinie die dit nodig hebben
            communicatiemiddelen en toegang tot organisatorische informatie, waar deze zich ook bevinden.
          </p>
        </div>
      </div>
  
      <div class="accordion-item">
        <input type="checkbox" id="item9">
        <label for="item9">Wat doet een intranet?
          <span class="icon"><i class="fa-solid fa-circle-arrow-down"></i></span>
        </label>
        <div class="content">
          <p>Intranetsoftware biedt alle soorten organisatorische oplossingen en kan de betrokkenheid van medewerkers verbeteren
            communicatie en het vergroten van de samenwerking. Moderne intranetten zijn nu grotendeels cloudgebaseerd, wat wereldwijd mogelijk maakt
            organisaties om snel en eenvoudig verbinding te maken, kennis te delen en nieuws uit te zenden.
          </p>
        </div>
      </div>
      <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          echo "<p class='thanks'>Bedankt voor uw vraag!</p>"; 
        } else {
      ?>

      <div class="submit_question">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
          <label for="question">Een vraag? stel het ons:</label><br>
          <textarea name="question" id="question" rows="4" cols="50" required></textarea><br>
          <input type="submit">
        </form>
      </div>

      <?php } ?>
    </div>
  </div>

</body>

</html>