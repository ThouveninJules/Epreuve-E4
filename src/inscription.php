<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/inscrstyle.css">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <br><br>
    <div class="form-inscr">
        <form action='form_inscription.php' method="get">
            <div class="form-inscr-pseudo">
                <label for="pseudo">Entrez votre pseudo :&nbsp&nbsp</label>
                <input type="text" name="pseudo" id="pseudo" required>
            </div>
            <br>
            <div class="form-inscr-prenom">
                <label for="prenom">Entrez votre prenom :&nbsp&nbsp</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <br>
            <div class="form-inscr-nom">
                <label for="nom">Entrez votre nom :&nbsp&nbsp</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <br>
            <div class="form-inscr-naiss">
                <label for="naiss">Entrez votre date de naissance :&nbsp&nbsp</label>
                <input type="date" name="naiss" id="naiss" required>
            </div>
            <br>
            <div class="form-inscr-email">
                <label for="email">Entrez votre email :&nbsp&nbsp</label>
                <input type="email" name="email" id="email" required>
            </div>
            <br>
            <div class="form-inscr-mdp">
                <label for="mdp">Entrez votre mot de passe :&nbsp&nbsp</label>
                <input type="password" name="mdp" id="mdp" required>
            </div>
            <br>
            <div class="form-inscr-mdp2">
                <label for="mdp2">Validez le mot de passe :&nbsp&nbsp</label>
                <input type="password" name="mdp2" id="mdp2" required>
            </div>
            <br><br><br>
            <div class="form-inscr-btn">
                <input type="submit" value="Valider" class="button" accesskey="enter">
                <a href="./connexion.php">
                    <input type="button" value="Connexion">
                </a>
            </div>
        </form>
    </div>
</body>
</html>