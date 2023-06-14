<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Question4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h6>4/4</h6>
    <form action="page5.php" method="post">
        Je préfére jouer sur
        <select name="platforme">
            <option value="PC">PC</option>
            <option value="Console_salon">Console de salon</option>
            <option value="Console_portable">Console portable</option>
            <option value="Smartphone_Tablette">Smartphone/Tablette</option>
        </select><br>
        <input type="submit" value="Ok">
    </form>
    <form action="page3.php">
        <input type="submit" value="Precedent">
    </form>
</body>
</html>
<?php
session_start();
if(isset($_POST["type_jeu"])){
    $_SESSION["type_jeu"] = $_POST["type_jeu"];
}