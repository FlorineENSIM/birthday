<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="birthday.css">
</head>
<body>
    <h1>Venez faire la fête pour mon anniversaire !</h1>
    <ul class="menu">
        <li>
            <a href="https://www.google.com/maps/dir/ENSIM+-+%C3%89cole+Nationale+Sup%C3%A9rieure+d'Ing%C3%A9nieurs+du+Mans,+E.N.S.I.M.,+Rue+Aristote,+Le+Mans/44+R+de+l'%C3%89ventail,+72100+Le+Mans/@48.0186364,0.1162975,12z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x47e286185b83dd21:0x477e63d55f0e8b90!2m2!1d0.1575925!2d48.0189222!1m5!1m1!1s0x47e289b38a20d02f:0x8717c0a92aedab25!2m2!1d0.210492!2d48.0043354?entry=ttu">Itinéraire du lieu festif</a>
        </li>
        <li>
            <a href="https://feteci-feteca.fr/fete-ci-fete-ca-votre-magasin-darticles-de-fetes-et-de-receptions-a-la-chapelle-saint-aubin-le-mans/">Lien pour vous trouver de superbes déguisements</a>
        </li>
    </ul>
    <div class="block">
        <div class="cadre centre">
            Moi c'est Florine STAHLE mais ça, vous le savez tous !! <br>
            Je fête mes 21 ans et je vous attend au rendez-vous et à l'heure !!! 
            (Pour tout le monde ;) Certains se reconnaiteront
            
        </div>
    </div>
    <br>
    <div class="block">
        <div class="block">
            <div class="cadre">
                <div class="centre">
                    <p class="titreBlock">Informations relatives à la méga fête : <br></p>
                    <p class="bold">Date :</p>Week-end du 10 et 11 février <br>
                    <p class="bold">Heure :</p>19h30 samedi 10 février <br>
                    <p class="bold">Lieu :</p><a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes">Infos sur la salle du jardin des Plantes - Le Mans</a>
                </div>
            </div>
            <div class="cadre">
                <br>
                <p class="titreBlock centre">A ne pas oublier : <br></p>
                <ul>
                    <li>Votre bonne humeur</li>
                    <li>Votre affaire pour dormir</li>
                    <li>Une tenue qui ne craint pas <br>(kermesse en vue pour le dimanche après-midi)</li>
                    <li>Votre super tenue en lien avec le thème</li>
                </ul>
            </div>
        </div>
        <div class="cadre bal1" id="newImg">
            <br>
            <p class="titreBlock centre">Pour le fameux thème : Style bal des débutantes<br><br></p>
            <button class="centre" onclick="displayExplanations()">En savoir plus</button>
            <p class="paraInvisible" id="fantome">Je vous veux les plus beaux possibles. <br>
            Je vous attends avec vos plus beaux costumes et vos plus belles robes de princesse. <br>
            Une condition : les couleurs que vous porterez devront être claires, pastels.
            Interdit d'utiliser le DORE ! ça sera ma couleur ;)</p>
        </div>
    </div>
    <div>
        <p class=titreBlock>Quelques informations pour moi : </p>
        <form method='post' action="register.php"> 
            <label for="nom">Votre nom:</label><br>
            <input type="test" name="nom" ><br><br>

            <label for="nombre">Le nombre de personnes que vous serez:</label><br>
            <input type="int" name="nombre" ><br><br>

            <button type="submit">Envoyer votre réponse</button>
        </form>
    </div>
    <p>Total Guests: <?php include 'count_guests.php'; ?></p>

<script src="birthday.js"></script> 
</body>
</html>