let nombres=[];
let carrera=[];
let apellidos=[];
let carnet=[];
function AlmacenarUsuario(){
    nombres.push(document.getElementById('nombre').value);
    carrera.push(document.getElementById('Carrera').value);
    apellidos.push(document.getElementById('Apellidos').value);
    carnet.push(document.getElementById('carnet').value);
    alert('Almacenado Correctamente');
}
const actualizar=()=>{
    for (i=0; i<nombres.length; i++){
        let dato= document.getElementById('DatosUsuarios');
        let element= document.createElement('tr');
        element.innerHTML=' <tr><th scope="col">'+(i+1)+'</th><th scope="col">'+nombres[i]+'</th><th scope="col">'+apellidos[i]+'</th><th scope="col">'+carrera[i]+'</th><th scope="col">'+carnet[i]+'</th></tr>';
        dato.appendChild(element);
        }

        alert("Actualizado");
}
function ActualizarListado(){
        for (i=0; i<nombres.length; i++){
            let dato= document.getElementById('NombresAlumnosNotas');
            let element= document.createElement('option');
            element.innerHTML=' <option>'+nombres[i]+'</option>';
            dato.appendChild(element);
            }
            alert("Actualizado");
}
//Almacenamiento
let name=[];
let primerBM=[];
let segundoBM=[];
let tercerBM=[];
let cuartoBM=[];
let promedioBM=[];

//globales
let nombre;
let primer;
let segundo;
let tercero;
let cuarto;
let promedio;
function ingresarDatos(){
     nombre=document.getElementById('NombresAlumnosNotas').value;
     primer= parseInt(document.getElementById('PrimerBimestre').value);
     segundo= parseInt(document.getElementById('SegundoBimestre').value);
     tercero= parseInt(document.getElementById('TercerBimestre').value);
     cuarto= parseInt(document.getElementById('CuartoBimestre').value);
    document.getElementById('PrevDatos').style.display="block";
    Message(nombre, primer, segundo, tercero, cuarto);
}
function Message(names, primer, segundo, tercero, cuarto){
    promedio= (primer+segundo+tercero+cuarto)/4;
    document.getElementById("pevNombre").innerHTML="Nombre: "+names;
    document.getElementById("pevPromedio").innerHTML="Promedio: "+promedio;
}
const AlmacenarNotas=()=>{
    name.push(nombre);
    primerBM.push(primer);
    segundoBM.push(segundo);
    tercerBM.push(tercero);
    cuartoBM.push(cuarto);
    promedioBM.push(promedio);
    alert("Almacenado Correctamente");
}
function ActualizarNotas(){
    for (i=0; i<name.length; i++){
        let dato= document.getElementById('DatosNotas');
        let element= document.createElement('tr');
        element.innerHTML='<tr><th scope="col">'+(i+1)+'</th><th scope="col">'+name[i]+'</th><th scope="col">'+primerBM[i]+'</th><th scope="col">'+segundoBM[i]+'</th><th scope="col">'+tercerBM[i]+'</th><th scope="col">'+cuartoBM[i]+'</th><th scope="col">'+promedioBM[i]+'</th></tr>';
        dato.appendChild(element);
        }
        alert("Actualizado");
}

function mostrarPassword(){
    var cambio = document.getElementById("password");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
} 

$(document).ready(function () {

//CheckBox mostrar contraseña
$('#ShowPassword').click(function () {
    $('#password').attr('type', $(this).is(':checked') ? 'text' : 'password');
});
});






//FUNCIONES GENÉRICAS (ARROW FUNCTIONS)
const text = (id) =>{
return document.getElementById(id).value;
}

const object = (id) =>{
return document.getElementById(id);
}

const listevent = (id,event,functions) =>{
return document.getElementById(id).addEventListener(event,functions);
}


//Contraseña correcta o incorrecta
const session = () =>{
let user,pass,error;

user = text('user');
pass = text('password');
error = document.querySelector('.error');

if(user === 'Maestro' && pass === 'Coc123'){
    window.location = 'home.html';
} else{
    error.style.display = 'block';

    setTimeout(function(){
        error.style.display = 'none';
    },3000);

    $('#user').val('');
    $('#password').val('');
    object('user').focus();
}
}


//EVENTOS DE LISTA (EVENTLISTENER)
listevent('login','click',session);