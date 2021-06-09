<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 7</title>
</head>
<body>



    <?php

        //EXERCICE 5
        if(empty($_POST['firstname'])) {
            echo'
                <form action="exercice6.php" method="post">
                    <select name="gender" id="gender">
                        <option value=""></option>
                        <option value="Homme">Mr</option>
                        <option value="Femme">Mme</option>
                    </select>
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" id="name">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname">
                    <button type="submit">Envoyer</button>
                </form>
            ';
        }else{
            //test d'existant des variables url
            if(isset($_POST['gender'])) {
            //récupération et affichage des variables
            echo 'Genre :'.$_POST['gender'].' ! <br>';
            }
            else{
                //signalement si elle n'éxiste pas
                echo '<br> lastname n\'est pas définit';
            }
            if(isset($_POST['lastname'])) {
                //récupération et affichage des variables
                echo 'Nom :'.$_POST['lastname'].' ! <br>';
            }
            else{
                //signalement si elle n'éxiste pas
                echo '<br> lastname n\'est pas définit';
            }
            if(isset($_POST['firstname'])) {
                //récupération et affichage des variables
                echo 'Prénom :'.$_POST['firstname'].' ! <br>';
            }
            else{
                //signalement si elle n'éxiste pas
                echo '<br> firstname n\'est pas définit';
            } 
        }
        
    ?>
</body>
</html>