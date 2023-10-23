<div class="container-fluid">
    <h2 class="text-center p-3">Nos Impossible Véhicules</h2>
    <div class="row justify-content-around">
        <div class="col-8 card mt-3 p-0 m-1">
            <div class="col-12 p-0">
                <img class="card-img-top" id="choiceImg" src="/public/uploads/vehicles/<?= $vehicle->picture ?>" alt="<?= $vehicle->picture ?>">
            </div>
            <div class="col-12 pt-2">
                <h4 class="ps-2">Catégorie : <?= $vehicle->type ?></h4>
                <h5 class="ps-2 card-title mb-5 mt-4">Marque : <?= $vehicle->brand ?></h5>
                <h5 class="ps-2 card-title mb-5 mt-4">Modèle : <?= $vehicle->model ?></h5>
                <h5 class="ps-2 card-title mb-5 mt-4">Kilomètrage : <?= $vehicle->mileage ?></h5>
                <h5 class="ps-2 card-title mb-5 mt-4">Immatriculation : <?= $vehicle->registration ?></h5>
            </div>
            <div class="buttonCard mt-5 col-12 d-flex justify-content-end p-3">
                <a href="rent-ctrl.php?id=<?= $vehicle->id_vehicles ?>" class="btn btn-primary" target="blank">Louer ce véhicule</a>
            </div>
        </div>
        <div class="buttonCard mt-5 col-12 d-flex justify-content-start p-3">
            <a href="home-ctrl.php" class="btn btn-primary">Retour à l'accueil</a>
        </div>
    </div>
</div>