<div class="header">
            <h2 class ="titulo">Listado de libros existentes</h2>
            <a href="/pruebas/CRUD/libros/new"> Agregar libro</a>
        </div>    
            
        <table >
            <thead >
                <tr>
                <th style="width: 5%;">ID</th>
                <th style="width: 15%;">Nombre del libro</th>
                <th style="width: 20%;">Autor</th>
                <th style="width: 20%;">Editorial</th>
                <th style="width: 10%;">Fecha publicación</th>
                <th style="width: 10%;">Número de edición</th>
                <th style="width: 20%;">Acciones</th>
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