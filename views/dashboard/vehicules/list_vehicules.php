<table class="text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Catégorie <i class="fa-solid fa-caret-up"></i></th>
            <th>Marque <i class="fa-solid fa-caret-up"></i></th>
            <th>Modèle <i class="fa-solid fa-caret-up"></i></th>
            <th>Registration</th>
            <th>Kilomètrage</th>
            <th>Images</th>
            <th>Crée le :</th>
            <th>Modifié le :</th>
            <th>Supprimé le :</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
    <?php 
foreach ($vehicles as $vehicle) {
    $type = Type::get($vehicle->id_types);
    ?>  <tr>
            <td><?= $vehicle->id_vehicles?></td>
            <td><?= $type->type ?></td>
            <td><?= $vehicle->brand?></td>
            <td><?= $vehicle->model?></td>
            <td><?= $vehicle->registration?></td>
            <td><?= $vehicle->mileage?></td>
            <td><?= $vehicle->picture ?></td>
            <td><?= $vehicle->created_at?></td>
            <td><?= $vehicle->updated_at?></td>
            <td><?= $vehicle->deleted_at?></td>
            <td>
                <a href="/controllers/dashboard/vehicules/update_vehicles-ctrl.php?id_vehicles=<?= $vehicle->id_vehicles ?>">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </a>
            </td>
            <td>
                <a href="/controllers/dashboard/vehicules/delete_vehicles-ctrl.php?id_vehicles=<?= $vehicle->id_vehicles ?>">
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
    if($delete === '1'){
        echo 'L\'enregistrement a été supprimé';
    }else if($delete === '0'){
        echo 'L\'enregistrement n\'a pas été supprimé';
    }
?></p>


<a href="/controllers/dashboard/vehicules/add-ctrl.php">Ajouter véhicule</a>