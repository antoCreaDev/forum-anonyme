<?php

$pdo = require_once 'connect.php';

$sql = 'SELECT titres, messages FROM messages'; // insere les valeurs dans la base ( il faut l'auto incremente )

$statement_requete = $pdo->query($sql); // fait une requette
$statement_result = $statement_requete->fetchAll(PDO::FETCH_ASSOC); // récupère toute les lignes fetch() prend suelement la première ligne

$sql_image = 'SELECT img FROM images'; // insere les valeurs dans la base ( il faut l'auto incremente )

$statement_requete_image = $pdo->query($sql_image); // fait une requette
$statement_result_image = $statement_requete_image->fetchAll(PDO::FETCH_ASSOC); // récupère toute les lignes fetch() prend suelement la première ligne
echo"<aside style='display: none;'>";
$image = array();
foreach($statement_result_image as $values_image){
    array_push($image, $values_image["img"]);
    echo("<img  src='upload/".$values_image['img']."'>");
}
echo"</aside>";

foreach($statement_result as $values){
    // choisi une image aléatoire dans la bdd
    $index_alatoire = array_rand($image);
    $image_aleatoire = $image[$index_alatoire];
    $balise_img_aleatoire = "<img class='imgleft' src='upload/".$image_aleatoire."'>" ;

    echo("<div class='message'>");
    echo("<h2>".$values['titres']."</h2>");
    echo("<p>".$values['messages']."</p>");
    echo("<p class='imgleft'>Écrit par anonyme</p>");
    echo($balise_img_aleatoire);
    echo("</div>");

}




?>