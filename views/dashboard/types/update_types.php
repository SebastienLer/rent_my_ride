<form method="post">
    <label for="type">Modifier catégorie</label>
    <input name="type" id="type" type="text" value="<?= $typeObj->type ?? '' ?>" required>
    <button type="submit">Envoi</button>
    <p><?=$errors['type'] ?? ''?></p>
</form>