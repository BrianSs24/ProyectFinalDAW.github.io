<form class="FormRegist" id="FormRegist" action="negocios.php" method="post">
    <h1 class="Formtitulo">Registrar Negocio</h1>

    <small class="error" id="errorNombre"></small>
    <input class="control" type="text" id="Nombre" name="Nombre" placeholder="Escribe el nombre">

    <h3 class="titulocat">Elige la categoría:</h3> 
    <select class="select" name="Categoria" id="Categoria">    
        <option class="opcion" value="VentCarros">Venta de carros</option>
        <option class="opcion" value="Ventaelectro">Venta de electrodomésticos</option>
        <option class="opcion" value="Lavcarros">Lavado de carros</option>
        <option class="opcion" value="RepaComp">Reparación de Computadoras</option>
        <option class="opcion" value="VentComida">Venta de comida</option>
    </select>

    <small class="error" id="errorCorreo"></small>
    <input class="correo" type="text" id="Correo" name="Correo" placeholder="Escribe tu correo">

    <small class="error" id="errorTelefono"></small>
    <input class="Telefono" type="text" id="Telefono" name="Telefono" placeholder="Ingresa tu número de teléfono">

    <small class="error" id="errorDescripcion"></small>
    <textarea class="descrip" id="Descripcion" name="Descripcion" placeholder="Explica sobre tu negocio"></textarea>

    <h2 class="Exp">Experiencia en el área:</h2>
    <label><input class="radio" type="radio" name="Experiencia" value="Principiante"> Principiante</label>
    <label><input class="radio" type="radio" name="Experiencia" value="Intermedio"> Intermedio</label>
    <label><input class="radio" type="radio" name="Experiencia" value="Experto"> Experto</label>

    <button class="boton" type="submit">Registrar</button>
</form>

