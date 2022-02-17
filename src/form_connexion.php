<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';

        $ident = $_GET["ident"];
        $mdp = $_GET["mdp"];
        //On essaie de se connecter
        try{
            $dbco = new PDO("mysql:host=$servername;dbname=bts2e4;charset=UTF8", $username, $password);
            //On définit le mode d'erreur de PDO sur Exception
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $dbco->beginTransaction();
            $request= "SELECT email FROM `users` WHERE email=\"$ident\"";
            $reponse = $dbco->query($request);
            $mail = array();

            while ($data = $reponse->fetch() )          
            {
                $mail[] = $data['email'];
            }
            $number1 = $reponse->rowCount();


            $request= "SELECT pseudo FROM `users` WHERE pseudo=\"$ident\"";
            $reponse = $dbco->query($request);
            $pass = array();

            while ($data = $reponse->fetch() )          
            {
                $pass[] = $data['pseudo'];
            }
            $number2 = $reponse->rowCount();


            $request= "SELECT mdp FROM `users` WHERE mdp=\"$mdp\"";
            $reponse = $dbco->query($request);
            $user = array();

            while ($data = $reponse->fetch() )          
            {
                $user[] = $data['mdp'];
            }
            $usermdp = $reponse->rowCount();
        }
            
        /*On capture les exceptions si une exception est lancée et on affiche
        *les informations relatives à celle-ci*/
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }

        if(($number1 == 1 || $number2 == 1) && $usermdp == 1)
        {
            // if($number1 == 1)
            // {
            //     $_POST['ident'] = $ident;
            // }
            // else if($number2 == 1)
            // {
            //     $_POST['ident'] = $ident;
            // }
            header('Location: accueil.php');
        }    
        else
        {
           echo "Identifiant ou mot de passe incorrect !";
            ?>
            <a href="connexion.php">Revenir à la connexion</a>
            <?php
        }
    ?>
</body>
</html>