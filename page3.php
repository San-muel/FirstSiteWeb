<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Question3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h6>3/4</h6>
    <form action="page4.php" method="post">
        <input type="checkbox" name="type_jeu[]" value="FPS"> FPS<br>
        <input type="checkbox" name="type_jeu[]" value="RTS"> RTS<br>
        <input type="checkbox" name="type_jeu[]" value="Simulation"> Simulation<br>
        <input type="checkbox" name="type_jeu[]" value="VN"> VN<br>
        <input type="checkbox" name="type_jeu[]" value="MMO"> MMO<br>
        <input type="checkbox" name="type_jeu[]" value="MMORPG"> MMORPG<br>
        <input type="checkbox" name="type_jeu[]" value="RPG"> RPG<br>
        <input type="checkbox" name="type_jeu[]" value="Arcade"> Arcade<br>
        <input type="checkbox" name="type_jeu[]" value="Autre"> Autre<br>
        <input type="submit" value="Ok">
    </form>
    <form action="page2.php">
        <input type="submit" value="Precedent">
    </form>
</body>
</html>
<?php
session_start();
if(isset($_POST["heure_jeu"])){
    $_SESSION["heure_jeu"] = $_POST["heure_jeu"];
}

