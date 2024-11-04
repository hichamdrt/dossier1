<?php
session_start(); 
include('navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Informations personnelles</title>
</head>
<body>

<?php
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['numCIN']) && isset($_POST['numCNE'])) {
  $_SESSION['prenom'] = $_POST['prenom'];
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['numCIN'] = $_POST['numCIN'];
  $_SESSION['numCNE'] = $_POST['numCNE'];
}

if (isset($_SESSION['prenom']) && isset($_SESSION['nom']) && isset($_SESSION['numCIN']) && isset($_SESSION['numCNE'])) {
  echo "<h2>Informations personnelles:</h2>";
  echo "<p>" . $_SESSION['prenom'] . " " . $_SESSION['nom'] . ", on connaît votre numéro de carte : " . $_SESSION['numCIN'] . " et votre numéro national d'étudiant : " . $_SESSION['numCNE'] . ".</p>";
} else {
  echo "<p>Veuillez remplir tous les champs du formulaire sur la page d'accueil.</p>";
}
?>

</body>
</html>
