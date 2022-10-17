<!-- formulario genero -->

<h3>Agregar un Genero: </h3>

<form action="add_genre" method="POST" class="my-4">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Genero:</label>
      <input type="text" class="form-control" name="genre" required>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Agregar</button>
  <a href='show_home' type='button' class="btn btn-danger">Cancelar</a>
</form>