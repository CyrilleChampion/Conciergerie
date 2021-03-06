<?php
session_start();
$connected = isset($_SESSION['email']) ? true : false;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Projet Annuel 2i1">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="CSS/CSS_Luxery.css">
    <script src="JS/Ajax/contact.js"></script>
    <title>LuxeryService</title>
</head>
<body>
<?php require_once('Pages/header.php'); ?>
<main>
    <p style="text-align:center"><img alt="separateur" id="separateur" src="Pictures/Separateur3.png"></p>
    <br>
    <section class="body_section meme">
        <h1><?=_CONTACT?> :</h1>
        <br/>
        <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </section>
    <br class="meme"/>
    <p style="text-align:center" class="meme"><img alt="separateur" id="separateur" src="Pictures/Separateur6.png"></p>
    <br class="meme"/>
    <section class="body_section meme">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="Pictures/logo_esgi.png" style="max-width: 100%" width="250px"/>
                </div>
            </div><br/>
            <div class="row">
                <div class="col">
                    <img src="Pictures/cedric.jpg" style="max-width: 100%" title="cedric" width="150px" height="150px" onclick="cedric()"/>
                    <h5>Cédric GARVENES :</h5>
                </div>
                <div class="col">
                    <h5 style="margin-top: 75px">cgarvenes@myges.fr</h5>
                </div>
            </div><br/>
            <div class="row">
                <div class="col">
                    <img src="Pictures/cyrille.png" style="max-width: 100%" title="cyrille" width="150px" height="150px" onclick="cyrille()"/>
                    <h5>Cyrille CHAMPION :</h5>
                </div>
                <div class="col">
                    <h5 style="margin-top: 75px">cchampion@myges.fr</h5>
                </div>
            </div><br/>
            <div class="row">
                <div class="col">
                    <img src="Pictures/arthur.jpg" style="max-width: 100%" title="arthur" width="150px" height="150px" onclick="arthur()"/>
                    <h5>Arthur BRONGNIART :</h5>
                </div>
                <div class="col">
                    <h5 style="margin-top: 75px">abrongniart@myges.fr</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="body_section memeOn" style="display: none">
        <a href="index.php">
            <img src="meme/meme.jpg" style="max-width: 100%"/>
        </a>
    </section>
    <br/>
    <p style="text-align:center"><img alt="separateur" id="separateur" src="Pictures/Separateur3.png"></p>
</main>
<?php require_once('Pages/footer.php'); ?>
</body>
</html>
