<?php
session_start();
include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Formulaire de saisie</title>
</head>
<body>
  <h2>Formulaire d'inscription - informations Personnelles</h2>
  <form action="page1.php" method="post">
    <table>
      <tr>
        <td>Prénom:</td>
        <td><input type="text" name="prenom" /></td>
      </tr>
      <tr>
        <td>Nom:</td>
        <td><input type="text" name="nom" /></td>
      </tr>
      <tr>
        <td>Num CIN:</td>
        <td><input type="text" name="numCIN" /></td>
      </tr>
      <tr>
        <td>Num CNE:</td>
        <td><input type="text" name="numCNE" /></td>
      </tr>
    </table>
    <input type="reset" name="reset" value="Annulez" />
    <input type="submit" name="formInfo" value="Envoyez" />
  </form>
</body>
</html>
