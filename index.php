<?php
	
	define('BASE_URL', 'http://localhost/non-lineaire/');

	function url($page) {
		echo BASE_URL.'?page='.$page;
	}

	function active($slug) {
		if( $slug == $_GET['page'] ) {
			echo 'active';
		}
	}

	if( ! isset( $_GET['page'] ) ) {
		$_GET['page'] = 'iterations-trigonometriques';
	}

?><html>
<head>
	<meta charset="utf8">

	<title>Non-Linéaire</title>
	
	<link rel="stylesheet" href="css/style.css">

	<script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full'></script>
</head>
<body class="page-<?php echo $_GET['page']; ?>">
	<div class="container">
		<div class="title">
			<h1>Non-Linéaire</h1>
		</div>

		<div class="menu">
			<a href="<?php url('iterations-trigonometriques'); ?>" class="<?php active('iterations-trigonometriques'); ?>">Itérations trigonométriques</a>
			<a href="<?php url('explorations-complexes'); ?>" class="<?php active('explorations-complexes'); ?>">Explorations complexes</a>
			<a href="<?php url('distributions-aleatoires'); ?>" class="<?php active('distributions-aleatoires'); ?>">Distributions aléatoires ?</a>
		</div>

		<div class="page-container">
			<?php include('pages/'.$_GET['page'].'.php'); ?>
		</div>
	</div> <!-- / .container -->
</body>
</html>