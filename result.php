<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Resultat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <th>Sexe</th>
        <th>Age</th>
        <th>Heures de jeu</th>
        <th>Type de jeux</th>
        <th>Plateforme</th>
    </tr>
    <?php
    session_start();
    if(isset($_SESSION["users"])){
        foreach($_SESSION["users"] as $user){
            echo "<tr>";
            echo "<td>" . $user["sexe"] . "</td>";
            echo "<td>" . $user["age"] . "</td>";
            echo "<td>" . $user["heure_jeu"] . "</td>";
            echo "<td>";
            foreach($user['type_jeu'] as $type_jeu){
                echo $type_jeu . '<br>';
            }
            echo "</td>";
            echo "<td>" . $user["platfrome"] . "</td>";
            echo "</tr>";
        }
    }
    ?>

</table>
