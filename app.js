
    document.getElementById("FormRegist").addEventListener("submit", function(event) {
if (valid= true){
    event.preventDefault();
} 
    let valid = true;
    const nombre = document.getElementById("Nombre").value.trim();
    console.log(nombre.textContent)
    const correo = document.getElementById("Correo").value.trim();
    console.log(correo.textContent)
    const telefono = document.getElementById("Telefono").value.trim();
    console.log(telefono.textContent)
    const descripcion = document.getElementById("Descripcion").value.trim();
    const errorNombre = document.getElementById("errorNombre");
    const errorCorreo = document.getElementById("errorCorreo");
    const errorTelefono = document.getElementById("errorTelefono");
    const errorDescripcion = document.getElementById("errorDescripcion");
    function validarCorreo(Correo) {
        const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        return regex.test(Correo);
    }
    if (nombre === "") {
        errorNombre.textContent = "El nombre del negocio es obligatorio.";
        errorNombre.style.display = "block";
        valid = false;
    } else {
        errorNombre.style.display = "none";
    }
    if (!validarCorreo(correo)) {
        errorCorreo.textContent = "Ingresa una direccion de correo valida.";
        errorCorreo.style.display = "block";
        valid = false;
    } else {
        errorCorreo.style.display = "none";
    }
    if (telefono.length !== 10 || isNaN(telefono)) {
        errorTelefono.textContent = "El teléfono debe tener 10 dígitos.";
        errorTelefono.style.display = "block";
        valid = false;
    } else {
        errorTelefono.style.display = "none";
    }
    if (descripcion.length < 20) {
        errorDescripcion.textContent = "La descripción debe tener al menos 20 palabras.";
        errorDescripcion.style.display = "block";
        valid = false;
    } else {
        errorDescripcion.style.display = "none";
    }
    if (valid) {
        header("location: dashboard.php");
    }   
})
 



    


