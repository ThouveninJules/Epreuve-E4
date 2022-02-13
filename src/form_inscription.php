<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';

        $pseudo = $_GET["pseudo"];
        $prenom = $_GET["prenom"];
        $nom = $_GET["nom"];
        $email = $_GET["email"];
        $mdp = $_GET["mdp"];
        $mdp2 = $_GET["mdp2"];
        $naiss = $_GET["naiss"];

        if($mdp == $mdp2)
        {
            //On essaie de se connecter
            try{
                $dbco = new PDO("mysql:host=$servername;dbname=bts2e4;charset=UTF8", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $dbco->beginTransaction();


                $request= "SELECT email FROM `users` WHERE email=\"$email\"";
                $reponse = $dbco->query($request);
                $user = array();

                while ($data = $reponse->fetch() )          
                {
                    $user[] = $data['email'];
                }
                $number = $reponse->rowCount();


                $request= "SELECT pseudo FROM `users` WHERE pseudo=\"$pseudo\"";
                $reponse = $dbco->query($request);
                $user_pseudo = array();

                while ($data = $reponse->fetch() )          
                {
                    $user_pseudo[] = $data['pseudo'];
                }
                $number_pseudo = $reponse->rowCount();
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
            *les informations relatives à celle-ci*/
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }

            if($number == 0)
            {
                if($number_pseudo == 0)
                {
                    //On essaie de se connecter
                    try{
                        $dbco = new PDO("mysql:host=$servername;dbname=bts2e4;charset=UTF8", $username, $password);
                        //On définit le mode d'erreur de PDO sur Exception
                        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $dbco->beginTransaction();

                        $sql = "INSERT INTO users(nom, prenom, pseudo, email, mdp, naissance) VALUES(\"$nom\", \"$prenom\", \"$pseudo\", \"$email\", \"$mdp\", \"$naiss\")";
                        $dbco->exec($sql);
                    }
                    
                    /*On capture les exceptions si une exception est lancée et on affiche
                    *les informations relatives à celle-ci*/
                    catch(PDOException $e){
                    echo "Erreur : " . $e->getMessage();
                    }
                    echo "Inscription réussie !"
                    ?>
                    <a href="connexion.php">Se connecter</a>
                    <?php
                }
                else {
                    echo "Pseudo déjà utilisé !"
                    ?>
                    <a href="inscription.php">Revenir à l'inscription</a>
                    <?php
                }
            }
            else{
                echo "Email déjà utilisé !"
                ?>
                <a href="inscription.php">Revenir à l'inscription</a>
                <?php
            }
        }
        else 
        {
            echo "Mots de passe différents !"
            ?>
            <a href="inscription.php">Revenir à l'inscription</a>
            <?php
        }
    ?>
</body>
</html>