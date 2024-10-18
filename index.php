<?php
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
    [ "name" => "Anton" ],
    []
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
                            <img src="images/circle.jpg" alt="circle">
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
                        "' . "$text" .'
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/styles/reviews.css" type="text/css">
    <title>Reviews</title>
</head>

<body>
    <div class="layout">
        <div class="header-container">
            <p class="top">See What Customer Think About Us</p>
            <h1 class="bottom">Customer Reviews</h1>
        </div>
        
        <div class="reviews-grid">
            <div class="grid-item">
                    <div class="review-header" >
                        <div class="review-header-left">
                            <img src="images/circle.jpg" alt="circle">
                            <div class="review-credentials">
                                <h3>John Dough</h3>
                                <div class="company">Senior Operations Coordinator – Cookiegenerator inc.
                                </div>
                            </div>
                        
                        </div>
    
                        <div class="rate">
                            <b>4.89<sub>/5</sub></b>
                            <span>&#11088;</span>
                        </div>
                    </div>
                    <div class="review-text">
                        “A user friendly, customizable platform for communication and shared work
                        spaces. Easy to create a customized internal platform for company
                        communications, news, and resources for employee needs through pre-built
                        templates."
                    </div>
            </div>
                <div class="grid-item">
                    <div class="review-header" >
                        <div class="review-header-left">
                            <img src="images/circle.jpg" alt="circle">
                            <div class="review-credentials">
                                <h3>Petty Dwarves</h3>
                                <div class="company">Director of Marketing and Communications – Little Cloths ltd.</div>
                            </div>
                        
                        </div>
    
                        <div class="rate">
                            <b>4.62<sub>/5</sub></b>
                            <span>&#11088;</span>
                        </div>
                    </div>
                    <div class="review-text">
                         “The ability to quickly communicate and scale collaboration is second to none Users across the globe can receive information, connect and collaborate in real time – answer questions quickly and publicly to avoid duplicative emails.”
                    </div>
            </div>
                <div class="grid-item">
                    <div class="review-header" >
                        <div class="review-header-left">
                            <img src="images/circle.jpg" alt="circle">
                            <div class="review-credentials">
                                <h3>Halluci Absinthe</h3>
                                <div class="company">People Operations Manager – Green Fairy Company</div>
                            </div>
                        
                        </div>
    
                        <div class="rate">
                            <b>4.74<sub>/5</sub></b>
                            <span>&#11088;</span>
                        </div>
                    </div>
                    <div class="review-text">
                        “Our onboarding experience has greatly improved thanks to Happeo’s Pages. Instead of having a quick meeting and sending out slides to new employees, we now have an entire Page they can easily refer to.”
                    </div>
            </div>
    </div>
</body>
</html>