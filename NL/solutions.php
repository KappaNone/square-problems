<?php include_once("dutch_header.php");
?>
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
            render_dutch_header();
            ?>
            <div class="MainPage">  
                <div class="MainTextDiv">
                    <p class="CircleSubPlans"> Circle Subscription Plans </p>
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
                            <p class="CircleDOTS">Circle Workspace</p>
                            <p class="BasicPlan">Basis plan</p>
                        </div>
                        <p class="StartFrom">Startend vanaf</p>
                        <div class="PriceLeft"> 
                            <p class="MainPrice" id="mainPriceLeft">140<i class="fa-solid fa-euro-sign EuroSign"></i><p class="Month">/ maand</p></p>
                        </div>
                        <div class="GreyText">
                            <p class="Grey">wanneer <span class="DarkGrey">50 gebruikers, </span>overschreden is, de prijs verhoogd naar <span class="Darkgrey">€760</span> </p>
                        </div>
                        <div class="DropDownHolder">
                            <div class="DropDown">
                                <button class="DrpDwnPrice" id="drpDwnPrice"><i class="fa-solid fa-chevron-down" id="drop1"></i></button>
                                <p class="DropDownText">Verbeterde App Management</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Beter Beeld van Communicatie En Informatie</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Simpelere Document Management</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Analyses Voor Verbeterde Uitkomsten</p>
                            </div>
                        </div>
                        <div class="BottomButtons">
                            <button class="BuyButton">Koop Nu</button>
                            <a href="contact.php">
                                <button class="ContactButton" >Contact</button>
                            </a>
                        </div>
                    </div>
                    <div class="DOTSDiv">
                        <div class="TopTextRight">
                            <p class="CircleDOTS">Circle D.O.T.S.</p>
                            <p class="BasicPlan">professionele plan</p>
                        </div>
                        <p class="StartFrom">Startend vanaf</p>
                        <div class="PriceLeft"> 
                            <p class="MainPrice" id="mainPriceRight">180<i class="fa-solid fa-euro-sign EuroSign"></i><p class="Month">/ maand</p></p>
                        </div>
                        <div class="GreyText">
                            <p class="Grey"> wanneer <span class="DarkGrey">50 gebruikers, </span>is overschreden, de prijs is verhoofd naar <span class="Darkgrey">€799</span> </p>
                        </div>
                        <div class="DropDownHolder">
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">geavanceerde Interne Communicatie</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Betrek En Verbind Je Teams</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Kennis Management Voor Iedereen</p>
                            </div>
                            <div class="DropDown">
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                                <p class="DropDownText">Analyses Voor Verbeterde Uitkomsten</p>
                            </div>
                        </div>
                        <div class="BottomButtons">
                            <button class="BuyButton">Koop Nu</button>
                            <a href="contact.php">
                                <button class="ContactButton" >Contact</button>
                            </a>
                        </div>
                </div>
            </div>
            <script src="./js/radioslider.js"></script>
        </body>
    </html>
