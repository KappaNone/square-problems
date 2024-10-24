<?php
include_once("dutch_header.php");
$reviews = [
    [
        "name" => "John Dough",
        "company" => "Senior Operatie Coordinator – Cookiegenerator inc.",
        "text" => "Een gebruiksvriendelijk, aanpasbaar platform voor communicatie en gedeeld werk
        ruimtes. Gemakkelijk om een ​​aangepast intern platform voor het bedrijf te creëren
        communicatie, nieuws en bronnen voor de behoeften van werknemers via vooraf gebouwde
        sjablonen.",
        "rate" => 4.89
    ],
    [ "name" => "Petty Dwarves",
      "company"=>"Directeur van Marketing en Communicatiie – Little Cloths ltd.",
      "text" =>"Het vermogen om snel te communiceren en samenwerking op te schalen komt op de tweede plaats
      naar geen Gebruikers over de hele wereld kunnen informatie ontvangen, verbinding maken en samenwerken
      in realtime – beantwoord vragen snel en openbaar om dubbele e-mails te voorkomen.",
      "rate"=> 4.62
    ],
    [ "name" =>"Halluci Absinthe",
      "company" =>"mensen Operatie Manager – Green Fairy Company",
      "text" =>"Onze onboarding-ervaring is enorm verbeterd dankzij Happeo's Pages. In plaats van snel te zijn
       ontmoeten en dia's naar nieuwe medewerkers sturen, hebben we nu een hele pagina waar ze gemakkelijk naar kunnen verwijzen.",
       "rate" => 4.74

    ]
];

function render_reviews($reviews) {

    foreach ($reviews as $review) {
    
        $name = $review["name"];
        $company = $review["company"];
        $text = $review["text"];
        $rate = $review["rate"];
    
        echo '
            <div class="grid-item">
                    <div class="review-header" >
                        <div class="review-header-left">
                            <img src="img/circle.jpg" alt="circle">
                            <div class="review-credentials">
                                <h3>' . $name . '</h3>
                                <div class="company">' . $company . '</div>
                            </div>
                        
                        </div>
    
                        <div class="rate">
                            <b>' . $rate . '<sub>/5</sub></b>
                            <span>&#11088;</span>
                        </div>
                    </div>
                    <div class="review-text">
                        "' . "$text" .'"
                    </div>
            </div>
        ';
    
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/reviews.css" type="text/css">
    <title>Circle Solutions | Reviews</title>
</head>

<body>
    <?php render_dutch_header(); ?>
    <div class="layout">
        <div class="header-container">
            <p class="top">Zie wat gebruikers van ons vinden</p>
            <h1 class="bottom">Gebruiker Reviews</h1>
        </div>
        
        <div class="reviews-grid">
            <?php render_reviews($reviews); ?>
        </div>
    </div>
</body>
</html>