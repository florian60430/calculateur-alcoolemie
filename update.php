<?php
                  // MODIFIER DANS TABLE ALCOOL NOM ET DEGRE D'ALCOLISATION //
                  try {

                  
            $bdd = new PDO('mysql:host=localhost; dbname=bddalcool; charset=utf8', 'root', '');

                  }
                  catch(Exception $e)                                      
                  {
                      die('Erreur :' .$e->getMessage()); 
                  }

                  if(empty($_POST['updatedegre']) && empty($_POST['alcoolupdate'])){

                    echo "le fomulaire a bien été rempli";

                  }else{

                    echo "erreur veuillez remplir le formualaire";
                  }
 
              $req = $bdd->prepare('UPDATE alcool SET DegreAlcoolisation = ? WHERE id_Alcool = ?');
              $req->execute(array($_POST['updatedegre'],$_POST['alcoolupdate']));
                


    


    
header('Location: index.php') ?>