<?php 
function index_english() {
echo '
    <!DOCTYPE html>
    <html lang="en">
    <t>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles/global.css" type="text/css" />
        <link rel="stylesheet" href="styles/main.css" type="text/css"/>
        <title>Circle Solutions | Home</title>
    </t>
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
    ';
    }

function index_dutch () {
echo '
    <!DOCTYPE html>
    <html lang="en">
      <t>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles/global.css" type="text/css" />
        <link rel="stylesheet" href="styles/main.css" type="text/css"/>
        <title>Circle Solutions | Home</title>
      </t>
      <body>
        <?php render_header(); ?>
        <main class="main">
          <div class="main-text-container">
            <div class="company-name">Circle Solutions</div>
            <div class="main-heading">Onze oplossingen zijn rond</div>
            <div class="main-buttons-container">
              <a href="solutions.php"><button>oplossen</button></a>
              <a href="contact.php"><button>Contact</button></a>
            </div>
          </div>
          <img src="img/mainSectionImg.png" alt="main-image" class="main-img" />
        </main>
      </body>
    </html>
    ';
}

function solutions_english () {
echo '
    <!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="styles/global.css" type="text/css">
            <link rel="stylesheet" href="styles/solutions.css" type="text/css"> 
            <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">
            <link href="https://fontawesome.com/icons/euro-sign?s=solid" rel="stylesheet">
        </head>
        <body>
            <?php 
            render_header()
            ?>
            <div class="MainPage">  
                <div class="MainTextDiv">
                    <p class="CircleSubPlans"> Circle Subscription Plans </p>
                    <p class="MainText"> Intranet Solutions For Your Firm</p>
                    <div class="PersonButton">
                        <p class="SliderActive"> 50 Users </p>
                            <div class="SliderDiv">
                                <label class="switch">
                                    <input type="checkbox" id="checkbox">
                                    <span class="slider" id="slider"></span>
                                </label>
                            </div>
                        <p class="SliderNotActive"> 500 Users </p>
                    </div>
                </div>
                <div class="PriceHolder">
                    <div class="DOTSDiv">
                        <div class="TopTextRight">
                            <p class="CircleDOTS">Circle Workspace</p>
                            <p class="BasicPlan">Basic Plan</p>
                        </div>
                        <p class="StartFrom">Starting From</p>
                        <div class="PriceLeft"> 
                            <p class="MainPrice" id="mainPriceLeft">140<i class="fa-solid fa-euro-sign EuroSign"></i><p class="Month">/ month</p></p>
                        </div>
                        <div class="GreyText">
                            <p class="Grey"> after exceeding <span class="DarkGrey">50 users, </span>the price increases to <span class="Darkgrey">€760</span> </p>
                        </div>
                        <div class="DropDownHolder">
                            <div class="DropDown">
                                <button class="DrpDwnPrice" id="drpDwnPrice"><i class="fa-solid fa-chevron-down" id="drop1"></i></button>
                                <p class="DropDownText">Improved App Management</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Better Display Of Communication And Information</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Easier Document Management</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Analytics For Improved Outcomes</p>
                            </div>
                        </div>
                        <div class="BottomButtons">
                            <button class="BuyButton">Buy Now</button>
                            <a href="contact.php">
                                <button class="ContactButton" >Contact</button>
                            </a>
                        </div>
                    </div>
                    <div class="DOTSDiv">
                        <div class="TopTextRight">
                            <p class="CircleDOTS">Circle D.O.T.S.</p>
                            <p class="BasicPlan">professional plan</p>
                        </div>
                        <p class="StartFrom">Starting From</p>
                        <div class="PriceLeft"> 
                            <p class="MainPrice" id="mainPriceRight">180<i class="fa-solid fa-euro-sign EuroSign"></i><p class="Month">/ month</p></p>
                        </div>
                        <div class="GreyText">
                            <p class="Grey"> after exceeding <span class="DarkGrey">50 users, </span>the price increases to <span class="Darkgrey">€799</span> </p>
                        </div>
                        <div class="DropDownHolder">
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Enhanced Internal Communication</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Engage And Connect Your Teams</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Knowledge Management For All</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Analytics For Improved Outcomes</p>
                            </div>
                        </div>
                        <div class="BottomButtons">
                            <button class="BuyButton">Buy Now</button>
                            <a href="contact.php">
                                <button class="ContactButton" >Contact</button>
                            </a>
                        </div>
                </div>
            </div>
            <script src="./js/radioslider.js"></script>
        </body>
    </html>
    ';
}

