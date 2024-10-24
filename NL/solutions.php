<?php include_once("dutch_header.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/global.css" type="text/css">
    <link rel="stylesheet" href="../styles/solutions.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">
    <link href="https://fontawesome.com/icons/euro-sign?s=solid" rel="stylesheet">
</head>

<body>
    <?php
    render_dutch_header()
    ?>
    <div class="MainPage">
        <div class="MainTextDiv">
            <p class="CircleSubPlans"> Circle Abonnementsplannen </p>
            <p class="MainText"> Intranetoplossingen Voor Uw Bedrijf</p>
            <div class="PersonButton">
                <p class="SliderActive"> 50 Gebruikers </p>
                <div class="SliderDiv">
                    <label class="switch">
                        <input type="checkbox" id="checkbox">
                        <span class="slider" id="slider"></span>
                    </label>
                </div>
                <p class="SliderNotActive"> 500 Gebruikers </p>
            </div>
        </div>
        <div class="PriceHolder">
            <div class="DOTSDiv">
                <div class="TopTextRight">
                    <p class="CircleDOTS">Circle Workspace</p>
                    <p class="BasicPlan">Basis Plan</p>
                </div>
                <p class="StartFrom">Vanaf</p>
                <div class="PriceLeft">
                    <p class="MainPrice" id="mainPriceLeft">140<i class="fa-solid fa-euro-sign EuroSign"></i>
                    <p class="Month">/ maand</p>
                    </p>
                </div>
                <div class="GreyText">
                    <p class="Grey"> na het overschrijden van <span class="DarkGrey">50 gebruikers, </span>stijgt de prijs naar <span class="Darkgrey">€760</span> </p>
                </div>
                <div class="DropDownHolder">
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice" id="drpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Verbeterd App-beheer</p>
                        </div>
                        <p>Beheer applicaties binnen uw organisatie efficiënter met geavanceerde tools voor monitoring, implementatie en updates. Vereenvoudig app-onderhoud, zorg voor een soepele werking en verminder downtime voor uw gebruikers.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Betere Weergave Van Communicatie En Informatie</p>
                        </div>
                        <p>Verbeter de zichtbaarheid en toegankelijkheid van belangrijke informatie binnen uw organisatie. Met verbeterde dashboards en communicatietools kunt u ervoor zorgen dat belangrijke berichten en updates medewerkers effectief en tijdig bereiken.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Eenvoudiger Documentbeheer</p>
                        </div>
                        <p>Vereenvoudig documentbeheer met ons intuïtieve documentbeheersysteem. Organiseer, sla op en haal documenten snel op, zodat uw team altijd toegang heeft tot de bestanden die ze nodig hebben.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Analytics Voor Verbeterde Resultaten</p>
                        </div>
                        <p>Gebruik krachtige analyses om inzicht te krijgen in uw bedrijfsresultaten. Van het monitoren van gebruikersbetrokkenheid tot het volgen van systeemefficiëntie, onze analysetools helpen u datagestuurde beslissingen te nemen om de operatie en resultaten te verbeteren.</p>
                    </div>
                </div>

                <div class="BottomButtons">
                    <button class="BuyButton">Koop Nu</button>
                    <a href="contact.php">
                        <button class="ContactButton">Contact</button>
                    </a>
                </div>
            </div>
            <div class="DOTSDiv">
                <div class="TopTextRight">
                    <p class="CircleDOTS">Circle D.O.T.S.</p>
                    <p class="BasicPlan">Professioneel Plan</p>
                </div>
                <p class="StartFrom">Vanaf</p>
                <div class="PriceLeft">
                    <p class="MainPrice" id="mainPriceRight">180<i class="fa-solid fa-euro-sign EuroSign"></i>
                    <p class="Month">/ maand</p>
                    </p>
                </div>
                <div class="GreyText">
                    <p class="Grey"> na het overschrijden van <span class="DarkGrey">50 gebruikers, </span>stijgt de prijs naar <span class="Darkgrey">€799</span> </p>
                </div>
                <div class="DropDownHolder">
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Verbeterde Interne Communicatie</p>
                        </div>
                        <p>Verbeter de efficiëntie van communicatie binnen uw organisatie met tools die berichten stroomlijnen, e-mailoverlast verminderen en ervoor zorgen dat belangrijke updates de juiste mensen direct bereiken. Perfect voor het bevorderen van samenwerking en het minimaliseren van vertragingen.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Betrek En Verbind Uw Teams</p>
                        </div>
                        <p>Verhoog het moreel en de samenwerking van teams door ruimtes te creëren waar medewerkers in realtime kunnen samenwerken, kennis kunnen delen en samen aan projecten kunnen werken, ongeacht hun fysieke locatie. Ons platform brengt een gemeenschapsgevoel naar uw werkplek.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Kennisbeheer Voor Iedereen</p>
                        </div>
                        <p>Stel uw teams in staat om essentiële informatie eenvoudig op te slaan, te organiseren en op te halen. Met ons kennisbeheersysteem heeft iedereen toegang tot de benodigde bronnen, wat continue leren bevordert en de tijd vermindert die wordt besteed aan het zoeken naar informatie.</p>
                    </div>
                    <div class="DropDown">
                        <div>
                            <button class="DrpDwnPrice"><i class="fa-solid fa-chevron-down"></i></button>
                            <p class="DropDownText">Analytics Voor Verbeterde Resultaten</p>
                        </div>
                        <p>Maak gebruik van datagestuurde inzichten om weloverwogen beslissingen te nemen die de prestaties van uw bedrijf verbeteren. Onze analysetools helpen u bij het volgen van belangrijke prestatie-indicatoren, het monitoren van medewerkersbetrokkenheid en het optimaliseren van processen voor betere resultaten.</p>
                    </div>
                </div>

                <div class="BottomButtons">
                    <button class="BuyButton">Koop Nu</button>
                    <a href="contact.php">
                        <button class="ContactButton">Contact</button>
                    </a>
                </div>
            </div>
        </div>
        <script src="../js/textDropDown.js"></script>
        <script src="../js/radioslider.js"></script>
</body>

</html>