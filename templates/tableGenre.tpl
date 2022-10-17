<!-- tabla de generos -->

<h3>Lista de Generos:</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Genero</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$genre item=$elem}
        <tr>
            <td>{$elem->gender}</td>
            {if !$logged} 
              <div class="ml-auto">
                <td>
                  <a href='delete_genre/{$elem->id_gender}' type='button' class='btn btn-danger'>Borrar</a>
                  <a href='show_form_edit_genre/{$elem->id_gender}' type='button' class="btn btn-warning">Editar</a>
                </td>
              </div>
            {/if}
        </tr>
    {/foreach}
  </tbody>
</table>
