<form method="post">
    <div class="form-group">
        <label class="border rounded-3 p-1 white" for="type">Ajout catégorie</label>
        <input class="form-control mt-3" name="type" type="text" required>
        <p><?= $errors['type'] ?? '' ?></p>
    </div>
    <button class="border rounded-3 p-1 white" type="submit">Envoi</button>
</form>