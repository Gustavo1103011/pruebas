<div class="header">
            <h2 class ="titulo">Listado de libros existentes</h2>
            <a href="/pruebas/CRUD/libros/new"> Agregar libro</a>
            
</div>    
            
<div>
    <form class="form-buscar" action="" method="GET">
        <input class="input-buscar" type="text" name="buscar" placeholder="Buscar">
        <button class="boton-buscar" type="submit">Buscar</button>
    </form>
</div>

        <table >
            <thead >
                <tr>
                <th class="ancho-columna">ID</th>
                <th class="ancho-columna">Nombre del libro</th>
                <th class="ancho-columna">Autor</th>
                <th class="ancho-columna">Editorial</th>
                <th class="ancho-columna">Fecha publicación</th>
                <th class="ancho-columna">Número de edición</th>
                <th class="ancho-columna">Acciones</th>
                </tr>
                <tbody>
                    <?php foreach($respuesta['libros'] as $c):?>
                    <tr style="height: 60px;">
                    <td>
                        <?php
                        $id = $c->getId();
                        if ($id < 10) {
                            echo 'MMP-00' . $id;
                        } elseif ($id < 100) {
                            echo 'MMP-0' . $id;
                        } else {
                            echo 'MMP-' . $id;
                        }
                        ?>
                    </td>
                        <td> <?php echo $c->getNombre();?></td>
                        <td> <?php echo $c->getAutor();?> </td>
                        <td> <?php echo $c->getEditorial();?> </td>
                        <td> <?php echo $c->getFecha();?> </td>
                        <td> <?php echo $c->getEdicion();?> </td>
                        <td> 
                            <a class="boton-editar" href="/pruebas/CRUD/libros/<?php echo $c->getId();?>/edit">Editar</a>
                            <a class="boton-eliminar" href="/pruebas/CRUD/libros/<?php echo $c->getId();?>/delete">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </thead>
        </table>