<?php
session_start();
require_once 'include/connect.php';

$result_ventes = $db->query("SELECT * FROM clients");
$result_prod = $db->query("SELECT * FROM produits");

$errors = array();

$client = $_POST['vente_client'];
$produit = $_POST['vente_prod'];

if (!empty($_POST)) {
    if (!empty($_POST['vente_client']) && !empty($_POST['vente_prod'])) {
        $req = $db->query("INSERT INTO vente( reference_produit, numero_client) VALUES('$produit','$client')");
        header('Location:index.php');
    }
}

?>

<?php
include('include/header.php');
?>

<h1>Mes ventes</h1>

<form action="" method="POST">
    <div class="form-group">
        <label for="">Clients</label>
        <select name="vente_client" id="" class="form-control">
            <option selected value="">Choisir un client</option>
            <?php while ($vente = $result_ventes->fetch()) : ?>
                <option value="<?= $vente['numero'] ?>"><?= $vente['nom'] ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">ventes</label>
        <select name="vente_prod" id="" class="form-control">
        <option selected value="">Choisir un produit</option>
            <?php while ($prod = $result_prod->fetch()) : ?>
                <option value="<?= $prod['id_produit'] ?>"><?= $prod['marque'] ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Valider</button>
        <button type="reset" class="btn btn-danger">Reinitialiser</button>
    </div>
</form>