<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/connstyle.css">
    <title>Index</title>
</head>
<body>
    <h1>Connexion</h1>
    <br><br>
    <div class="form-conn">
        <form action='accueil.php' method="get">
            <div class="form-conn-ident">
                <label for="ident">Entrez votre identifiant :&nbsp&nbsp</label>
                <input type="text" name="ident" id="ident" required>
            </div>
            <br>
            <div class="form-conn-mdp">
                <label for="mdp">Entrez votre mot de passe :&nbsp&nbsp</label>
                <input type="text" name="mdp" id="mdp" required>
            </div>
            <br><br>
            <div class="form-conn-btn">
                <input type="submit" value="Connexion" class="button" accesskey="enter">
                <a href="./inscription.php">
                    <input type="button" value="Inscription">
                </a>
            </div>
        </form>
    </div>
</body>
</html>