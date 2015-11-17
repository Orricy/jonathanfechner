<!DOCTYPE html>
<html>
<head>
	<title>Jonathan Fechner - accueil</title>
	<!-- Dublin Core -->
	<meta charset="utf-8">
	<meta name="DC.title" content="Jonathan Fechner">
	<meta name="DC.creator" content="Jonathan Fechner">
	<meta name="DC.subject" content="mots clefs" />
	<meta name="DC.description" content="description du site" />
	<meta name="DC.publisher" content="Auteur">
	<meta name="DC.contributor" content="Contributeur">
	<meta name="DC.date" content="date de création">
	<meta name="DC.type" content="type de site">
	<meta name="DC.format" content="website">
	<meta name="DC.identifier" content="url du site">
	<meta name="DC.language" content="fr-FR">
	<meta name="DC.coverage" content="World">
	<meta name="DC.rights" content="&copy; nom de l'entreprise ou de l'auteur">
	<!-- END Dublin Core -->
	<!-- Referencement -->
	<meta name="description" content="description du site">
	<meta name="keywords" content="mots clefs">
	<meta name="author" content="auteur">
	<meta name="robots" content="index">
	<meta name="Indentifier-URL" content="url du site">
	<!-- END Référencement -->
	<!-- Open Graph -->
	<meta property="og:title" content="titre du site">
	<meta property="og:type" content="website">
	<meta property="og:url" content="url du site">
	<meta property="og:image" content="url de l'image à afficher">
	<meta property="og:site_name" content="titre du site">
	<meta property="og:description" content="texte de description à afficher sur les
	réseaux sociaux">
	<!-- END Open Graph-->
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php require '_header.php';?>
	<content>
		<div class="container">
			<?php require 'cours-navbar.php'; ?>
			<section class="col-md-10 col-md-offset-1">
				<h2 class="text-center">Livraison &amp; Recettage</h2>
				<article class="row">
					<h3 class="text-center">Recettage de projet web</h3>
					<div class="col-md-5">
						<img src="image/placeholder.png" alt="logo jonathan fechner" title="accueil" class="img-responsive">
					</div>
					<div class="col-md-7">
						<p>Le recettage de projet web permet de verifier la conformité de votre projet, entre ce que vous avez vendu à votre client et ce que vous lui livrez. C'est la mémoire du projet, la recette de votre succès. C'est dans le cahier de recettage que vous expliquez tous les tests fonctionnels qui ont été réalisés et que vous validez point à point la demande du client. C'est pour cela que le recettage se conclut par le fâmeux "bon de livraison" signé par votre client.</p>
					</div>
				</article>
			</section>
		</div>
	</content>
	<?php require '_footer.php';?>
</body>
</html>