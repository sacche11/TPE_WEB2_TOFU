{include file="header.tpl"}

<!-- formulario para editar una serie/pelicula del Catalogo -->

{foreach from=$element item=$elem}

  <h3>Actualizar {$elem->type}:</h3>

  <form action="edit_from_catalogue/{$elem->id_series_and_films}" method="post" class="my-4">
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nombre:</label>
          <input type="text" class="form-control" name="name" value="{$elem->name}" required>
        </div>
        <div class="form-group col-md-4">
          <label>Genero:</label>
          <select name="id_gender" class="form-control">
            <option selected value="{$elem->id_gender}">{$elem->id_gender}</option>
              {foreach from=$allGenre item=$field}
              <option value="{$field->id_gender}">{$field->gender}</option>
              {{/foreach}}
          </select>
        </div>
        <div class="form-group col-md-4">
          <label>Tipo:</label>
          <select name="type" class="form-control">
            <option selected>{$elem->type}</option>
            <option value="Pelicula">Pelicula</option>
            <option value="Serie">Serie</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Sinopsis:</label>
          <input type="text" class="form-control" name="synopsis" value="{$elem->synopsis}" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Duracion:</label>
          <input type="text" class="form-control" name="duration" value="{$elem->duration}" required>
        </div>
          <div class="form-group col-md-6">
          <label for="inputEmail4">Fecha de estreno:</label>
          <input type="date" class="form-control" name="release_year" value="{$elem->release_year}" required>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href='show_home' type='button' class="btn btn-danger">Cancelar</a>
  </form>
{/foreach} 

{include file="footer.tpl"}