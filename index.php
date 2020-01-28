<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="calculateur d'alcoolémie en ligne, vous permez de calculer et donner une aproximation de votre taux d'alcool dans le sang en g/l un conducteur possédant un permis probatoire ne peux pas conduire avec un taux supérieur à 20g/l alors qu'un conducteur confirmé ne peux pas conduire avec un taux supérieure à 0,50g/L" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Bootstrap (pour le design) -->
	<link href="style1.css" rel="stylesheet">

	<link rel="stylesheet" media="screen and (min-width: 1200px) and (max-width: 2100px)" href="ecran_xl.css">
	<link rel="stylesheet" media="screen and (min-width: 992px) and (max-width: 1200px)" href="ecran_lg.css" /> <!-- Pour ceux qui ont une résolution inférieure à 1200px -->
	<link rel="stylesheet" media="screen and (min-width: 767px) and (max-width: 992px) " href="ecran_md.css" /> <!-- Pour ceux qui ont une résolution inférieure à 992px -->
	<link rel="stylesheet" media="screen and (min-width: 575px) and (max-width: 767px)" href="ecran_sm.css" /> <!-- Pour ceux qui ont une résolution inférieure à 767px -->
	<link rel="stylesheet" media="screen and (min-width: 0px) and (max-width: 575px)" href="ecran_xs.css" /> <!-- Pour ceux qui ont une résolution inférieure à 575px -->
	<link rel="stylesheet" media="screen and (min-width: 0px) and (max-width: 575px) and (min-height: 0px) and (max-height: 641px)" href="ecran_xxs.css" /> <!-- Pour ceux qui ont une résolution inférieure à 575px -->
	<link rel="stylesheet" media="screen and (min-width: 0px) and (max-width: 575px) and (min-height: 641px) and (max-height: 915px)" href="IphoneX.css" /> <!-- Pour ceux qui ont une résolution inférieure à 575px -->




	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet"> <!-- Plice d'écriturte -->



	<title>Calculateur d'alcol&eacute;mie en ligne gratuit</title>
</head>

