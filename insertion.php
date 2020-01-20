	<?php
                  // INSERER DANS TABLE ALCOOL NOM ET DEGRE D'ALCOLISATION //
                  try {

                  
       $bdd = new PDO('mysql:host=localhost; dbname=bddalcool; charset=utf8', 'root', '');
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  }
                  catch(Exception $e)                                      
                  {
                      die('Erreur :' .$e->getMessage()); 
                  }
                  // calcul de dosage d'un alcool en ml en fonction de son degrés d'alcoolémie
                  
                  $degre = $_POST['others']/100;
                  $dosage_bar = (1 / (0.08 * $degre));
                  $dosage_maison = (1.125 / (0.08 * $degre));
                  $dosage_fort = (1.5 / (0.08 * $degre));

                  if(empty($_POST['other']) && empty($_POST['others'])){

                    echo "le fomulaire a bien été rempli";

                  }else{

                    echo "erreur veuillez remplir le formualaire";
                  }
                  
                    $req = $bdd->prepare('INSERT INTO alcool(Nom, DegreAlcoolisation, dosage_bar,
                    dosage_maison, dosage_fort) VALUES(?, ?, ?, ?, ?)');
                     $req->execute(array($_POST['other'], $_POST['others'], $dosage_bar, $dosage_maison, $dosage_fort));

    


    



                header('Location: index.php') ?>
