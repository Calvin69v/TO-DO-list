<?php
// Debut de la session
session_start();
// regarder si le formulaire a ete soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Récupère les données 
 $Liste = $_POST['Liste'];
// voir si les données ont été saisies
if (!empty($Liste)) {
 // Ajoute la tâche sur la liste
if (!isset($_SESSION['tasks'])) {
 $_SESSION['tasks'] = array();
}
 $_SESSION['tasks'][] = $Liste;
}
}
// Récupère les tâches à partir de la session 
$Liste = isset($_SESSION['tasks']) ? $_SESSION['tasks'] : array();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Jsp.css">
 <title>To do List </title>
</head>
<body>

<header>
<nav>
 </div>
 <div class="navigation">
    <p> To do List !!</p>
 
 </header>
 </div>
 </nav>
 <div>
   <h1> Pas de bonus je suis trop nul </h1>
   <img class="az" src="snif.png" width>
</div>
<br>
<form method="post" action=" ">
<label for="Liste">Liste:</label>
<input type="text" id="Liste" name="Liste">
<br>
<input type="submit" value="CLIC -_-">
</form>

<?php
// une variable pour stoke les reponses qu'on a écrit dans la liste 
foreach ($Liste as $Liste) {
echo '<li>' . $Liste . '</li>';
}
?>






 
