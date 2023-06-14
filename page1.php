<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Question1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenue sur le questionnaire</h1><br>
    <h6>1/4</h6>
    <form action="page2.php" method="post">
        Mon age est de <input type="number" name="age" min="1" max="100" required>ans <br>et<br>
        <input type="radio" name="sexe" value="M" checked> Je suis un homme <br>
        <input type="radio" name="sexe" value="F"> Je suis une femme <br>
        <input type="submit" value="Ok">
    </form>
</body>
</html>

