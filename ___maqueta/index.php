<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>SAZULAB</title>
	<meta name="description" content="">
	<meta name="title" content="">
	<meta name="google-site-verification" content="">
	<meta name="Copyright" content="">
	<meta name="DC.title" content="">
	<meta name="DC.creator" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	<link rel="icon" type="image/ico" sizes="48x48" href="_/images/favicon.png">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="_/styles/main.css">
</head>

<body>


	<div id="loader"></div>


	<main>
		<?php include 'header.php'; ?>
		<div class="page transition">
			<?php
			if (isset($_GET['seccion'])) {
				if ($_GET['seccion'] == 'home') {
					include 'home.php';
				} elseif ($_GET['seccion'] == 'estrategia') {
					include 'estrategia.php';
				} elseif ($_GET['seccion'] == 'branding') {
					include 'branding.php';
				} elseif ($_GET['seccion'] == 'bienvenida') {
					include 'bienvenida.php';
				} elseif ($_GET['seccion'] == 'contenido') {
					include 'contenido.php';
				} elseif ($_GET['seccion'] == 'detalle') {
					include 'detalle.php';
				} elseif ($_GET['seccion'] == 'contacto') {
					include 'contacto.php';
				} elseif ($_GET['seccion'] == 'caseccd') {
					include 'caseccd.php';
				} elseif ($_GET['seccion'] == 'casetekniplex') {
					include 'casetekniplex.php';
				} else {
					include 'home.php';
				}
			} else {
				include 'home.php';
			}
			?>
			<?php include('footer.php'); ?>
		</div>
	</main>
	<?php include('scripts.php'); ?>

	<script id="__bs_script__">
		//<![CDATA[
		document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.12'><\/script>".replace("HOST", location.hostname));
		//]]>
	</script>

</body>

</html>