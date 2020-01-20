<?php

                  // SUPPRIMER DANS TABLE ALCOOL NOM ET DEGRE D'ALCOLISATION //
                  try {

  
                    $bdd = new PDO('mysql:host=localhost; dbname=bddalcool; charset=utf8', 'root', '');

                  }
                  catch(Exception $e)                                      
                  {
                      die('Erreur :' .$e->getMessage()); 
                  }

                  if(empty($_POST['alcooldelete'])){

                    echo "le fomulaire a bien été rempli";
                    
                  }else{

                    echo "erreur veuillez remplir le formualaire";
                  }
                  $req = $bdd->prepare('DELETE FROM alcool WHERE id_Alcool = ?'); 
                  $req->execute(array($_POST['alcooldelete']));
                  $req->closeCursor();


    
header('Location: index.php') ?>