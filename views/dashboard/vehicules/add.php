<form method="post">
    <label for="brand">Marque du véhicule</label>
    <input name="brand" id="brand" type="text" required>
    <p><?=$errors['brand'] ?? ''?></p>
    <label for="model">Modèle du véhicule</label>
    <input name="model" id="model" type="text" required>
    <p><?=$errors['model'] ?? ''?></p>
    <label for="registration">Immatriculation</label>
    <input name="registration" id="registration"type="text" required>
    <p><?=$errors['registration'] ?? ''?></p>
    <label for="mileage">Kilomètrage du véhicule</label>
    <input name="mileage" id="mileage" type="text" required>
    <p><?=$errors['mileage'] ?? ''?></p>
    <label for="picture">Image du véhicule</label>
    <input name="picture" id="picture" type="file">
    <p><?=$errors['picture'] ?? ''?></p>
    <select name="type" id="id_type">
        <option value="">-Selectionner une catégorie-</option>
        <?php 
        foreach($types as $type){?>
            <option value="<?=$type->id_types ?>"><?=$type->type ?></option>

        <?php }
        ?>
    </select>
    <button type="submit">Envoi</button>
</form>