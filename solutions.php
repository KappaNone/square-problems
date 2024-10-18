<?php include_once("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css" type="text/css">
    <link rel="stylesheet" href="styles/solutions.css" type="text/css">
    <script src="./js/radioslider.js"></script>
</head>

<body>
    <?php render_header(); ?>
    <div class="MainPage">
        <div class="MainTextDiv">
            <p class="CircleSubPlans"> Circle Subscription Plans </p>
            <p class="MainText"> Intranet Solutions For Your Firm</p>
            <div class="PersonButton">
                <p class="SliderActive"> 50 people </p>
                <div class="SliderDiv">

                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                    </button>
                </div>
                <p class="SliderNotActive"> 500 people </p>
            </div>
        </div>
        <div class="PriceHolder">
            <div class="WorkSpaceDiv">
                <div class="TopTextLeft">
                    <p class="CircleWorkspace">Circle Workspace</p>
                    <sub class="BasicPlan">basic Plan</sub>
                </div>
                <p class="StartFrom">Starting From</p>
                <div class="PriceLeft">
                    <p class="MainPrice">140
                    <p class="EuroSign">€</p>
                    <p class="Month">/ month</p>
                    </p>
                </div>
                <div class="GreyText">
                    <p class="Grey"> after exceeding <span class="DarkGrey">50 users, </span>the price increases to
                        <span class="Darkgrey">€760</span> </p>
                </div>
                <div class=""></div>
            </div>

            <div class="DOTSDiv">
                <div class="TopTextLeft">
                    <p class="CircleWorkspace">Circle D.O.T.S.</p>
                    <p class="BasicPlan">basic Plan</p>
                </div>
                <p class="StartFrom">Starting From</p>
                <div class="PriceLeft">
                    <p class="MainPrice">140
                    <p class="EuroSign">€</p>
                    <p class="Month">/ month</p>
                    </p>
                </div>
                <div class="GreyText">
                    <p class="Grey"> after exceeding <span class="DarkGrey">50 users, </span>the price increases to
                        <span class="Darkgrey">€760</span> </p>
                </div>
                <div class=""></div>
            </div>
        </div>
</body>

</html>