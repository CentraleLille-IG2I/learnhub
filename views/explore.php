<? $auth->requiresAuth();
$GLOBALS['active_view']="explore";
include_once $GLOBALS['config']['paths']['libs'].'views.funcs.php';
$matiere_focused = 1;
if(isset($_GET['m']) && $_GET['m'] != "") {
	$matiere_focused=$_GET['m'];
} else {
	$matieres = getMatieres($_SESSION['promo']);
	if ($matieres != NULL) {
		$matiere_focused = $matieres[0]['id_matiere'];
	}
	else {
		$matiere_focused = -1;
	}
}
if(isset($_GET['c']) && $_GET['c'] != "") {
	$chapitre_focused=$_GET['c'];
}
else {
	$chapitres = getChapitres($matiere_focused);
	if($chapitres != NULL)
		$chapitre_focused = $chapitres[0]['id_chapitre'];
	else
		$chapitre_focused = -1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Explorer</title>

	<link rel="stylesheet" href="ressources/css/navbar.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/f51a5e5d23.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="ressources/css/style.css">
</head>
<body>
	<? include_once "layouts/navbar.php" ?>
	<div class="container" id="explore-view">
		<div class="row">
			<? 
			if(matieres_line_view($_SESSION['promo'], $matiere_focused)) {
				echo "<div class='col-md-10'>";
				if(chapitres_list_view($matiere_focused, $chapitre_focused))
					documents_table_view($chapitre_focused);
				echo "</div>";
			}

			?>
		</div>
	</div>
</body>
</html>