<div class="temario_container">
    <h2 class="margin-bottom">Mantenimiento Post</h2>
    <div class="ui grid" style="margin-bottom: 2em;">
        <div class="ui link">
            <div class="card card-post blog" style="width:100%">
                <button class="positive ui button">
                    <i class="icon-file-text-o"></i>
                    Nuevo Post
                </button>
                <!--</br>-->
                <?php /*echo 'document_root -> '.$_SERVER['DOCUMENT_ROOT'];
                echo '</br>server_name -> '.$_SERVER['SERVER_NAME'];
                echo '</br>getcwd -> '.getcwd()*/ ?>
                <!--</br>-->
                <?php
                /*$padre = dirname(__DIR__);
                echo 'DIR -> '.$padre;
                echo '</br>DIR padre -> '.dirname($padre);*/
                ?>
                <table class="ui celled table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Fecha</th>
                        <th>Descripcion Corta</th>
                        <th>Categoría</th>
                        <th>Posteado por</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($datos as $post): ?>
                        <tr>
                            <td><?php echo $post['id_post']; ?></td>
                            <td><?php echo $post['titulo_post']; ?></td>
                            <td><?php echo $post['fechareg_post'] ?></td>
                            <td><?php echo $post['subtitulo_post'] ?></td>
                            <td><?php echo $post['nombre_categoriapost'] ?></td>
                            <td><?php echo $post['nom_usuario'] . ' ' . $post['ape_usuario'] ?></td>
                            <td>
                                <i class="trash alternate icon btnDeletePost"
                                   data-postId="<?php echo $post['id_post'] ?>"
                                   style="color: red;"></i>
                                <i class="icon edit button" data-postId="<?php echo $post['id_post'] ?>"
                                   style="color: forestgreen;"></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--modal-->
<div class="ui modal">
    <i class="close icon"></i>
    <div class="header">
        Agregue Temario
    </div>
    <div class="image content">
        <div class="ui medium image">

        </div>
        <div class="description">
            <div class="ui header">Tema</div>
            <div class="ui input">
                <input type="text" class="txtNameTemario" placeholder="Ingrese tema">
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
            Cancelar
        </div>
        <div class="ui positive right labeled icon button">
            Agregar
            <i class="checkmark icon btnSaveTemario"></i>
        </div>
    </div>
</div>
