<?php
session_start();
require_once 'include/connect.php';

$i = 1;

$sql = "SELECT * FROM produits";
$req = $db->prepare($sql);
$req->execute();
$result = $req->fetchAll();
?>

<?php
include('include/header.php');
?>
<h1>Affichage des produits</h1>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Reference</th>
            <th scope="col">Marque</th>
            <th scope="col">Prix HTT</th>
            <th scope="col">Modifier</th>
            <th scope="col">supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $produit) :; ?>
            <tr>
                <th scope="row"> <?= $i++; ?> </th>
                <th> <?= $produit['reference']; ?> </th>
                <th> <?= $produit['marque']; ?> </th>
                <th> <?= $produit['prix_ht']; ?> </th>
                <th><a href="editProduit.php?id=<?= $produit['numero']; ?>"><i class="fa fa-pencil"></i></a></th>
        <th><a href="deleteProd.php?id=<?= $produit['numero']; ?>"><i class="fa fa-trash"></i></a></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include('include/footer.php');
?>