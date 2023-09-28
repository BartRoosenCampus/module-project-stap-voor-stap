<?php
// index.php
declare(strict_types = 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Project modules</title>
</head>
<body>
<h1>Project modules</h1>

<div class="grid-1-3">
    <div>
        <h3>Stappen</h3>
        <ul class="steps">
            <li><a href="./module-afbeelden/">Stap 1: Modules afbeelden in een tabel</a></li>
            <li><a href="./module-toevoegen/">Stap 2: Modules toevoegen</a></li>
            <li><a href="./module-verwijderen/">Stap 3: Modules verwijderen</a></li>
            <li><a href="./module-bijwerken/">Stap 4: Modules bijwerken</a></li>
        </ul>
    </div>
    <div>
        <h3>Info</h3>
        <div>
            <h2>Stap 1: Modules afbeelden in een tabel</h2>
            <p>Bij de start van dit project gaan we enkele componenten voorzien nl.:</p>
            <ul>
                <li>Een ModuleDataHandler. Dit is een klasse die in staat voor de communicatie met de database.</li>
                <li>Toevoegen van een entity Module. Deze zal vooral gebruikt worden bij het presenteren van de data.</li>
                <li>Landingspagina. index.php is de pagina waar elke bezoeker standaard op terecht komt. Hier zal de tabel met modules ook worden afgebeeld.</li>
            </ul>
            <p>
                We zullen beginnen met het schrijven van een functie die alle modules uit de tabel "modules" zal
                opvragen. Elk record zal omgezet worden in een module-object en in een array toegevoegd worden.
                De presentatie gaat deze array doorlopen en elke module presenteren op het scherm.
            </p>
            <p>Wat we gaan bouwen ziet er schematisch zo uit:</p>
            <a href="img/lijst.php" target="_blank">
                <img src="img/modulelijst-ophalen.png"/>
            </a>
        </div>
        <div>
            <h2>Stap 2: Modules toevoegen</h2>
            <p>
                In dit deel van het project werken we verder met wat we reeds hebben. We breiden de applicatie uit
                met de mogelijkheid om modules toe te voegen aan de lijst. Om dit te bereiken gaan we:
            </p>
            <ul>
                <li>ModuleDataHandler uitbreiden met een functie die modules kan toevoegen aan de database.</li>
                <li>We gaan een form maken om de naam en de prijs van een nieuwe module te kunnen invullen "add-module-form.php"</li>
                <li>Ook zal een file voorzien worden die instaat voor het verwerken van het form "add-module.php"</li>
            </ul>
            <p>Schematisch ziet dit er zo uit:</p>
            <a href="img/toevoegen.php" target="_blank">
                <img src="img/module-toevoegen.png"/>
            </a>
        </div>
        <div>
            <h2>Stap 3: Modules verwijderen</h2>
            <p>
                We breiden het project verder uit zodat modules ook kunnen worden verwijderd. Hiervoor hebben we geen form
                nodig. We gaan dit doen m.b.v. links. De volgende aanpassingen gaan we doen:
            </p>
            <ul>
                <li>ModuleDataHandler uitbreiden met een functie "removeById()" die modules kan verwijderen uit de database.</li>
                <li>We maken een aparte file die ervoor gaat zorgen dat we de functie "removeById()" kunnen uitvoeren.</li>
                <li>Aan de tabel voegen we een kolom toe waar per module een link komt die naar "delete-module.php" verwijst</li>
            </ul>
            <p>De schematische voorstelling:</p>
            <a href="img/verwijderen.php" target="_blank">
                <img src="img/module-verwijderen.png"/>
            </a>
        </div>
        <div>
            <h2>Stap 4: Modules bijwerken</h2>
            <p>
                Tot slot gaan we er voor zorgen dat een bestaande module kan worden aangepast. Hiervoor maken we een form
                waar de data van een module die we middels een link hebben geselecteerd zal worden ingevuld. Deze stap vergt
                de meeste aanpassingen aan onze code nl:
            </p>
            <ul>
                <li>ModuleDataHandler uitbreiden met een functie "getModuleById()" die de gegevens van één module opvraagt.</li>
                <li>ModuleDataHandler uitbreiden met een functie "updateModule()" die ervoor moet zorgen dat de aanpassingen worden opgeslagen in de database.</li>
                <li>We maken een form "bewerken-form.php" dat zal worden ingevuld met de bestaande gegevens van de geselecteerde module</li>
                <li>We voorzien een file "update-module.php" die zal instaan voor de verwerking van het form.</li>
                <li>Onze tabel zullen we ook uitbreiden met een link per module die ons naar het form zal leiden.</li>
            </ul>
            <p>De schematische voorstelling van dit proces is iets complexer:</p>
            <a href="img/bijwerken.php" target="_blank">
                <img src="img/module-bijwerken.png"/>
            </a>
        </div>
    </div>
</div>
</body>
</html>
