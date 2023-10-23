<form method="post" enctype="multipart/form-data">
    <div class="form-group" >
        <label class="border rounded-3 p-1 white mt-3" for="id_type">Catégorie</label>
        <select class="form-control mt-3" name="id_type" id="id_type" required>
            <option value="" selected disabled>-Selectionner une catégorie*-</option>
            <?php 
            foreach($types as $type){?>
                <option value="<?=$type->id_types ?>"><?=$type->type ?></option>

            <?php }
            ?>
        </select>
        <label class="border rounded-3 p-1 white mt-3" for="brand">Marque du véhicule</label>
        <input class="form-control mt-3" name="brand" id="brand" type="text" placeholder="Marque*" required>
        <p><?=$errors['brand'] ?? ''?></p>
        <label class="border rounded-3 p-1 white" for="model">Modèle du véhicule</label>
        <input class="form-control mt-3" name="model" id="model" type="text" placeholder="Modèle*" required>
        <p><?=$errors['model'] ?? ''?></p>
        <label class="border rounded-3 p-1 white" for="registration">Immatriculation</label>
        <input class="form-control mt-3" name="registration" id="registration" type="text" placeholder="Immatriculation*" required>
        <p><?=$errors['registration'] ?? ''?></p>
        <label class="border rounded-3 p-1 white" for="mileage">Kilomètrage du véhicule</label>
        <input class="form-control mt-3" name="mileage" id="mileage" type="text" placeholder="Kilomètrage*" required>
        <p><?=$errors['mileage'] ?? ''?></p>
        <label class="border rounded-3 p-1 white" for="picture">Image du véhicule</label>
        <input class="form-control mt-3" name="picture" id="picture" type="file">
        <p><?=$errors['picture'] ?? ''?></p>
    </div>
    <button class="border rounded-3 p-1 white mt-3" type="submit">Envoi</button>
</form>