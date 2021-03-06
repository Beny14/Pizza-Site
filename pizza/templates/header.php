<?php
	session_start();
	if ($_SERVER['QUERY_STRING'] == 'noname'){
		unset($_SESSION['name']);
	}
	$name = $_SESSION['name'] ?? 'Guest';
	$gender = $_COOKIE['gender'] ?? 'Unknow';
?>
<head>
	<title>Beny's Pizza</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body class="grey darken-3">
	<nav class="black z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text text-family-1">Beny's Pizza</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
				<li>Hello <?php echo htmlspecialchars($name) ?></li>
				<li>(<?php echo htmlspecialchars($gender) ?>)</li>
        <li><a href="add.php" class="btn brand z-depth-0 button-radius">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>
