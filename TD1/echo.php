<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $marque = "mercedes";
          $couleur = "bleue";
          $immatriculation = "84dz87";

          $voiture1 = array (
            'marque' => 'mercedes',
            'couleur' => 'rouge',
            'immatriculation' => '87de95');

          $voiture2 = array (
            'marque' => 'mercedous',
            'couleur' => 'rousse',
            'immatriculation' => '9574ad');

          $tableau_voiture = array ();
          $tableau_voiture[1] = $voiture1;
          $tableau_voiture[2] = $voiture2;



          // On écrit le contenu de la variable 'texte' dans la page Web
          echo "<h2> Tableau des voitures </h2> <br>";
          if (empty($tableau_voiture)){
            echo "Le tableau est vide";
          }
          else {
          foreach ($tableau_voiture as $int => $value) {
            echo "<ul>";
            foreach ($value as $key => $stats) {
              echo "<li> $key = $stats </li>";
            }
            echo "</ul>";
          }
        }
        


        ?>
    </body>
</html>