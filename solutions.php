<?php include_once("header.php");
include_once("englishfiles.php");
?>
<!DOCTYPE html>
<html>

<head>

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <p class="MainPrice" id="mainPriceLeft">140<i class="fa-solid fa-euro-sign EuroSign"></i>
                    <p class="Month">/ month</p>
                    </p>
                </div>
                <div class="GreyText">
                    <p class="Grey"> after exceeding <span class="DarkGrey">50 users, </span>the price increases to <span class="Darkgrey">€760</span> </p>
                </div>
                <div class="DropDownHolder">
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice" id="drpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Improved App Management</p>
                        </div>
                        <p>Manage applications across your organization more efficiently with advanced tools for monitoring, deployment, and updates. Simplify app maintenance, ensure smooth operation, and reduce downtime for your users.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Better Display Of Communication And Information</p>
                        </div>
                        <p>Enhance the visibility and accessibility of key information within your organization. With improved dashboards and communication tools, you can ensure that important messages and updates reach employees effectively and on time.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Easier Document Management</p>
                        </div>
                        <p>Streamline document handling with our intuitive document management system. Organize, store, and retrieve documents quickly, ensuring that your team has access to the files they need, whenever they need them.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Analytics For Improved Outcomes</p>
                        </div>
                        <p>Use powerful analytics to gain insights into your business performance. From monitoring user engagement to tracking system efficiency, our analytics tools will help you make data-driven decisions to improve operations and results.</p>
                    </div>
                </div>

                <div class="BottomButtons">
                    <button class="BuyButton">Buy Now</button>
                    <a href="contact.php">
                        <button class="ContactButton">Contact</button>
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
                    <p class="MainPrice" id="mainPriceRight">180<i class="fa-solid fa-euro-sign EuroSign"></i>
                    <p class="Month">/ month</p>
                    </p>
                </div>
                <div class="GreyText">
                    <p class="Grey"> after exceeding <span class="DarkGrey">50 users, </span>the price increases to <span class="Darkgrey">€799</span> </p>
                </div>
                <div class="DropDownHolder">
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Enhanced Internal Communication</p>
                        </div>
                        <p>Improve the efficiency of communication within your organization with tools that streamline messaging, reduce email clutter, and ensure that important updates reach the right people instantly. Perfect for fostering collaboration and minimizing delays.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Engage And Connect Your Teams</p>
                        </div>
                        <p>Boost team morale and collaboration by creating spaces where employees can engage in real-time, share knowledge, and work together on projects, regardless of their physical location. Our platform brings a sense of community to your workplace.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Knowledge Management For All</p>
                        </div>
                        <p>Enable your teams to store, organize, and retrieve essential information with ease. With our knowledge management system, everyone has access to the resources they need, fostering continuous learning and reducing the time spent searching for information.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Analytics For Improved Outcomes</p>
                        </div>
                        <p>Leverage data-driven insights to make informed decisions that enhance your business performance. Our analytics tools help you track key performance indicators, monitor employee engagement, and optimize processes for better results.</p>
                    </div>
                </div>
                <div class="BottomButtons">
                    <button class="BuyButton">Buy Now</button>
                    <a href="contact.php">
                        <button class="ContactButton">Contact</button>
                    </a>
                </div>
            </div>
        </div>

        <script src="./js/textDropDown.js"></script>
        <script src="./js/radioslider.js"></script>
</body>

</html>