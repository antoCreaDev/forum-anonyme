<?php

if(isset($_POST['titres'],$_POST['messages']))
{
    if (!empty($_POST['titres']) && !empty($_POST['messages'])) {
        $pdo = require_once 'connect.php';

$titres= $_POST['titres'];  // recupère les données du formulaire 
$messages= $_POST['messages'];


// var_dump($_POST);     verifie ce qu'envoie le formulaire 


//College  (first_name, last_name, genre, address, email)  spécifier les collonnes
// VALUES(:first_name, :last_name, :genre, :address, :email)  rajouter les valeurs 

$sql = 'INSERT INTO messages  (titres, messages) VALUES(:titres, :messages)'; // insere les valeurs dans la base ( il faut l'auto incremente )




$statement = $pdo->prepare($sql); // prepare l'exution
$statement->execute(array(
':titres' => $titres,
':messages' => $messages,

)); // execute et rentre les valeurs pour le sql 


header('Location: index.php'); // redirige vers la page index.html
exit();
      }

}

?>
<script>
  document.location = "index.php"; // renvoie a visualiser article ( le header(), exit() en php ne fonctionnait pas, il n'y a pas de données sensible le javascript est convenable )
</script>