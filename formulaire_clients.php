<?php

session_start();

if (!empty($_POST)) {
  $errors =  array();

  if (empty($_POST['nom'])) {
    $errors['nom'] = "Le nom est obligatoire";
  }

  if (empty($_POST['addresse'])) {
    $errors['addresse'] = "L'addresse est obligatoire";
  }

  if (empty($_POST['telephone'])) {
    $errors['telephone'] = "Le numero de telephone est obligatoire";
  }

  if (empty($errors)) {
    require_once 'include/connect.php';
    $req = $db->prepare("INSERT INTO clients SET nom=?, addresse=?, telephone=?");
    $req->execute([$_POST['nom'], $_POST['addresse'], $_POST['telephone']]);

    $_SESSION['message'] = "Client enregistre avec success";
    header('Location:index.php');
  }
}
?>
<?php
include('include/header.php');
?>

<h1>Enregistrement du Client</h1>

<?php if (!empty($errors)) :; ?>
  <div class="alert alert-danger">
    <p> Vous n'avez pas remplir correctement le formulaire </p>
    <ul>
      <?php foreach ($errors as $error) :; ?>
        <li style="list-style: square;"><?= $error; ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>


<form action="" method="POST">
  <div class="form-group">
    <label for="">Nom</label>
    <input type="text" name="nom" class="form-control" placeholder="Entrer le nom du client">
  </div>
  <div class="form-group">
    <label for="">Addresse</label>
    <input type="text" name="addresse" class="form-control" placeholder="Entrer l'addresse du client">
  </div>
  <div class="form-group">
    <label for="">Numero de telephone</label>
    <input type="number" name="telephone" class="form-control" placeholder="Entrer le contact du client">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Valider</button>
    <button type="reset" class="btn btn-danger">Reinitialiser</button>
  </div>
</form>

<?php
include('include/footer.php');
?>