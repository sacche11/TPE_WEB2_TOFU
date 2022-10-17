{include file="header.tpl"}

<!-- formulario para editar el genero -->

<h3>Actualizar Genero:</h3>

<h5>*Puede editar la tipografia o seleccionar de la lista.</h5>

{foreach from=$genre item=$elem}
    <form action="edit_genre/{$elem->id_gender}" method="POST" class="my-4">
        <div class="form-group col-md-4">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Editar genero:</label>
                <input type="text" class="form-control" name="gender" value="{$elem->gender}">
                </div>
            </div>
            <label for="inputEmail4">Seleccionar de la lista:</label>
            {foreach from=$allGenre item=$field}
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="gender" value="{$field->gender}" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">{$field->gender}</label>
                </div>
            {/foreach}
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href='show_home' type='button' class="btn btn-danger">Cancelar</a>
    </form>
{/foreach}

{include file="footer.tpl"}