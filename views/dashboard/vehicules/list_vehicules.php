<table class="table text-center">
    <thead>
        <tr>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=type">Catégorie <i class="fa-solid fa-caret-up"></i></th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=brand">Marque <i class="fa-solid fa-caret-up"></i></a></th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=model">Modèle <i class="fa-solid fa-caret-up"></i></th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=registration">Registration<i class="fa-solid fa-caret-up"></th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=mileage">Kilomètrage<i class="fa-solid fa-caret-up"></th>
            <th>Images</th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=created_at">Crée le :<i class="fa-solid fa-caret-up"></th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=update_at">Modifié le :<i class="fa-solid fa-caret-up"></th>
            <th>Modifier</th>
            <th>Archiver</th>
        </tr>
    </thead>
    <tbody>
    <?php 
foreach ($vehicles as $vehicle) {
    ?>  <tr>
            <td><?= $vehicle->type ?></td>
            <td><?= $vehicle->brand?></td>
            <td><?= $vehicle->model?></td>
            <td><?= $vehicle->registration?></td>
            <td><?= $vehicle->mileage?></td>
            <td> <?php if(isset($vehicle->picture)){?>
                <a href="/public/uploads/vehicles/<?= $vehicle->picture ?>" target="_blank">
                    <i class="fa-solid fa-image"></i>
                </a><?php } ?>
            </td>
            <td><?= $vehicle->created_at?></td>
            <td><?= $vehicle->updated_at?></td> 
            <td>
                <a href="/controllers/dashboard/vehicules/update_vehicules-ctrl.php?id_vehicles=<?= $vehicle->id_vehicles ?>">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </a>
            </td>
            <td>
                <a href="/controllers/dashboard/vehicules/archived_vehicules-ctrl.php?id_vehicles=<?= $vehicle->id_vehicles ?>">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
    <?php
    }
?>

    </tbody>

</table>
<p><?php
    if($archived === '1'){
        echo 'L\'enregistrement a été archivé';
    }else if($archived === '0'){
        echo 'L\'enregistrement n\'a pas été archivé';
    }
    ?></p>

    
<a class="border rounded-3 p-1 white" href="/controllers/dashboard/vehicules/add-ctrl.php">Ajouter véhicule</a>
<h2 class="text-center border rounded-3 p-1 white mt-3">ARCHIVE</h2>

<table class="table text-center">
    <thead>
        <tr>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=type">Catégorie <i class="fa-solid fa-caret-up"></i></th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=brand">Marque <i class="fa-solid fa-caret-up"></i></a></th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=model">Modèle <i class="fa-solid fa-caret-up"></i></th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=registration">Registration</th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=mileage">Kilomètrage</th>
            <th>Images</th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=created_at">Crée le :<i class="fa-solid fa-caret-up"></th>
            <th><a href="?order=<?= $order== 'ASC' ? 'DESC' : 'ASC' ?>&column=deleted_at">Archivé le :<i class="fa-solid fa-caret-up"></th>
            <th>Restaurer</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
    <?php 
foreach ($vehiclesArchive as $vehicle) {
    ?>  <tr>
            <td><?= $vehicle->type ?></td>
            <td><?= $vehicle->brand?></td>
            <td><?= $vehicle->model?></td>
            <td><?= $vehicle->registration?></td>
            <td><?= $vehicle->mileage?></td>
            <td> <?php if(isset($vehicle->picture)){?>
                <a href="../../../public/uploads/vehicles/<?= $vehicle->picture ?>" target="_blank">
                    <i class="fa-solid fa-image"></i>
                </a><?php } ?></td>
            <td><?= $vehicle->created_at?></td>
            <td><?= $vehicle->deleted_at?></td>
            <td>
                <a href="/controllers/dashboard/vehicules/restore-ctrl.php?id_vehicles=<?= $vehicle->id_vehicles ?>">
                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                </a>
            </td>
            <td>
                <a href="/controllers/dashboard/vehicules/delete-ctrl.php?id_vehicles=<?= $vehicle->id_vehicles ?>">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
    <?php
    }
?>

    </tbody>

</table>
<p><?php 
    if($restore === '1'){
        echo 'L\'enregistrement a été restauré';
    }else if($restore === '0'){
        echo 'L\'enregistrement n\'a pas été restauré';
    }
    if($delete === '1'){
        echo 'L\'enregistrement a été supprimé';
    }else if($delete === '0'){
        echo 'L\'enregistrement n\'a pas été supprimé';
    }
    'L\'enregistrement a été supprimé'
?></p>

