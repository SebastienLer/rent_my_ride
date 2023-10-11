<table class="text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Catégorie</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Registration</th>
            <th>Kilomètrage</th>
            <th>Images</th>
            <th>Crée le :</th>
            <th>Modifié le :</th>
            <th>Supprimé le :</th>
        </tr>
    </thead>
    <tbody>
    <?php 
foreach ($vehicles as $vehicle) {
    ?>  <tr>
            <td><?= $vehicle->id_vehicles?></td>
            <td><?= $type ?></td>
            <td><?= $vehicle->brand?></td>
            <td><?= $vehicle->model?></td>
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