<form method="post">
    <label for="type">Modifier véhicule</label>
    <input name="type" type="text" value="<?= $typeObj->type ?? '' ?>" required>
    <button type="submit">Envoi</button>
    <p><?=$errors['type'] ?? ''?></p>
</form>