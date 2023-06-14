<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Question5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
Merci pour votre participation!!
<form action="start.php">
    <input type="submit" value="Recomencer">
</form>
<form action="result.php">
    <input type="submit" value="Resultat">
</form>
</body>
</html>
<?php
session_start();
$_SESSION["platforme"] = $_POST["platforme"];



$user = array(
    "sexe" => $_SESSION["sexe"] ,
    "age" => $_SESSION["age"],
    "heure_jeu" => $_SESSION["heure_jeu"],
    "type_jeu" => $_SESSION["type_jeu"],
    "platfrome" => $_SESSION["platforme"]
);
$_SESSION["users"][] = $user;
