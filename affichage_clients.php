<?php
session_start();
require_once 'include/connect.php';

$sql = "SELECT * FROM clients";
$req = $db->prepare($sql);
$req->execute();
$result = $req->fetchAll();
?>

<?php
include('include/header.php');
?>
<h1>Affichage des clients</h1>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Numero client</th>
            <th scope="col">Nom</th>
            <th scope="col">Addresse</th>
            <th scope="col">Numero de telephone</th>
            <th scope="col">Modifier</th>
            <th scope="col">supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $client) :; ?>
            <tr>
                <th scope="row"> <?= $client['numero']; ?> </th>
                <th> <?= $client['nom']; ?> </th>
                <th> <?= $client['addresse']; ?> </th>
                <th> <?= $client['telephone']; ?> </th>
                <th><a href="editClient.php?id=<?= $client['numero']; ?>"><i class="fa fa-pencil"></i></a></th>
        <th><a href="delete.php?id=<?= $client['numero']; ?>"><i class="fa fa-trash"></i></a></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include('include/footer.php');
?>