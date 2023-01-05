<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MB-Pressing</title>
    <link rel="icon" type="image/jpg" sizes="26x26" href="../assets/images/logo.jpg">
    <link rel="stylesheet" href="../assets/css/menue.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style-analise.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style-boite.css" media="screen" type="text/css" />
    
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<script type="text/javascript" src="../assets/js/app.js" defer></script>
    <script src="../assets/js/script-analyse.js" defer></script>
    <script src="../assets/js/script-boite.js" defer></script>
</head>
<body>
    <?php require 'menue-admin.php'; ?>
    <div class="body1">
    <div class="boite" id="boiteD">
        <div class="boite-contenu animation-haut">
            <header class="conteneur bleu" style="border-bottom: #000 2px solid;text-align: center;">
                <span class="button affichage">&times</span>
                <h2>A votres attentions!!</h2>
                
            </header>
            <div class="conteneur">
                <p>cet option vous permet d'analyser votre aplication dans le but de</p>
                <p>deceler les differents anormalie de votre aplication</p>
                <p>de resoudre rapidements ces anormalies pour que votre environements soit saint</p>
            </div>
            <footer class="conteneur bleu bleu2" style="border-top: #000 2px solid">
                <p>Information importante</p>
                
            </footer>
        </div>
    </div>
    </div>
    <div class="body">
        
        <div class="container">
            <div class="bar">
                <div class="fill"></div>
            </div>
            <div class="counter">0%</div>
            <button class="button1">Analyser</button>
        </div>
        <div class="output">
            <i class="fas fa-check"></i>
        <div class="text">Analyse terminer✔✔ aucune anormalie detecter!!</div>
    </div>
    </div>
    
    
</body>
</html>