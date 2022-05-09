document.addEventListener("DOMContentLoaded", function(event) {
    var divServicios = document.getElementById("servicios");

    // Creando/Consultado el array con datos 
    // a partir de lo que exista en localStorage
    var array = [];
    if (localStorage.getItem("servicios") == null) {
        array = [];
        localStorage.setItem("servicios", JSON.stringify(array));
    } else {
        array = JSON.parse(localStorage.getItem("servicios"));
    }

    // Poblando el div que muestra los saludos
    var listadoServicios = JSON.parse(localStorage.getItem("servicios"));
    var divServicios = document.getElementById("servicios");
    listadoServicios.forEach(element => {
        divServicios.innerHTML = divServicios.innerHTML + '<div class="card"><div class="card-body"><h5 class="card-title">Nombre: </h5><p>'+ element["nombre"] +'</p><h5 class="card-title">Costo: </h5><p>'+ element["costo"] +'</p><h5 class="card-title">Duracion: </h5><p>'+ element["duracion"] +'</p><h5 class="card-title">Contacto: </h5><p>'+ element["contacto"] +'</p></div></div>';
    });
    return false;
});

// Esta función se llama cuando se hace clic en el botón de Registrar
// de la página de Saludos
function registrarServicio() {
    var nombre = document.getElementById("nombre_servicio");
    var costo = document.getElementById("costo_servicio");
    var duracion = document.getElementById("duracion_servicio");
    var contacto = document.getElementById("contacto_servicio");
    //Creando/Consultado el array con datos 
    // a partir de lo que exista en localStorage
    var array = [];
    if (localStorage.getItem("servicios") == null) {
        array = [];
        localStorage.setItem("servicios", JSON.stringify(array));
    } else {
        array = JSON.parse(localStorage.getItem("servicios"));
    }

    // Agregando un nuevo saludo al array
    array.push({ "nombre": nombre.value, "costo": costo.value, "duracion":duracion.value, "contacto":contacto.value });

    // Guardando en el localStorage el nuevo array
    localStorage.setItem("servicios", JSON.stringify(array));

    // Recuperando el array de saludos del localStorage
    // para volverlo a mostrar
    var listadoServicios = JSON.parse(localStorage.getItem("servicios"));

    // Obteniendo el div donde se muestran los saludos
    var divSaludos = document.getElementById("servicios");

    // Recorriendo el array de saludos que viene del localStorage
    listadoServicios.forEach(element => {
        // Se añade cada saludo al div como un card
        divServicios.innerHTML = divServicios.innerHTML +'<div class="card"><div class="card-body"><h5 class="card-title">Nombre: </h5><p>'+ element["nombre"] +'</p><h5 class="card-title">Costo: </h5><p>'+ element["costo"] +'</p><h5 class="card-title">Duracion: </h5><p>'+ element["duracion"] +'</p><h5 class="card-title">Contacto: </h5><p>'+ element["contacto"] +'</p></div></div>';
    });
    return false;
}