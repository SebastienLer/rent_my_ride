<form method="post" enctype="multipart/form-data">
    <label for="id_types" class="border rounded-3 p-1 white">Catégorie</label>
    <select class="form-control mt-3" name="id_type" id="id_type" required>
        <option value="" disabled>-Selectionner une catégorie-</option>
        <?php 
        foreach($types as $type){?>
            <option value="<?=$type->id_types ?>"<?= $type->id_types == $typeSlct ? 'selected' : ''; ?>><?=$type->type ?></option>

        <?php }
        ?>
    </select>
    <label for="brand" class="border rounded-3 p-1 white" >Marque du véhicule</label>
    <input class="form-control mt-3" name="brand" id="brand" type="text" value="<?= $vehicleSlct->brand ?>" required>
    <p><?=$errors['brand'] ?? ''?></p>
    <label for="model" class="border rounded-3 p-1 white" >Modèle du véhicule</label>
    <input class="form-control mt-3" name="model" id="model" type="text" value="<?= $vehicleSlct->model ?>" required>
    <p><?=$errors['model'] ?? ''?></p>
    <label for="registration" class="border rounded-3 p-1 white" >Immatriculation</label>
    <input class="form-control mt-3" name="registration" id="registration"type="text" value="<?= $vehicleSlct->registration ?>" required>
    <p><?=$errors['registration'] ?? ''?></p>
    <label for="mileage" class="border rounded-3 p-1 white" >Kilomètrage du véhicule</label>
    <input class="form-control mt-3" name="mileage" id="mileage" type="text" value="<?= $vehicleSlct->mileage ?>" required>
    <p><?=$errors['mileage'] ?? ''?></p>
    <label for="picture" class="border rounded-3 p-1 white" >Image du véhicule</label>
    <input class="form-control mt-3" name="picture" id="picture" type="file">
    <img src="/public/uploads/vehicles/<?=$pictureName ?>" alt="pas d'image">
    <p><?=$errors['picture'] ?? ''?></p>
    <button class="border rounded-3 p-1 white mt-3"  type="submit">Envoyer modification</button>
</form>