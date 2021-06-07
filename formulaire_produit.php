<?php

session_start();

if (!empty($_POST)) {
  $errors =  array();
  require_once 'include/connect.php';

  if (empty($_POST['reference'])) {
    $errors['reference'] = "La reference du produit est obligatoire";
  }else{
    $req = $db->prepare("SELECT id_produit FROM produits WHERE reference = ?");
    $req->execute([$_POST['reference']]);
    $produit = $req->fetch();
    if ($produit) {
      $errors['reference'] = "Cette reference existe deja";
    } 
  }

  if (empty($_POST['marque'])) {
    $errors['marque'] = "La marque du produit est obligatoire";
  }

  if (empty($_POST['prix_ht'])) {
    $errors['prix_ht'] = "Le prix du produit est obligatoire";
  }

  if (empty($errors)) {
    $req = $db->prepare("INSERT INTO produits SET reference=?, marque=?, prix_ht=?");
    $req->execute([$_POST['reference'], $_POST['marque'], $_POST['prix_ht']]);

    $_SESSION['message'] = "Produit enregistre avec success";
    header('Location:index.php');
  }
}
?>

<?php
include('include/header.php');
?>
<h1>Enregistrement du produit</h1>

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

<form method="POST" action="">
  <div class="form-group">
    <label for="">Reference</label>
    <input type="text" name="reference" class="form-control" placeholder="Entrer la reference du produit">
  </div>
  <div class="form-group">
    <label for="">Marque</label>
    <input type="text" name="marque" class="form-control" placeholder="Entrer la marque du produit">
  </div>
  <div class="form-group">
    <label for="">Prix HT</label>
    <input type="number" name="prix_ht" class="form-control" placeholder="Entrer le prix du produit">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Valider</button>
    <button type="reset" class="btn btn-danger">Reinitialiser</button>
  </div>
</form>
<?php
include('include/footer.php');
?>