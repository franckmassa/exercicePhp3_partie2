<?php
//Déclaration des variables
$age = 18;
$gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice2</title>
</head>
<body>
  <p>
    <?php
    //Condition selon l'âge pour l'homme
    if ($age >= 18 && $gender == 'homme'){
      echo 'Vous êtes un homme et vous êtes majeur.';
    }elseif ( $age < 18 && $gender == 'homme'){
      echo 'Vous êtes un homme et vous êtes mineur.';
      //Condition selon l'âge pour la femme
    }elseif ($age >=18 && $gender == 'femme'){
      echo 'Vous êtes une femme et vous êtes majeur.';
    }else {
      echo 'Vous êtes une femme et vous êtes mineur.';
    }
    ?>
  </p>
</body>
</html>
