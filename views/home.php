<div class="container-fluid">
    <h2 class="text-center p-3">Nos Impossible Véhicules</h2>
    <form id="searchForm" class="container-fluid" method="get">
        <div class="row justify-content-center">
            <select class="form-select m-3" name="id_types" id="id_types">
                <option value="">-Toutes les catégories-</option>
                <?php
                foreach ($types as $type) { ?>
                    <option value="<?= $type->id_types ?>" <?= $type->id_types == $id_types ? 'selected' : ''; ?>><?= $type->type ?></option>

                <?php }
                ?>
            </select>
            <input class="form-control m-3" type="search" name="search" placeholder="Recherche">
        </div>
    </form>
    <div class="row justify-content-around">
        <?php
        foreach ($vehicles as $vehicle) { ?>
            <div class="col-12 col-sm-5 col-md-3 card mt-3 p-0  m-1">
                <div class="col-12 p-0">
                    <img class="card-img-top h-30" src="/public/uploads/vehicles/<?= $vehicle->picture ?>" alt="<?= $vehicle->picture ?>">
                </div>
                <div class="col-12 pt-2">
                    <h4 class="ps-2">Catégorie : <?= $vehicle->type ?></h4>
                    <h5 class="ps-2 card-title mb-5 mt-4"><?= $vehicle->brand . ' ' . $vehicle->model ?></h5>
                </div>
                <div class="card-body col-12">
                    <div class="row justify-content-end">
                        <div class="col-12">
                            <p>Kilomètrage : <?= $vehicle->mileage ?></p>
                        </div>
                        <div class="col-12">
                            <p>Immatriculation : <?= $vehicle->registration ?> </p>
                        </div>
                        <div class="buttonCard mt-5 col-12 d-flex justify-content-end">
                            <a href="choice-ctrl.php?id=<?= $vehicle->id_vehicles ?>" class="btn btn-primary" target="blank">Accèder au véhicule</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>
    <nav class="d-flex justify-content-center">
        <ul class="pagination">
            <!-- Lien vers la page précédente (n'apparait pas si on se trouve sur la 1ère page) -->
            <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                <a href="?page=<?= $currentPage - 1 ?>&id_types=<?= $id_types ?>&search=<?= $search ?>" class="page-link"><<</a>
            </li>
            <?php for ($page = 1; $page <= $pages; $page++) { ?>
                <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                    <a href="?page=<?= $page ?>&id_types=<?= $id_types ?>&search=<?= $search ?>" class="page-link"><?= $page ?></a>
                </li>
            <?php } ?>
            <!-- Lien vers la page suivante (n'apparait pas si on se trouve sur la dernière page) -->
            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                <a href="?page=<?= $currentPage + 1 ?>&id_types=<?= $id_types ?>&search=<?= $search ?>" class="page-link">>></a>
            </li>
        </ul>
    </nav>
</div>