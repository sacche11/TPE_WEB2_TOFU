<!-- formulario Catalogo -->

<h3>Agregar una serie/pelicula: </h3>

<form action="add_catalogue" method="POST" class="my-4">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre:</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group col-md-4">
      <label>Genero</label>
      <select name="id_gender" class="form-control">
        <option selected>Eleguir genero...</option>
        <option value="1">Zombies</option>
        <option value="2">Terror</option>
        <option value="3">Drama</option>
        <option value="4">Aventura</option>
        <option value="5">Ciencia Ficcion</option>
        <option value="6">Thriller</option>
        <option value="7">Romance</option>
        <option value="8">Misterio</option>
        <option value="9">Guerra</option>
        <option value="10">Accion</option>
        <option value="11">Policial</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Tipo:</label>
      <select name="type" class="form-control">
        <option selected>Eleguir tipo...</option>
        <option value="Pelicula">Pelicula</option>
        <option value="Serie">Serie</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Sinopsis:</label>
      <input type="text" class="form-control" name="synopsis" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Duracion:</label>
      <input type="text" class="form-control" name="duration" required>
    </div>
      <div class="form-group col-md-6">
      <label for="inputEmail4">Fecha de estreno:</label>
      <input type="date" class="form-control" name="release_year" required>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Agregar</button>
  <a href='show_home' type='button' class="btn btn-danger">Cancelar</a>
</form>