<body>
	<div class="col-12 header">
		<div class="row title">
			<div class="col-12">
				SUPER CALCULATEUR
				<!-- Header -->
			</div>
		</div>

		<div class="row title2">
			<div class="col-12">
				D'ALCOOL&Eacute;MIE</div> <!-- 2ème ligne  Header -->
		</div>
		<div class="offset-4"></div>
	</div>
	<!-- Main -->
	<div class="container">
		<div class="col-12">
			<div class="row">
				<div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 padding">
					<form method="post" action="traitement.php">
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-xl-2 offset-lg-2 offset-md-0 offset-0"></div>
								<div class="col-xl-6 col-lg-8 col-md-11 col-sm-12 d-none d-md-block text">
									Indiquez votre sexe et votre poids dans les cases ci-dessous :
								</div>
								<div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12 d-md-none text">
									Indiquez votre sexe et votre poids ci-dessous :
								</div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-xl-2 offset-lg-2 offset-md-0 offset-sm-0 offset-0"></div>
								<div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-5">
									<!-- Select du sexe de l'utilisateur -->
									<SELECT name="sexe" required>
										<OPTION value=""> Sexe </OPTION>
										<OPTION value="Homme"> Homme </OPTION>
										<OPTION value="Femme"> Femme </OPTION>
										<OPTION value="Femme"> Non d&eacute;finie </OPTION>
									</SELECT>
								</div>
								<div class="offset-xl-1 offset-lg-1 offset-md-2 offset-sm-2 offset-1"></div>
								<div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-5">
									<!-- formulaire du poids de l'utilisateur -->
									<input required type="text" name="poid" value='' size="3" />
								</div>
								<div class="col-1 marginlft4 text">kg</div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-xl-2 offset-lg-2 offset-md-0 offset-sm-0"></div>
								<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 text">
									Avez-vous mang&eacute; ?
								</div>
								<div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-4">
									<!-- Select du repas -->
									<SELECT name="repas" required>
										<OPTION value=""> -- </OPTION>
										<OPTION value="oui"> oui </OPTION>
										<OPTION value="non"> non </OPTION>
									</SELECT>
								</div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-xl-2 offset-lg-2 offset-md-0"></div>
								<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 text d-none d-md-block">
									Heure à laquelle vous avez fini votre premier et dernier verre :
								</div>
								<div class="col-sm-12 col-12 d-md-none d-none d-sm-block text">
									Horaires de d&eacute;but et fin de consommation :
								</div>
								<div class="offset-xl-2 offset-lg-2 offset-md-0"></div>
								<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 padding text">Premier verre</div>

								<div class="col-xl-2 col-lg-2 col-md-3 col-sm-5 col-6 padding paddingheure">
									<div class="row">
										<div class="col-6 marginlft selectsize">
											<!-- Select de l'heure du premier verre -->
											<SELECT name="premierh" required>
												<OPTION value=""> h</OPTION>

												<?php for ($i = 0; $i < 24; $i++) {
													echo "<OPTION value=" . $i . "> " . $i . "h</OPTION>";
												} ?>

											</SELECT>
										</div>
										<div class="col-6 marginlft2">
											<!-- Select des minutes du premier verre -->
											<SELECT name="premiermin" required>
												<OPTION value="">min</OPTION>

												<?php for ($i = 0; $i < 60; $i++) {
													echo "<OPTION value=" . $i . "> " . $i . "min</OPTION>";
												} ?>

											</SELECT>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12 padding marginlft5 text"> Dernier verre </div>

								<div class="col-xl-2 col-lg-2 col-md-3 col-sm-5 col-6 padding paddingheure">
									<div class="row">
										<div class="col-6 marginlft">
											<!-- Select de l'heure du dernier verre -->
											<SELECT name="dernierh" required>
												<OPTION value=""> h</OPTION>

												<?php for ($i = 0; $i < 24; $i++) {
													echo "<OPTION value=" . $i . "> " . $i . "h</OPTION>";
												} ?>

											</SELECT>
										</div>
										<div class="col-6 marginlft2">
											<!-- Select des minutes du dernier verre -->
											<SELECT name="derniermin" required>
												<OPTION value="">min</OPTION>

												<?php for ($i = 0; $i < 60; $i++) {
													echo "<OPTION value=" . $i . "> " . $i . "min</OPTION>";
												} ?>

											</SELECT>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-xl-2 offset-lg-2 offset-md-0"></div>
								<div class="col-xl-8 col-lg-10 col-md-12 col-12 d-none d-sm-block text">
									Indiquez votre dosage d'alcool et le nombre de verres consomm&eacute;es :
								</div>
								<div class="col-xl-8 col-lg-10 col-md-12 col-12 d-sm-none text">
									Dosage d'alcool et nombre de verres consomm&eacute;es :
								</div>
							</div>
							<div class="col-12 ">
								<div class="row padding">
									<div class="offset-xl-4 offset-lg-4 offset-md-2 offset-sm-0 offset-0"></div>
									<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-5 marginlft3">
										<!-- Select des du dosage-->
										<SELECT name="dosage" required>
											<OPTION value="">Dosage</OPTION>
											<OPTION value="bar"> BAR (STANDARD)</OPTION>
											<OPTION value="maison"> MAISON </OPTION>
											<OPTION value="fort"> FORT </OPTION>
										</SELECT>
									</div>
									<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-5 marginright">
										<input type="number" name="nbverres" required placeholder="0" />
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-xl-5 offset-lg-6 offset-md-6 offset-sm-5"></div>
								<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 padding">
									<form method="post" action="traitement.php">
										<button type="submit" class="size">
											Calculer le taux d'alcool&eacute;mie
										</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-12 paddingfooter">
						</div>
				</div>
				<div class="col-1 d-none d-xl-block">
					<img src="img/picture2.jpg" alt="img cool">
				</div>
			</div>
		</div>
	</div>
	<footer class="row">
		<div class="col-12 footertext1">
			Copyright © 2020 Amiens - France. Inc. Tous droits réservés.
		</div>
		<div class="offset-xl-3 offset-lg-2 offset-md-2 d-none d-md-block"></div>
		<div class="col-xl-2 col-lg-3 col-md-3 footertext2 d-none d-md-block">CALCULATEUR</div>
		<div class="col-xl-2 col-lg-3 col-md-3 footertext2 d-none d-md-block">CONTRAT D'UTILISATION</div>
		<div class="col-xl-2 col-lg-3 col-md-3 footertext2 d-none d-md-block">MENTIONS L&Eacute;GALES</div>
		<div class="offset-1"></div>

		</div>
		<div class="col-12 footerline d-none d-md-block"></div>
		<div class="col-12 d-none d-md-block">
			<div class="row">
				<div class="offset-xl-4 offset-lg-4 offset-md-4 d-none d-md-block"></div>
				<div class="col-xl-2 col-lg-2 col-md-3 footertext3 d-none d-md-block">Developped and designed by :</div>
				<div class="col-xl-2 col-lg-2 col-md-3 footertext4 d-none d-md-block">Florian Wantelez, Mattei Freisi</div>

			</div>
		</div>
		</div>
</body>

</html>