<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Administrar facturas');
?>
<div class="padd-15">
    <div class="row">
        <!-- Formulario de búsqueda -->
        <form method="post" id="search-form" autocomplete="off">
            <div class="input-field col s6 m4">
                <i class="material-icons prefix">search</i>
                <input id="search" type="text" name="search" />
                <label for="search">Buscador</label>
            </div>
            <div class="input-field col s6 m4">
                <button type="submit" class="btn waves-effect green tooltipped" data-tooltip="Buscar"><i class="material-icons">check_circle</i></button>
            </div>
        </form>
        <div class="input-field center-align col s12 m4">
            <!-- Enlace para abrir caja de dialogo (modal) al momento de crear un nuevo registro -->
            <a href="#" onclick="openCreateModal()" class="btn waves-effect indigo tooltipped" data-tooltip="Crear"><i class="material-icons">add_circle</i></a>
        </div>
    </div>
    <table class="highlight padd-15 pagination responsive-table">
        <thead>
            <tr>
                <th>ID</th>
                <!--<th>IMAGEN</th>-->
                <th>NOMBRE</th>
                <th>EXISTENCIAS</th>
                <th>PRECIO (US$)</th>
                <th>CATEGORÍA</th>
                <th>ESTADO</th>
                <th>ACCIÓN</th>
                <!--<th><a class="tooltipped waves-effect waves-light modal-trigger" data-position="left" data-tooltip="Agregar Producto" href="#modal2"><i class="material-icons green-text text- accent-4">add_box</i></a></th>
                    <th><a class="tooltipped waves-effect waves-light modal-trigger" data-position="left" data-tooltip="Buscar" href="#modal3"><i class="material-icons white-text text- accent-4">search</i></a></th>-->
            </tr>
        </thead>

        <tbody id="tbody-rows" class="black-text">
        </tbody>
    </table>
    <div class="col-md-12 center text-center">
        <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="myPager"></ul>
    </div>
    <div id="save-modal" class="modal">
        <div class="modal-content">
            <h4 id="modal-title" class="center-align"></h4>
            <!-- Formulario para crear o actualizar un registro -->
            <form method="post" id="save-form" enctype="multipart/form-data" autocomplete="off">
                <!-- Campo oculto para asignar el id del registro al momento de modificar -->
                <input class="hide" type="text" id="id_producto" name="id_producto" />
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">note_add</i>
                        <input id="nombre_producto" type="text" name="nombre_producto" class="validate" required />
                        <label for="nombre_producto">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">shopping_cart</i>
                        <input id="precio_producto" type="number" name="precio_producto" class="validate" max="999.99" min="0.01" step="any" required />
                        <label for="precio_producto">Precio (US$)</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">local_shipping</i>
                        <input id="existencias_producto" type="number" name="existencias_producto" class="validate" min="1" step="any" required />
                        <label for="existencias_producto">Existencias</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">description</i>
                        <input id="descripcion_producto" type="text" name="descripcion_producto" class="validate" required />
                        <label for="descripcion_producto">Descripción</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select id="categoria_producto" name="categoria_producto">
                        </select>
                        <label>Categoría</label>
                    </div>
                    <!--
              	<div class="file-field input-field col s12 m6">
                    <div class="btn waves-effect tooltipped" data-tooltip="Seleccione una imagen de al menos 500x500">
                        <span><i class="material-icons">image</i></span>
                        <input id="archivo_producto" type="file" name="archivo_producto" accept=".gif, .jpg, .png"/>
                    </div>
                    <div class="file-path-wrapper">
                        <input type="text" class="file-path validate" placeholder="Formatos aceptados: gif, jpg y png"/>
                    </div>
                </div>
                -->
                    <div class="col s12 m6">
                        <p>
                            <div class="switch">
                                <span>Estado:</span>
                                <label>
                                    <i class="material-icons">visibility_off</i>
                                    <input id="estado_producto" type="checkbox" name="estado_producto" checked />
                                    <span class="lever"></span>
                                    <i class="material-icons">visibility</i>
                                </label>
                            </div>
                        </p>
                    </div>
                </div>
                <div class="row center-align">
                    <a href="#" class="btn waves-effect grey tooltipped modal-close" data-tooltip="Cancelar"><i class="material-icons">cancel</i></a>
                    <button type="submit" class="btn waves-effect blue tooltipped" data-tooltip="Guardar"><i class="material-icons">save</i></button>
                </div>
            </form>
        </div>
    </div>

    <div id="val-modal" class="modal">
        <div class="modal-content">
            <h4 id="modal-2"></h4>
            <table class="highlight padd-15">
                <!-- Cabeza de la tabla para mostrar los títulos de las columnas -->
                <thead>
                    <tr>
                        <th>VALORACION</th>
                        <th>COMENTARIO</th>
                        <th>CLIENTE</th>
                        <th>ESTADO</th>
                    </tr>
                </thead>
                <!-- Cuerpo de la tabla para mostrar un registro por fila -->
                <tbody id="tbody-details">
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
Dashboard::footerTemplate('productos.js');
?>