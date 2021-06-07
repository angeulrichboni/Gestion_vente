<?php
require_once('include/connect.php');

session_start();
// log_in();

$i = 1;
$resultats = $db->query("SELECT * FROM vente");

?>
<?php
include('include/header.php');
?>
<h1>Page Administrateur</h1>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom Client</th>
      <th scope="col">Marque produit</th>
      <th scope="col">Date</th>
      <th scope="col">modifier</th>
      <th scope="col">supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($resultat = $resultats->fetch()) : ?>
      <tr>
        <th><?php echo $i++; ?></th>
        <th>
          <?php
          $req = $db->prepare('SELECT * FROM clients WHERE numero = :num');
          $req->execute(['num' => $resultat['numero_client']]);
          $res = $req->fetch();
          ?>
          <?= $res['nom']; ?>
        </th>
        <th>
          <?php
          $req = $db->prepare('SELECT * FROM produits WHERE id_produit = :num');
          $req->execute(['num' => $resultat['reference_produit']]);
          $res = $req->fetch();
          ?>
          <?= $res['marque']; ?>
        </th>
        <th> <?= $resultat['date_vente']; ?> </th>
        <th> <a href=""> <i class="fa fa-pencil"></i> </a> </th>
        <th> <a href=""> <i class="fa fa-trash"></i> </a> </th>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<?php
include('include/footer.php');
?>