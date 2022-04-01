<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="ico.png" type="image/x-icon">
    <title>Forum Anonyme </title>
</head>
<body>
    <h1>🥷🏻 - Bienvenue sur le <span> Forum anonyme</span> - 🥷🏿 </h1>
    <p id="stitre">Tout vous messages sont totalement anonyme. <br>
     Aucune information personnel est stocké. <br>
     Les photos sont générés aléatoire à partir d'une base de donnée d'image ajouté par la communauté </p>
    <img src="ico.png" alt="">


    <h2>Écrivez un message !</h2>
    <form action="insert.php" method="post" >
        <p>
            <label for="titre">Titre :</label>
            <input type="text" name="titres"  id="titres" required="required">
        </p>
        <p>
            <label for="messages">Message:</label>
            <textarea name="messages" id="messages" cols="30" rows="10" required="required"></textarea>
        </p>
        <p>
            <input type="submit" value="Envoyer">
        </p>
    </form>
    <p id="small">ps : quand tu actualises les images dans les articles changent !</p>
<?php
require_once 'read.php';
?>

     <!-- formulaire  -->
     <form action="insert_img.php" method="POST" enctype="multipart/form-data">
<p id="fimg">
    <label  for="img">Ajoute une photo dans la bdd :</label>
    <input required="required" type="file" name="img" id="img">
</p>

<!-- envoie des donées -->
<div><input type="submit" value="Envoyer le formulaire"></div>

</form>
<p  id="btn" >Afficher les images générés aléatoirement depuis la bdd</p>

<script src="script.js"></script>
</body>
</html>