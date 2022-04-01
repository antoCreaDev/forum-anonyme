<?php
require_once 'connect.php';


$tmpName_img = $_FILES['img']['tmp_name'];
$name_img = $_FILES['img']['name'];
$size_img = $_FILES['img']['size'];
$error_img = $_FILES['img']['error'];


move_uploaded_file($tmpName_img, './upload/'.$name_img);

$sql = 'INSERT INTO images(img) VALUES(:img)'; // insere les valeurs dans la base ( il faut l'auto incremente )




$statement = $pdo->prepare($sql); // prepare l'exution
$statement->execute(array(
':img' => $name_img,

)); // execute et rentre les valeurs pour le sql 


header('Location: index.php'); // redirige vers la page index.html
exit();

?>
<script>
  document.location = "index.php"; // renvoie a visualiser article ( le header(), exit() en php ne fonctionnait pas, il n'y a pas de données sensible le javascript est convenable )
</script>