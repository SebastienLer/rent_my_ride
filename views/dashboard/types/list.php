<table class="table text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Type de véhicule</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
    <?php 
foreach ($types as $type) {
    ?>  <tr>
            <td><?= $type->id_types?></td>
            <td><?= $type->type?> </td>
            <td>
                <a href="/controllers/dashboard/types/update_types-ctrl.php?id_types=<?= $type->id_types ?>">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </a>
            </td>
            <td>
                <a href="/controllers/dashboard/types/delete_types-ctrl.php?id_types=<?= $type->id_types ?>">
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


<a class="border rounded-3 p-1 white" href="/controllers/dashboard/types/add-ctrl.php">Ajouter catégorie</a>