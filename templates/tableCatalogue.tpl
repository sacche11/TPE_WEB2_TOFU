
<!-- tabla de series/peliculas -->

<h3>Catalogo series/peliculas:</h3>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Genero</th>
        <th scope="col">Tipo</th>
        <th scope="col">Sinopsis</th>
        <th scope="col">Duracion</th>
        <th scope="col">Estreno</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$catalogue item=$elem}
          <tr>
            <td>{$elem->name}</td> 
            <td>{$elem->gender}</td> 
            <td>{$elem->type}</td>
            <td>{$elem->synopsis|truncate:60}</td> 
            <td>{$elem->duration}</td>
            <td>{$elem->release_year}</td>
            {if !$logged}  
              <div class="ml-auto">
                <td>
                  <a href='delete_from_catalogue/{$elem->id_series_and_films}' type='button' class='btn btn-danger'>Borrar</a>
                  <a href='show_form_edit_from_catalogue/{$elem->id_series_and_films}' type='button' class="btn btn-warning">Editar</a>
                </td>
              </div>
            {/if}
          </tr>
      {/foreach}
    </tbody>
  </table>

