<?php
include('include/homeHeader.php');
?>

<h1>Welcome</h1> <br>

<div class="row">
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/newClient.jpg" height="150" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Enregistrer Client</h5>
                <p class="card-text">Partie reservée a l'ajout d'un nouveau client dans la societe</p>
                <a href="formulaire_clients.php" class="btn btn-primary"><i class="fa fa-arrow-right"> Let's Go </i></a>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/newProd.png" height="150" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Enregistrer un produits</h5>
                <p class="card-text">Partie reservée a l'ajout d'un nouveau produit</p>
                <a href="formulaire_produit.php" class="btn btn-primary"><i class="fa fa-arrow-right"> Let's Go </i></a>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/vente.jpg" height="150" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Enregistrer une vente</h5>
                <p class="card-text">Partie reservée a l'ajout d'une nouvelle vente</p>
                <a href="ventes.php" class="btn btn-primary"><i class="fa fa-arrow-right"> Let's Go </i></a>
            </div>
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/viewClint.png" height="200" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Afficher les clients</h5>
                <p class="card-text">Partie reservée a l'affichage des clients de la société</p>
                <a href="affichage_clients.php" class="btn btn-primary"><i class="fa fa-arrow-right"> Let's Go </i></a>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/viewProd.jpg" height="200" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Afficher les produits</h5>
                <p class="card-text">Partie reservée a l'affichage des produits en stock</p>
                <a href="affichage_Produits.php" class="btn btn-primary"><i class="fa fa-arrow-right"> Let's Go </i></a>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/admin.jpg" height="200" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Administrateur</h5>
                <p class="card-text">Partie reservée a l'affichage des ventes effectuées dans la société</p>
                <a href="admin.php" class="btn btn-primary"><i class="fa fa-arrow-right"> Let's Go </i></a>
            </div>
        </div>
    </div>
</div>

<?php
include('include/footer.php');
?>