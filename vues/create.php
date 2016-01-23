<form action="index.php?action=createPost" method="POST">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" >
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea id="description" name="description" placeholder="Description" class="form-control" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Créer</button>
</form>