<div class="card-formulario">    
    <h2 class ="titulo"><?php echo $respuesta['form']['title']; ?> </h2>
    <form class="campos" method="post" action="<?php echo $respuesta['form']['action'];?>" enctype="multipart/form-data">
        <div class="campo">
            <label class="label-login"  for="nombre">Nombre del libro: </label> 
            <input  class="input-formulario" type="text" name="nombre" id="nombre" placeholder="Nombre del libro" value="<?php echo isset($respuesta['form']['values']) ? $respuesta['form']['values']->getNombre() : ''; ?>" autocomplete="off" required>
        </div>
        <div class="campo">
            <label class="label-login" for="autor">Autor: </label>
            <input class="input-formulario" type="text" name="autor" id="autor" placeholder="Autor" value="<?php echo isset($respuesta['form']['values']) ? $respuesta['form']['values']->getAutor() : ''; ?>" autocomplete="off" required>
        </div>
        <div class="campo">
            <label class="label-login" for="editorial">Editorial: </label>
            <input class="input-formulario" type="text" name="editorial" id="editorial" placeholder="Editorial" value="<?php echo isset($respuesta['form']['values']) ? $respuesta['form']['values']->getEditorial() : ''; ?>" autocomplete="off" required>
        </div>
        <div class="campo">
            <label class="label-login" for="fecha">Fecha de publicación: </label>
            <input  class="input-formulario" type="date" name="fecha" id="fecha" placeholder="Fecha de publicación" value="<?php echo isset($respuesta['form']['values']) ? $respuesta['form']['values']->getFecha() : ''; ?>" autocomplete="off" required>
        </div>
        <div class="campo">
            <label class="label-login" for="edicion">Número de edición: </label>
            <input class="input-formulario" type="text" name="edicion" id="edicion" placeholder="Edición" value="<?php echo isset($respuesta['form']['values']) ? $respuesta['form']['values']->getEdicion() : ''; ?>" autocomplete="off" required>
        </div>
        <div class="buttons">
            <button class="boton-agregarAceptar" type="submit"><?php echo $respuesta['form']['button']; ?></button>
            <button class="boton-cancelar" type="button" onclick="location.href='/pruebas/CRUD/libros'">Cancelar</button>
        </div>
    </form>
</div>