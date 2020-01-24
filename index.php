<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="calculateur d'alcoolémie en ligne, vous permez de calculer et donner une aproximation de votre taux d'alcool dans le sang en g/l un conducteur possédant un permis probatoire ne peux pas conduire avec un taux supérieur à 20g/l alors qu'un conducteur confirmé ne peux pas conduire avec un taux supérieure à 0,50g/L" />
	<meta name="keywords" content="alcoolémie, calculer son alcoolémie, taux d'alcoolémie, jeune conducteur, alcool, taux, taux d'alcool, alcool dans le sang" />

	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap (pour le design) -->
	<link href="style1.css" rel="stylesheet">
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
			<div class="offset-4"></div>
			<div class="col-4">
				D'ALCOOL&Eacute;MIE</div> <!-- 2ème ligne  Header -->
		</div>
		<div class="offset-4"></div>
	</div>
	<!-- Main -->
	<div class="container">
		<div class="col-12">
			<div class="row">
				<div class="col-11 padding">
					<form method="post" action="traitement.php">
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-2"></div>
								<div class="col-6 text">
									Indiquez votre sexe et votre poids dans les cases ci-dessous :
								</div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-2"></div>
								<div class="col-2">
									<!-- Select du sexe de l'utilisateur -->
									<SELECT name="sexe" required>
										<OPTION value=""> Sexe </OPTION>
										<OPTION value="Homme"> Homme </OPTION>
										<OPTION value="Femme"> Femme </OPTION>
										<OPTION value="Femme"> Non d&eacute;finie </OPTION>
									</SELECT>
								</div>
								<div class="offset-1"></div>
								<div class="col-2">
									<!-- formulaire du poids de l'utilisateur -->
									<input required type="text" name="poid" value='' size="3" />
								</div>
								<div class="col-1 marginltf2 text">KG</div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-2"></div>
								<div class="col-3 text">
									Avez-vous mang&eacute; ?
								</div>
								<div class="col-1">
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
								<div class="offset-2"></div>
								<div class="col-10 text">
									Indiquez l'heure à laquelle vous avez fini votre premier et dernier verre ci-dessous:
								</div>
								<div class="offset-2"></div>
								<div class="col-2 padding text">Premier verre</div>
								<div class="col-1 padding marginlft2">
									<!-- Select de l'heure du premier verre -->
									<SELECT name="premierh" required>
										<OPTION value=""> h</OPTION>

										<?php for ($i = 0; $i < 24; $i++) {
											echo "<OPTION value=" . $i . "> " . $i . "h</OPTION>";
										} ?>

									</SELECT>
								</div>
								<!-- Select des minutes du premier verre -->
								<div class="col-1 padding marginlft">
									<SELECT name="premiermin" required>
										<OPTION value="">min</OPTION>

										<?php for ($i = 0; $i < 60; $i++) {
											echo "<OPTION value=" . $i . "> " . $i . "min</OPTION>";
										} ?>

									</SELECT>
								</div>
								<div class="col-2 padding text"> Dernier verre </div>
								<div class="col-1 padding marginlft2">
									<!-- Select de l'heure du dernier verre -->
									<SELECT name="dernierh" required>
										<OPTION value=""> h</OPTION>

										<?php for ($i = 0; $i < 24; $i++) {
											echo "<OPTION value=" . $i . "> " . $i . "h</OPTION>";
										} ?>

									</SELECT>
								</div>
								<div class="col-1 padding marginlft">
									<!-- Select des minutes du dernier verre -->
									<SELECT name="derniermin" required>
										<OPTION value="">min</OPTION>

										<?php for ($i = 0; $i < 60; $i++) {
											echo "<OPTION value=" . $i . "> " . $i . "min</OPTION>";
										} ?>

									</SELECT></div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-2"></div>
								<div class="col-8 text">
									Indiquez ci-dessous votre dosage d'alcool et le nombre de verres consomm&eacute;es
								</div>
							</div>
							<div class="col-12 marginright">
								<div class="row padding">
									<div class="offset-4"></div>
									<div class="col-2">
										<!-- Select des du dosage-->
										<SELECT name="dosage" required>
											<OPTION value="">Dosage</OPTION>
											<OPTION value="bar"> BAR (STANDARD)</OPTION>
											<OPTION value="maison"> MAISON </OPTION>
											<OPTION value="fort"> FORT </OPTION>
										</SELECT>
									</div>
									<div class="col-2">
										<input type="number" name="nbverres" required placeholder="0" />
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-5"></div>
								<div class="col-3 padding">
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
				<div class="col-1">
					<img src="img/picture2.jpg" alt="img cool">
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