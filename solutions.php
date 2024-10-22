<?php include_once("header.php"); ?>
<!DOCTYPE html>
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
                                <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
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
                            <p class="BasicPlan">proffesional plan</p>
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
