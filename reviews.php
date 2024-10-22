<?php
include_once("header.php");
$reviews = [
    [
        "name" => "John Dough",
        "company" => "Senior Operations Coordinator – Cookiegenerator inc.",
        "text" => "A user friendly, customizable platform for communication and shared work
        spaces. Easy to create a customized internal platform for company
        communications, news, and resources for employee needs through pre-built
        templates.",
        "rate" => 4.89
    ],
    [ "name" => "Petty Dwarves",
      "company"=>"Director of Marketing and Communications – Little Cloths ltd.",
      "text" =>"The ability to quickly communicate and scale collaboration is second
      to none Users across the globe can receive information, connect and collaborate
      in real time – answer questions quickly and publicly to avoid duplicative emails.",
      "rate"=> 4.62
    ],
    [ "name" =>"Halluci Absinthe",
      "company" =>"People Operations Manager – Green Fairy Company",
      "text" =>"Our onboarding experience has greatly improved thanks to Happeo’s Pages. Instead of having a quick
       meeting and sending out slides to new employees, we now have an entire Page they can easily refer to.",
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
    <title>Reviews</title>
</head>

<body>
    <?php render_header(); ?>
    <div class="layout">
        <div class="header-container">
            <p class="top">See What Customer Think About Us</p>
            <h1 class="bottom">Customer Reviews</h1>
        </div>
        
        <div class="reviews-grid">
            <?php render_reviews($reviews); ?>
        </div>
    </div>
</body>
</html>