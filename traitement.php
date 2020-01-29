<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap (pour le design) -->
    <link href="traitement.css" rel="stylesheet">
    <link rel="stylesheet" media="screen and (min-width: 767px) and (max-width: 992px) " href="traitement_md.css" /> <!-- Pour ceux qui ont une résolution inférieure à 992px -->
    <link rel="stylesheet" media="screen and (min-width: 575px) and (max-width: 767px)" href="traitement_sm.css" /> <!-- Pour ceux qui ont une résolution inférieure à 767px -->
    <link rel="stylesheet" media="screen and (min-width: 0px) and (max-width: 575px) and (min-height: 569px) and (max-height: 735px)" href="traitement_xs.css" /> <!-- Pour ceux qui ont une résolution inférieure à 575px -->
    <link rel="stylesheet" media="screen and (min-width: 0px) and (max-width: 575px) and (min-height: 735px) and (max-height: 811px)" href="traitement_Iphone8.css" />
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

    <title>PICOLO CALCULATOR</title>
</head>

<body>
    <header>
        <div class="col-12 font">
            <div class="row title">
                <div class="col-12">
                    SUPER CALCULATEUR
                </div>
            </div>

            <div class="row title2">
                <div class="col-12">
                    D'ALCOOL&Eacute;MIE</div>
            </div>
        </div>
    </header>
    <?php

    $premierverre = $_POST['premierh'] . $_POST['derniermin'] . '00';
    $dernierverre = $_POST['dernierh'] . $_POST['derniermin'] . '00';
    $quantite = intval($_POST['nbverres']);
    if ($_POST['dosage'] == 'bar') {
        $dose = 10 * $quantite;
    } else if ($_POST['dosage'] == 'maison') {
        $dose = 12.5 * $quantite;
    } else {
        $dose = 15 * $quantite;
    }
    $localtime = localtime();
    $heureserv =  date('h');
    $minuteserv = date('i');
    ?>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="offset-xl-5 offset-lg-5 offset-md-4 offset-sm-4 offset-2"></div>
                <div class="col-8 col-xl-2 col-lg-2 col-md-4 col-sm-5 btncalcul padding">
                    <form methode="post" action="index.php">
                        <input type="submit" value="Nouveau calcul">
                    </form>
                </div>
            </div>
        </div>


        <?php
        // Fonction qui calcul l'acoolméie pour homme et femme//
        function Calcul_Taux_Alcool_Max($dose,  $masse)
        {
            if ($_POST['sexe'] === 'Homme') {

                $taux = ($dose) / (0.7 * $masse);
                return $taux;
            } else {

                $taux = ($dose) / (0.6 * $masse);
                return $taux;
            }
        }

        // Fonction qui calcul l'horaire de l'acoolémie maximum de l'utilisateur
        function Calcul_Temp_Max_Alcoolémie($manger, $heure, $minute)
        {
            if ($manger == 'non') {

                if ($minute <= 30) {

                    $minute = $minute + 30;
                    $heure = $heure;
                } else {

                    $minute = $minute - 30;
                    $heure = $heure + 1;
                }
            } else {

                $minute = $minute;
                $heure = $heure + 1;
            }
            return array($heure, $minute);
        }

        function calcul_taux_now($sexe, $taux, $etat, $hmax, $minmax, $h, $min, $Periode)
        {
            if ($h < $hmax) {

                $lastheure = ($hmax * 60) + $minmax;  // 930
                $servheure = (($h + 24) * 60) + $min; // 1484
            } else {

                $lastheure = ($hmax * 60) + $minmax; //1030
                $servheure = ($h * 60) + $min; // 1033
            }


            if ($etat == 'descente') {

                if ($sexe == 'Homme') {

                    $rest = $servheure - $lastheure;


                    $tauxnow = $taux - 0.0025 * $rest;
                    $tauxnow = $taux - 0.0025 * $Periode;
                } else {

                    $rest =  $servheure - $lastheure; //  389


                    $tauxnow = $taux - 0.0015 * $rest;
                    $tauxnow = $taux - 0.0015 * $Periode;
                }
            } else {

                if ($sexe == "Homme") {

                    $rest =  $servheure - $lastheure;
                    $perte =  0.0025 * $rest;
                    $heuremax =  ($lastheure + 60);
                    $tauxnow = $taux * $servheure / $heuremax;
                    $tauxnow = $taux - 0.0025 * $Periode;
                } else {

                    $rest =  $servheure - $lastheure;

                    $perte =  0.0015 * $rest;
                    $heuremax =  ($lastheure + 60);
                    $tauxnow = $taux * $servheure / $heuremax;
                    $tauxnow = $taux - 0.0015 * $Periode;
                }
            }

            if ($tauxnow < 0) {

                return 0;
            } else {

                return $tauxnow;
            }
        }


        // fonction qui calcule le temps que mettras l'organisme à éliminer l'acool
        function Calcul_temps_sobre($taux, $h, $min)
        {
            $compteur = 0;
            $heuresobre = 0;
            if ($_POST['sexe'] == 'Homme') {
                while ($taux > 0) {

                    $taux = $taux - 0.0025;
                    $compteur = $compteur + 1;
                }
            } else {
                while ($taux > 0) {

                    $taux = $taux - 0.0015;
                    $compteur = $compteur + 1;
                }
            }
            while ($compteur > 60) {

                $compteur = $compteur - 60;
                $heuresobre = $heuresobre + 1;
            }
            $heuresobre = $h + $heuresobre;
            $minutesobre = $compteur + $min;
            return array($heuresobre, $minutesobre);
        }

        function calcul_heure_seuil_legal($taux, $h, $min)
        {

            $compteur = 0;
            $heurelegal = 0;

            if ($_POST['sexe'] == 'Homme') {
                while ($taux > 0.50) {

                    $taux = $taux - 0.0025;
                    $compteur = $compteur + 1;
                }
            } else {
                while ($taux > 0.50) {

                    $taux = $taux - 0.0015;
                    $compteur = $compteur + 1;
                }
            }
            while ($compteur > 60) {

                $compteur = $compteur - 60;
                $heurelegal = $heurelegal + 1;
            }
            $heurelegal = $h + $heurelegal;
            $minuteleagal = $compteur + $min;
            return array($heurelegal, $minuteleagal);
        }

        function calcul_heure_seuil_legal_jeune($taux, $h, $min)
        {

            $compteur = 0;
            $heurelegaljeune = 0;

            if ($_POST['sexe'] == 'Homme') {
                while ($taux > 0.20) {

                    $taux = $taux - 0.0025;
                    $compteur = $compteur + 1;
                }
            } else {
                while ($taux > 0.20) {

                    $taux = $taux - 0.0015;
                    $compteur = $compteur + 1;
                }
            }
            while ($compteur > 60) {

                $compteur = $compteur - 60;
                $heurelegaljeune = $heurelegaljeune + 1;
            }
            $heurelegaljeune = $h + $heurelegaljeune;
            $minutelegaljeune = $compteur + $min;


            return array($heurelegaljeune, $minutelegaljeune);
        }



        function calcul_montante_descente($lasth, $lastm, $hserv, $minserv)
        {

            if ($hserv < $lasth) { //non

                $lastheure = ($lasth * 60) + $lastm;
                $servheure = (($hserv + 24) * 60) + $minserv;
            } else {

                $lastheure = ($lasth * 60) + $lastm; //1030
                $servheure = ($hserv * 60) + $minserv; //1033
            }
            if (($lastheure - $servheure) <= -60) // 

            {

                return $etat = 'descente';
            } else {

                return $etat = 'montant';
            }
        }
        function affiche_phrase($tauxnow)
        {
            if ($tauxnow == 0) {
                return 0;
            } else if ($tauxnow > 0 && $tauxnow <= 0.25) {
                return 1;
            } else if ($tauxnow > 0.25 && $tauxnow <= 0.65) {
                return 2;
            } else if ($tauxnow > 0.65 && $tauxnow <= 1) {
                return 3;
            } else if ($tauxnow > 1 && $tauxnow <= 1.5) {
                return 4;
            } else if ($tauxnow > 1.5 && $tauxnow <= 2) {
                return 5;
            } else if ($tauxnow > 2 && $tauxnow <= 13.74) {
                return 6;
            } else {
                return 7;
            }
        }
        // Fonction qui calcule la période durant laquelle l'utilisateur à bus
        function calculperiode($HeurePremierVerre, $MinutePremierVerre, $HeureDernierVerre, $MinuteDernierVerre)
        {
            if ($HeureDernierVerre < $HeurePremierVerre) {
                $HeureDernierVerre = $HeureDernierVerre + 24;
            }

            $Periode = (($HeureDernierVerre * 60) + $MinuteDernierVerre) - (($HeurePremierVerre * 60) + $MinutePremierVerre);
            return $Periode;
        }

        // fonction qui calcul le taux d'alcool que l'utilisateur à éléminer pendant sa consomation // 
        $Periode = calculperiode($_POST['premierh'], $_POST['premiermin'], $_POST['dernierh'], $_POST['derniermin']);
        $tauxmax = Calcul_Taux_Alcool_Max($dose, $_POST['poid']);
        $tauxmax = number_format($tauxmax, '2', '.', '');
        $newhoraire = Calcul_Temp_Max_Alcoolémie($_POST['repas'], $_POST['dernierh'], $_POST['derniermin']);
        $heuremax = $newhoraire[0];
        $minutemax = $newhoraire[1];
        $horairesobre = Calcul_temps_sobre($tauxmax, $heuremax, $minutemax);
        $horairelegal = calcul_heure_seuil_legal($tauxmax, $heuremax, $minutemax);
        $horairelegaljeune = calcul_heure_seuil_legal_jeune($tauxmax, $heuremax, $minutemax);
        $heuresobre = $horairesobre[0];
        $minutesobre = $horairesobre[1];


        $etat = calcul_montante_descente($_POST['dernierh'], $_POST['derniermin'], $heureserv, $minuteserv);
        $tauxnow = calcul_taux_now($_POST['sexe'], $tauxmax, $etat, $_POST['dernierh'], $_POST['derniermin'], $heureserv, $minuteserv, $Periode);
        $indicetaux = affiche_phrase($tauxnow);


        $heureConfirmer = intval($horairelegal[0]);
        $minuteConfirmer = intval($horairelegal[1]);

        $heurejeune = $horairelegaljeune[0];
        $minutejeune = $horairelegaljeune[1];
        ?>
        <div clas="col-12">
            <div class="row">
                <div class="col-12 center text paddingtitle"> Votre taux actuel :
                </div>
            </div>
            <div class="row">
                <div class="col-12 tauxnow">
                    <?php
                    $tauxnow = number_format($tauxnow, '2', '.', '');
                    echo $tauxnow . 'g/L'; ?>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12 center info">
                    <?Php if ($indicetaux == 0) {
                        echo 'Vous êtes sobre vous pouvez conduire en tout sécurité';
                    } else if ($indicetaux == 1) {
                        echo 'Vous vous sentez plus détendu, mais vous êtes moins vigilant au volant.';
                    } else if ($indicetaux == 2) {
                        echo 'Vous êtes «éméché», vous ne pouvez plus vous insérer dans la circulation en toute sécurité.';
                    } else if ($indicetaux == 3) {
                        echo 'Vous êtes ivre, vous ne devez en aucun cas vous insérer dans la circulation.';
                    } else if ($indicetaux == 4) {
                        echo ' Vous êtes fort ivre, vous n\'êtes plus capable de coordonner vos mouvements, vos sens sont complètement émoussés.';
                    } else if ($indicetaux == 5) {
                        echo ' Vous êtes complètement «à l\'ouest», avec une forte probabilité de perte de conscience et de danger pour votre vie.';
                    } else if ($indicetaux == 6) {
                        echo ' Vous pouvez tomber dans le coma, danger de mort immédiate.';
                    } else if ($indicetaux == 7) {
                        echo 'Vous avez dépassé le record d\'alcoolémie jamais mesuré à ce jour (13,74 g/L).';
                    } ?>
                </div>
                <div class="offset-2"></div>
            </div>
        </div>
        <div class="col-12 text">
            <div class="row bordur">
                <div class="offset-xl-3 offset-lg-3 offset-md-1 offset-0"></div>
                <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12">
                    <?php
                    echo 'Vous êtes en débit ';
                    if ($etat == "montant") {

                        echo 'montant';
                    } else {

                        echo 'descendant';
                    }

                    echo ' votre taux maximum d\'alcolémie dans le sang';

                    if ($etat == 'montant') {
                        echo  ' sera de : <b>' . $tauxmax . ' g/L </b>';
                    } else


                        echo  ' était de : <b>' . $tauxmax . ' g/L </b>';
                    echo 'vous ';

                    if ($etat == 'montant') {
                        echo  ' l\'atteindrez';
                    } else {
                        echo  ' l\'avez atteind';
                    }
                    if ($minutemax < 10) {


                        echo ' à <b>' . $heuremax . 'h0' . $minutemax . '</b>';
                    } else {

                        echo ' à <b>' . $heuremax . 'h' . $minutemax . '</b>';
                    } ?>

                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="offset-xl-1 offset-lg-1 offset-md-1 offset-0 "></div>
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12">
                        <?php
                        if ($tauxnow == 0) {

                            echo 'vous êtes sobre';
                        } else {
                            if ($minutesobre >= 60) {

                                $minutesobre = $minutesobre - 60;
                                $heuresobre = $heuresobre + 1;
                            }
                            if ($heuresobre >= 24) {
                                $heuresobre = $heuresobre - 24;

                                if ($minutesobre < 10) {

                                    echo '<div class="center"> Vous serrez sobre demain à <b>' . $heuresobre . "h0" . $minutesobre . "</b></div>";
                                } else {

                                    echo '<div class="center"> Vous serrez sobre demain à <b>' . $heuresobre . "h" . $minutesobre . "</b></div>";
                                }
                            } else {


                                echo "<div class='center'> vous serez sobre à<b>" . $heuresobre . 'h' . $minutesobre . '</b></div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 text">
                <div class="row">
                    <div class="col-12 bordur">

                        <?php if ($tauxnow < 0.50) {
                            echo '<div class="green"> <b>vous êtes en dessous du seuil légal des 0.50 g/L pour un conducteur confirmé vous pouvez donc conduire</b> </div>';
                        } else { ?>
                            <div class="rouge"><b> Pour un conducteur confirmer vous passerez le seuil l&eacute;gal des 0.50g/L à
                                <?php

                                if ($minuteConfirmer < 10) {

                                    echo '<u>' . $heureConfirmer . 'h0' . $minuteConfirmer . '</u>';
                                } else {
                                    echo '<u>' . $heureConfirmer . 'h' . $minuteConfirmer . '</u>';
                                }
                            } ?></b>
                            </div>
                            <div class="col-12">
                                <?php if ($tauxnow < 0.20) {
                                    echo '<div class="green"> <b>vous êtes en dessous du seuil légal des 0.20 g/L jeune conducteur vous pouvez donc conduire </b></div>';
                                } else { ?>

                                    <div class="rouge"><b> Pour un jeune conducteur vous passerez le seuil l&eacute;gal des 0.20g/L à
                                        <?php if ($minutejeune < 10) {

                                            echo '<u>' . $heurejeune . 'h0' . $minutejeune . '</u>';
                                        } else {
                                            echo '<u>' . $heurejeune . 'h' . $minutejeune . '</u>';
                                        }
                                    } ?></b>
                                    </div>
                            </div>
                            <div class="col-12 extra_padding text_footer center">
                                <div class="row">
                                    <div class="col-12">
                                        <p>
                                            Le foie &eacute;limine 95% de l'alcool dans le corps à raison de 0.10 à 0.20 g/l pour un homme et
                                            0.085 à 0.10 g/l pour une femme pour nos calculs nous avons utilisé 0.15g/L pour un homme et
                                            0.09 g/L pour une femme ou genre indéfinie les calculs ne prennent pas en compte les 5% restants
                                            &eacute;liminer par l'air expiré et les urines
                                        </p>
                                    </div>
                                    <div class="col-12 padding">
                                        <p>
                                            apr&egrave;s ingestion d'un verre d'alcool le taux maximum est atteint 1h apr&egrave;s et 30 min si on est à jeun
                                        </p>
                                    </div>
                                </div class="col-12 center padding">
                                <p> - une dose de bar correspond à 0.10g d'alcool pur dans un verre</p>
                                <p>- une dose maison correspond à 0.12.5g d'alcool pur dans un verre</p>
                                <p>- une dose forte correspond à 0.15g d'acool pur dans un verre</p>

                                <div class="col-12 padding">
                                    <p>l'intervalle d'incertitude est de {+5% et -0.5%} c'est-à-dire que les r&eacute;sultats seront plus souvent au-dessus qu'en dessous de la r&eacute;alit&eacute;
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="row">
        <div class="col-12 footertext1">
            Copyright © 2020 Amiens - France. Inc. Tous droits réservés.
        </div>
        <div class="offset-3"></div>
        <div class="col-2 footertext2">CALCULATEUR</div>
        <div class="col-2 footertext2">CONTRAT D'UTILISATION</div>
        <div class="col-2 footertext2">MENTIONS L&Eacute;GALES</div>
        <div class="offset-1"></div>

        </div>
        <div class="col-12 footerline"></div>
        <div class="col-12">
            <div class="row">
                <div class="offset-4"></div>
                <div class="col-2 footertext3">Developped and designed by :</div>
                <div class="col-2 footertext4">Florian Wantelez, Mattei Freisi</div>
            </div>
        </div>
        </div>
</body>

</html>