<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="msvalidate.01" content="0C6ACD4FD36C72D504C675BB99542608" />
        <meta name="KEYWORDS" content="climat rouen citoyen collectif marche rechauffement climatique"/>
        <meta name="description" content="Page locale du collectif citoyen pour le climat - Rouen. Notre collectif se veut apolitique, apartisan et bienveillant. Notre objectif est d'amplifier la communication et les initiatives prises dans le contexte de lutte contre le réchauffement climatique."/>
        <script src="js/jquery.js" defer></script>
        <script src="js/script.js" defer></script>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
        <link rel="canonical" href="https://ilestencoretemps.org/rouen/" />
        <title>Collectif Citoyen Pour Le Climat - Rouen</title>
            
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
                    <div class="item indexLink" ><a href="index.php">Accueil</a></div>
                    <div class="item evenementLink" id="evenementLink"><a href="evenements.php">Ev&eacute;nements</a></div>
                    <div class="item liensLink" id="liensLink"><a href="liens.php">Liens</a></div>
                    <div class="item contactLink" id="contactLink"><a href="contact.php">Contact</a></div>
                </div>
                <img id="logoImage"  src="img/citoyenClimatRouen.png" width="709" height="709">
            </div>
            <div id="container">