function solutions_dutch () {
echo '<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="./styles/global.css" type="text/css">
            <link rel="stylesheet" href="./styles/solutions.css" type="text/css"> 
            <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">
            <link href="https://fontawesome.com/icons/euro-sign?s=solid" rel="stylesheet">
        </head>
        <body>
            <?php 
            render_header()
            ?>
            <div class="MainPage">  
                <div class="MainTextDiv">
                    <p class="CircleSubPlans"> Circle abonnement plannen </p>
                    <p class="MainText"> Intranet oplossingen voor uw bedrijf</p>
                    <div class="PersonButton">
                        <p class="SliderActive"> 50 gebruikers </p>
                            <div class="SliderDiv">
                                <label class="switch">
                                    <input type="checkbox" id="checkbox">
                                    <span class="slider" id="slider"></span>
                                </label>
                            </div>
                        <p class="SliderNotActive"> 500 gebruikers </p>
                    </div>
                </div>
                <div class="PriceHolder">
                    <div class="DOTSDiv">
                        <div class="TopTextRight">
                            <p class="CircleDOTS">Circle werkplek</p>
                            <p class="BasicPlan">Basis plan</p>
                        </div>
                        <p class="StartFrom">Start vanaf</p>
                        <div class="PriceLeft"> 
                            <p class="MainPrice" id="mainPriceLeft">140<i class="fa-solid fa-euro-sign EuroSign"></i><p class="Month">/ month</p></p>
                        </div>
                        <div class="GreyText">
                            <p class="Grey"> na het overschreiden van <span class="DarkGrey">50 gebruikers, </span>neemt de prijs toe naar <span class="Darkgrey">€760</span> </p>
                        </div>
                        <div class="DropDownHolder">
                            <div class="DropDown">
                                <button class="DrpDwnPrice" id="drpDwnPrice"><i class="fa-solid fa-chevron-down" id="drop1"></i></button>
                                <p class="DropDownText">verbeterde App Management</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Beter beeld van Communicatie en Informatie</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">simpelere Document Management</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">analyses voor verbeterde resultaten</p>
                            </div>
                        </div>
                        <div class="BottomButtons">
                            <button class="BuyButton">koop nu</button>
                            <a href="contact.php">
                                <button class="ContactButton" >Contact</button>
                            </a>
                        </div>
                    </div>
                    <div class="DOTSDiv">
                        <div class="TopTextRight">
                            <p class="CircleDOTS">Circle D.O.T.S.</p>
                            <p class="BasicPlan">professioneel plan</p>
                        </div>
                        <p class="StartFrom">Start vanaf</p>
                        <div class="PriceLeft"> 
                            <p class="MainPrice" id="mainPriceRight">180<i class="fa-solid fa-euro-sign EuroSign"></i><p class="Month">/ month</p></p>
                        </div>
                        <div class="GreyText">
                            <p class="Grey">na het overschreiden van <span class="DarkGrey">50 users, </span>the price increases to <span class="Darkgrey">€799</span> </p>
                        </div>
                        <div class="DropDownHolder">
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">versterkte interne Communication</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">betrek en verbind uw Teams</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">kennis management voor iedereen</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">analyses voor verbeterde uitkomsten</p>
                            </div>
                        </div>
                        <div class="BottomButtons">
                            <button class="BuyButton">koop nu</button>
                            <a href="contact.php">
                                <button class="ContactButton" >Contact</button>
                            </a>
                        </div>
                </div>
            </div>
            <script src="./js/radioslider.js"></script>
        </body>
    </html>
';
}