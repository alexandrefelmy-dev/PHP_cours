 <?php
   // Afficher les erreurs à l'écran
   ini_set('display_errors', 1);
   // Afficher les erreurs et les avertissements
   error_reporting(E_ALL);
   ob_start();
   ?>

 <h1>Exercices - Les boucles</h1>
 <h2>Exercice 1 :</h2>
 <p>
    Le but de l'exercice est de faire un décompte pour souhaiter la bonne année ! <br>
    Le résultat attendu est le suivant : <br />
    5! <br />
    4! <br />
    3! <br />
    2! <br />
    1! <br />
    BONNE ANNÉE !!! <br /><br />

    1) Faire afficher le message souhaité sans l'utilisation de boucles
    2) Faire afficher le message souhaité grâce à la boucle WHILE
    3) Faire la même boucle mais avec un FOR
 </p>

 <strong>Résultat :</strong>

 <?php
   // Votre code ici
   $i = -5;
   while ($i > 0) {
      echo "<h2>$i!</h2>";
      $i--;
   }
   if ($i == 0){
    echo "<h2>BONNE ANNÉE !!!</h2>";
   }


      for ($i = 5; $i > 0; $i--) {
      echo "<h2>$i!</h2>";
   }
    echo "<h2>BONNE ANNÉE !!!</h2>";
    
   ?>




 <h2>Exercice 2 :</h2>
 <p>
    Faire un programme qui permet de calculer la somme des X premiers nombres<br>
    Pour cela, il faudra créer une variable <code>$x</code> et une variable <code>$somme</code> et bien évidemment une boucle !<br>

    1) Faire afficher le message suivant :<br>
    1 + 2 + 3 + 4 + 5 + 6 + ... + <code>$x</code><br>

    2) Faire en sorte d'afficher la même phrase que le 1) mais avec le résultat de cette somme :<br>
    1 + 2 + 3 + 4 + 5 + 6 + ... + <code>$x</code> = <code>$somme</code>
 </p>

 <strong>Résultat :<br><br></strong>

 <?php

   //CODE HERE
   $somme = 0;
   for ($i = 1; $i <= 10; $i++) {
      echo $i;
      $somme += $i;
      if ($i < 10) {
         echo " + ";
      }
   }
   echo "<h2>= $somme</h2>";
   ?>

 <h2>Exercice 3 :</h2>
 <p>
    Le but du programme suivant sera de faire afficher la table de multiplication des chiffres 1 à 3, il faudra alors utliser une boucle dans une boucle !<br>
    Le résultat attendu sera par exemple : <br>
    1*1 = 1<br>
    1*2 = 2<br>
    etc 1*(3...9) = ...<br>
    1*9 = 9<br>
    2*1= 2<br>
    2*2= 4<br>
    etc 2*(3...9) = ...<br>
    3*1= 3<br>
    3*2= 6<br>
    etc 3*(3...9) = ...<br>

 </p>

 <strong>Résultat :</strong>

 <?php

   // TODO
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
          echo "<article>$i * $j = " . ($i * $j) . "</article>";
        }
    }


    $tableau = [];
    for ($i = 1; $i <= 10; $i++) {
      for ($j = 1; $j <= 10; $j++) {
        $tableau[$j - 1] = $i * $j;
      
      }
      echo "<h2>Table de $i : <br>" . implode(" | ", $tableau) . "</h2>";
    }
   ?>




 <?php $content = ob_get_clean(); ?>

 <?php require('../inc/template.php'); ?>