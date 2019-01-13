<html>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <meta name="msvalidate.01" content="0C6ACD4FD36C72D504C675BB99542608" />
        <meta name="KEYWORDS" content="climat rouen citoyen collectif"/>
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
        
    </head>
    <body>
    <?php
        if (!$fp2 = fopen("logfile.txt","a+")) {
            echo "Echec de l'ouverture du fichier";
        }
        else {
            fputs($fp2,date("d/m/Y G:i:s "));
            fputs($fp2,$_SERVER['REMOTE_ADDR']);
            fputs($fp2," ");
            fputs($fp2,$_SERVER['HTTP_USER_AGENT']);
            fputs($fp2,"\n");
            fclose($fp2);
        }
    ?>
        <div class="global">
            <div id="header">
                <div class="menu">
                    <div class="item" ><a href="index.php">Accueil</a></div>
                    <div class="item evenementLink" id="evenementLink"><a href="#">Ev&eacute;nements</a></div>
                    <div class="item liensLink" id="liensLink"><a href="#">Liens</a></div>
                    <div class="item contactLink" id="contactLink"><a href="#">Contact</a></div>
                </div>
                <img id="logoImage"  src="img/citoyenClimatRouen.png" width="709" height="709">
            </div>
            <div id="container">
                <div id="intro" class="etage">
                    <div class="textBlock">
                        <p class="mirageEnd">Veill&eacute;e pour le climat le 25 janvier!! <a href="#" class="evenementLink">Plus d&apos;information  ici</a></p>
                        <h1 class="mirage">Veill&eacute;e pour le climat le 25 janvier!!</h1>
                        <p class="mirage">Notre action pour le weekend action climat est d&eacute;cid&eacute;e, et ce sera une veill&eacute;e, le vendredi 25 &agrave; partir de 18h, au d&eacute;part de la place de la cath&eacute;drale &agrave; Rouen. Venez nombreux!</p>
                        <a class="mirage" href="https://www.facebook.com/events/2272621032790860/"><p>Les d&eacute;tails l&apos;&eacute;v&eacute;n&eacute;ment sur facebook</p></a>
                    </div>
                    <div class="imgBlock mirage" style="min-width: 20rem;min-height: 16.6rem;">
                        <a href="https://www.facebook.com/events/2272621032790860/"><img src="img/weActionClimat.jpg"></a>
                    </div>
                </div>
                <div id="boxes">
                    <div class="box evenementLink" id="evenementLink2"><img src="img/events.PNG" class="button"></div>
                    <div class="box liensLink" id="liensLink2"><img src="img/links.PNG"  class="button"></div>
                    <div class="box"><a href="https://www.facebook.com/groups/271172083511190/"><img src="img/facebook.PNG"  class="button"></a></div>
                </div>
                <div id="etage1" class="etage">
                    <div class="textBlock">
                        <p>Le grand mouvement de la transition &eacute;cologique est d&eacute;sormais lanc&eacute; !</p>
                        <p>Et la bonne nouvelle c&rsquor;est que vous aussi, vous pouvez participer &agrave; cette aventure,</p>
                        <p>Vous,</p>
                        <p>nous,</p>
                        <p>le collectif des Citoyens pour le Climat, tous engag&eacute;s vers la reconqu&ecirc;te d&rsquor;un monde plus humain</p>
                        <p>Ensemble, nous allons d&eacute;placer des montagnes !</p>
                        <p><i>&laquo; Rien n&rsquor;arr&ecirc;te la force d&rsquor;une id&eacute;e quand son heure est venue &raquo;</i> Victor Hugo</p>
                    </div>
                    <div class="imgBlock" style="min-width: 20rem;min-height: 11.2rem;">
                        <img src="img/friday.JPG">
                    </div>
                    <div class="textBlock">
                        <h1>Que faire ?</h1>
                        <p>Le climat se r&eacute;chauffe et notre belle plan&egrave;te bleue suffoque sous les d&eacute;chets, l&rsquor;humanit&eacute; est gravement en danger, mais que faire ?</p>
                        <h2>RESISTER !</h2>
                        <p>R&eacute;sister, c&rsquor;est penser autrement, rire, faire confiance, ETRE plut&ocirc;t qu&rsquor;AVOIR</p>
                        <p>R&eacute;sister, c&rsquor;est laisser passer le vent, la lumi&egrave;re, s&rsquor;accorder du temps, &ecirc;tre ensemble, se sentir libre</p>
                        <p>R&eacute;sister, c&rsquor;est reprendre le contr&ocirc;le de notre existence</p>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>