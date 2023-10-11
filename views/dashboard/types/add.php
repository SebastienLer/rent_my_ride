<form method="post">
    <label for="type">Ajout catégorie</label>
    <input name="type" type="text" required>
    <button type="submit">Envoi</button>
    <p><?=$errors['type'] ?? ''?></p>
</form>