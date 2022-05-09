document.addEventListener("DOMContentLoaded", function (event) {
    var divEmpleos = document.getElementById("empleos");

    // Creando/Consultado el array con datos 
    // a partir de lo que exista en localStorage
    var array = [];
    if (localStorage.getItem("empleos") == null) {
        array = [];
        localStorage.setItem("empleos", JSON.stringify(array));
    } else {
        array = JSON.parse(localStorage.getItem("empleos"));
    }

    // Poblando el div que muestra los saludos
    
    var listadoEmpleos = JSON.parse(localStorage.getItem("empleos"));
    var divEmpleos = document.getElementById("empleos");
    listadoEmpleos.forEach(element => {
        divEmpleos.innerHTML = divEmpleos.innerHTML + '<div class="card" style="width: 18rem;"><img class="card-img-top" src="'+element["imagen"]+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">' + element["nombre_oferta"] + '</h5><p class="card-text">' + element["descripcion"] + '</p><p class="card-text">' + element["fecha_cierre"] + '</p><p class="card-text">' + element["correo_contacto"] + '</p></div></div>';
    });



    return false;
});

// Esta función se llama cuando se hace clic en el botón de Registrar
// de la página de Saludos
function registrarEmpleo() {
    var nombre = document.getElementById("nombre_oferta");
    var descripcion = document.getElementById("descripcion");
    var fecha = document.getElementById("fecha_cierre");
    var correo = document.getElementById("correo_contacto");
    //Creando/Consultado el array con datos 
    // a partir de lo que exista en localStorage
    var array = [];
    if (localStorage.getItem("empleos") == null) {
        array = [];
        localStorage.setItem("empleos", JSON.stringify(array));
    } else {
        array = JSON.parse(localStorage.getItem("empleos"));
    }
    let tam = array.length;
    let a = "../img/1.jpg"
    let b = "../img/2.jpg"
    let res;
    if(tam%2==0){
        res=a;
    }else{
        res = b;
    }

    // Agregando un nuevo saludo al array
    array.push({"imagen":res, "nombre_oferta": nombre.value, "descripcion": descripcion.value, "fecha_cierre": fecha.value, "correo_contacto": correo.value });

    // Guardando en el localStorage el nuevo array
    localStorage.setItem("empleos", JSON.stringify(array));

    // Recuperando el array de saludos del localStorage
    // para volverlo a mostrar
    var listadoEmpleos = JSON.parse(localStorage.getItem("empleos"));

    // Obteniendo el div donde se muestran los saludos
    var divEmpleos = document.getElementById("empleos");

    // Recorriendo el array de saludos que viene del localStorage
    listadoEmpleos.forEach(element => {
        // Se añade cada saludo al div como un card
        divEmpleos.innerHTML = divEmpleos.innerHTML + '<div class="card" style="width: 18rem;"><img class="card-img-top" src="'+element["imagen"]+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">' + element["nombre_oferta"] + '</h5><p class="card-text">' + element["descripcion"] + '</p><p class="card-text">' + element["fecha_cierre"] + '</p><p class="card-text">' + element["correo_contacto"] + '</p></div></div>';
    });
    return false;
}