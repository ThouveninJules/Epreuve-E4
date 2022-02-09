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
    <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
            
        //On essaie de se connecter
        try{
            $dbco = new PDO("mysql:host=$servername;dbname=bts2e4", $username, $password);
            //On définit le mode d'erreur de PDO sur Exception
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        /*On capture les exceptions si une exception est lancée et on affiche
         *les informations relatives à celle-ci*/
        catch(PDOException $e){
          echo "Erreur : " . $e->getMessage();
        }
    ?>
    <h1>Inscription</h1>
    <br><br>
    <div class="form-inscr">
        <form action='#' method="get">
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
            <br><br>
            <div class="form-inscr-btn">
                <input type="submit" value="Valider" class="button" accesskey="enter">
                <a href="./connexion.php">
                    <input type="button" value="Connexion">
                </a>
            </div>
        </form>
    </div>

    <?php
    
        $pseudo = $_GET["pseudo"];
        $prenom = $_GET["prenom"];
        $nom = $_GET["nom"];
        $email = $_GET["email"];
        $mdp = $_GET["mdp"];
        $mdp2 = $_GET["mdp2"];
        $naiss = $_GET["naiss"];
        $DateAndTime = date('m-d-Y h:i:s', time());

        if($mdp == $mdp2)
        {
            $sql = "INSERT INTO users (nom, prenom, pseudo, email, mdp, naissance, creation_date, last_connexion) VALUES ($nom, $prenom, $pseudo, $email, $mdp, $naiss, $DateAndTime, $DateAndTime);";
            $dbco->exec($sql);
        }
    
    ?>
</body>
</html>