<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap (pour le design) -->
	<link href="style1.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet"> <!-- Plice d'écriturte -->


	<title>PICOLO CALCULATOR</title>
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
				D'ALCOOL&Eacute;MIE</div> <!-- 2ème ligne du Header -->
		</div>
		<div class="offset-4"></div>
	</div>
	<!-- Main -->
	<div class="container">
		<div class="col-12">
			<div class="row">
				<div class="col-11 padding">
					<form method="post" action="traitement.php">
						<div class="col-12 text">
							<div class="row">
								<div class="offset-2"></div>
								<div class="col-3">
									Entrez l'heure actuelle :
								</div>
								<!-- Select de l'heure acutelle -->
								<div class="col-1 marginlft">
									<SELECT name="heurenow" size="1">
										<OPTION value="?"> h</OPTION>
										<OPTION value="00"> 00h</OPTION>
										<OPTION value="01"> 01h</OPTION>
										<OPTION value="02"> 02h</OPTION>
										<OPTION value="03"> 03h</OPTION>
										<OPTION value="04"> 04h</OPTION>
										<OPTION value="05"> 05h</OPTION>
										<OPTION value="06"> 06h</OPTION>
										<OPTION value="07"> 07h</OPTION>
										<OPTION value="08"> 08h</OPTION>
										<OPTION value="09"> 09h</OPTION>
										<OPTION value="10"> 10h</OPTION>
										<OPTION value="11"> 11h</OPTION>
										<OPTION value="12"> 12h</OPTION>
										<OPTION value="13"> 13h</OPTION>
										<OPTION value="14"> 14h</OPTION>
										<OPTION value="15"> 15h</OPTION>
										<OPTION value="16"> 16h</OPTION>
										<OPTION value="17"> 17h</OPTION>
										<OPTION value="18"> 18h</OPTION>
										<OPTION value="19"> 19h</OPTION>
										<OPTION value="20"> 20h</OPTION>
										<OPTION value="21"> 21h</OPTION>
										<OPTION value="22"> 22h</OPTION>
										<OPTION value="23"> 23h</OPTION>
									</SELECT>
								</div>
								<!-- Select de des minutes acutelle -->
								<div class="col-1 marginlft">
									<SELECT name="minutenow" size="1">
										<OPTION value="">min</OPTION>
										<OPTION value="00"> 00</OPTION>
										<OPTION value="05"> 05</OPTION>
										<OPTION value="10"> 10</OPTION>
										<OPTION value="15"> 15</OPTION>
										<OPTION value="20"> 20</OPTION>
										<OPTION value="25"> 25</OPTION>
										<OPTION value="30"> 30</OPTION>
										<OPTION value="35"> 35</OPTION>
										<OPTION value="40"> 40</OPTION>
										<OPTION value="45"> 45</OPTION>
										<OPTION value="50"> 50</OPTION>
										<OPTION value="55"> 55</OPTION>
									</SELECT>
								</div>

							</div>
						</div>
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
									<SELECT name="sexe">
										<OPTION value=""> Sexe </OPTION>
										<OPTION value="Homme"> Homme </OPTION>
										<OPTION value="Femme"> Femme </OPTION>
										<OPTION value="Femme"> Non d&eacute;finie </OPTION>
									</SELECT>
								</div>
								<div class="offset-1"></div>
								<div class="col-2">
									<!-- formulaire du poids de l'utilisateur -->
									<input type="text" name="poid" value='' size="3" />
								</div>
								<div class="col-1 marginltf text">KG</div>
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
									<SELECT name="repas">
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
									<SELECT name="premierh">
										<OPTION value="?"> h</OPTION>
										<OPTION value="00"> 00h</OPTION>
										<OPTION value="01"> 01h</OPTION>
										<OPTION value="02"> 02h</OPTION>
										<OPTION value="03"> 03h</OPTION>
										<OPTION value="04"> 04h</OPTION>
										<OPTION value="05"> 05h</OPTION>
										<OPTION value="06"> 06h</OPTION>
										<OPTION value="07"> 07h</OPTION>
										<OPTION value="08"> 08h</OPTION>
										<OPTION value="09"> 09h</OPTION>
										<OPTION value="10"> 10h</OPTION>
										<OPTION value="11"> 11h</OPTION>
										<OPTION value="12"> 12h</OPTION>
										<OPTION value="13"> 13h</OPTION>
										<OPTION value="14"> 14h</OPTION>
										<OPTION value="15"> 15h</OPTION>
										<OPTION value="16"> 16h</OPTION>
										<OPTION value="17"> 17h</OPTION>
										<OPTION value="18"> 18h</OPTION>
										<OPTION value="19"> 19h</OPTION>
										<OPTION value="20"> 20h</OPTION>
										<OPTION value="21"> 21h</OPTION>
										<OPTION value="22"> 22h</OPTION>
										<OPTION value="23"> 23h</OPTION>
									</SELECT>
								</div>
								<!-- Select des minutes du premier verre -->
								<div class="col-1 padding marginlft">
									<SELECT name="premiermin">
										<OPTION value="">min</OPTION>
										<OPTION value="00"> 00</OPTION>
										<OPTION value="05"> 05</OPTION>
										<OPTION value="10"> 10</OPTION>
										<OPTION value="15"> 15</OPTION>
										<OPTION value="20"> 20</OPTION>
										<OPTION value="25"> 25</OPTION>
										<OPTION value="30"> 30</OPTION>
										<OPTION value="35"> 35</OPTION>
										<OPTION value="40"> 40</OPTION>
										<OPTION value="45"> 45</OPTION>
										<OPTION value="50"> 50</OPTION>
										<OPTION value="55"> 55</OPTION>
									</SELECT>
								</div>
								<div class="col-2 padding text"> Dernier verre </div>
								<div class="col-1 padding marginlft2">
									<!-- Select de l'heure du dernier verre -->
									<SELECT name="dernierh">
										<OPTION value="?"> h</OPTION>
										<OPTION value="00"> 00h</OPTION>
										<OPTION value="01"> 01h</OPTION>
										<OPTION value="02"> 02h</OPTION>
										<OPTION value="03"> 03h</OPTION>
										<OPTION value="04"> 04h</OPTION>
										<OPTION value="05"> 05h</OPTION>
										<OPTION value="06"> 06h</OPTION>
										<OPTION value="07"> 07h</OPTION>
										<OPTION value="08"> 08h</OPTION>
										<OPTION value="09"> 09h</OPTION>
										<OPTION value="10"> 10h</OPTION>
										<OPTION value="11"> 11h</OPTION>
										<OPTION value="12"> 12h</OPTION>
										<OPTION value="13"> 13h</OPTION>
										<OPTION value="14"> 14h</OPTION>
										<OPTION value="15"> 15h</OPTION>
										<OPTION value="16"> 16h</OPTION>
										<OPTION value="17"> 17h</OPTION>
										<OPTION value="18"> 18h</OPTION>
										<OPTION value="19"> 19h</OPTION>
										<OPTION value="20"> 20h</OPTION>
										<OPTION value="21"> 21h</OPTION>
										<OPTION value="22"> 22h</OPTION>
										<OPTION value="23"> 23h</OPTION>
									</SELECT>
								</div>
								<div class="col-1 padding marginlft">
									<!-- Select des minutes du dernier verre -->
									<SELECT name="derniermin">
										<OPTION value="">min</OPTION>
										<OPTION value="00"> 00</OPTION>
										<OPTION value="05"> 05</OPTION>
										<OPTION value="10"> 10</OPTION>
										<OPTION value="15"> 15</OPTION>
										<OPTION value="20"> 20</OPTION>
										<OPTION value="25"> 25</OPTION>
										<OPTION value="30"> 30</OPTION>
										<OPTION value="35"> 35</OPTION>
										<OPTION value="40"> 40</OPTION>
										<OPTION value="45"> 45</OPTION>
										<OPTION value="50"> 50</OPTION>
										<OPTION value="55"> 55</OPTION>
									</SELECT></div>
							</div>
						</div>
						<div class="col-12 padding">
							<div class="row">
								<div class="offset-2"></div>
								<div class="col-10 text">
									Indiquez votre dosage, le nombre de verres consomm&eacute;s puis l'alcool comsomm&eacute;s
								</div>
							</div>
							<div class="row padding">
								<div class="offset-2"></div>
								<div class="col-2">
									<!-- Select des du dosage-->
									<SELECT name="dosage">
										<OPTION value="Dosage">Dosage</OPTION>
										<OPTION value="bar"> BAR (STANDARD)</OPTION>
										<OPTION value="maison"> MAISON </OPTION>
										<OPTION value="fort"> FORT </OPTION>
									</SELECT>
								</div>
								<div class="col-3">
								<input type="number" name="nbverres"/>
								</div>
								<div class="col-2"></div>
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