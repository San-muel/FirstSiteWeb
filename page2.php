<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Question2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h6>2/4</h6>
    <form action="page3.php" method="post">
        Je joue en moyenne par jour <input type="time" name="heure_jeu" min="0" max="24" required> heure(s)<br>
    <input type="submit" value="Ok">
    </form>
    <form action="page1.php">
        <input type="submit" value="Precedent">
    </form>
</body>
</html>
<?php
session_start();
if(isset($_POST["age"]) && isset($_POST["sexe"])){
    $_SESSION["sexe"] = $_POST["sexe"];
    $_SESSION["age"] = $_POST["age"];
}
