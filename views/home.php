<h2 class="text-center p-3">Nos Impossible Véhicules</h2>
<div class="row justify-content-around">
    <?php
    foreach ($vehicles as $vehicle) { ?>
        <div class="card mt-3 p-0 col-md-3 m-1">
            <div class="col-12 p-0">
                <img class="card-img-top" src="/public/uploads/vehicles/<?= $vehicle->picture ?>" alt="" />
            </div>
            <div class="col-12 pt-2">
                <h4>Catégorie : <?=$vehicle->type ?></h4>
                <h5 class="card-title mb-5 mt-4"><?=$vehicle->brand.' '.$vehicle->model?></h5>
            </div>
            <div class="card-body col-12">
                <div class="row justify-content-end">
                    <div class="col-12">
                        <p>Kilomètrage : <?=$vehicle->mileage ?></p>
                    </div>
                    <div class="col-12">
                        <p>Immatriculation : <?=$vehicle->registration ?> </p>
                    </div>
                    <div class="buttonCard mt-5 col-12 d-flex justify-content-end">
                        <a href="" class="btn btn-primary" target="blank">Accèder au véhicule</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    ?>
</div>