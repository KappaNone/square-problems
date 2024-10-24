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

function contact_english() {
echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Circle Solutions | Contact</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
        <link rel="stylesheet" href="styles/global.css" />
        <link rel="stylesheet" href="styles/contactPage.css" />
    </head>
    <body>
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
        document.getElementById("newsletterForm").addEventListener("submit", function (e) {
            e.preventDefault();
            window.alert("Thank you for subscribing to our media updates!");
            document.getElementById("newsletterEmail").value = ;
        });

        document.getElementById("contactForm").addEventListener("submit", function (e) {
            e.preventDefault();
            window.alert("Your message has been sent successfully! We will get back to you as soon as possible");
            document.getElementById("topic").value = "";
            document.getElementById("email").value = "";
            document.getElementById("message").value = "";
        });
        // const fn = () => {
        //   const mapElement = document.getElementsByClassName("map")[0];

        //   if (mapElement) {
        //     const links = mapElement.getElementsByTagName("a");
        //     while (links.length > 0) {
        //       links[0].parentNode.removeChild(links[0]);
        //     }
        //   }
        // };

        // setTimeout(fn, 300);
        </script>
    </body>
    </html>

   ';
}

