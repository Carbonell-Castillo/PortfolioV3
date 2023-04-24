var slider=document.getElementById('slider');
var active=document.getElementById('active');
var line1=document.getElementById('line1');
var line2=document.getElementById('line2');
var line3=document.getElementById('line3');
var line4=document.getElementById('line4');

line1.onclick= function(){
    slider.style.transform='translateX(0)';
    active.style.top="0px";
}
line2.onclick= function(){
    slider.style.transform='translateX(-25%)';
    active.style.top="80px";
}
line3.onclick= function(){
    slider.style.transform='translateX(-50%)';
    active.style.top="160px";
}
line4.onclick= function(){
    slider.style.transform='translateX(-75%)';
    active.style.top="240px";
}
function mostrarScroll(){
    let navbar= document.getElementById('navs');
        let scrollTop= document.documentElement.scrollTop;
            let top = navbar.offsetTop;
            if(top+20 < scrollTop){
                navbar.style.background="black";
                navbar.style.height="12vh"
        }       
}
    window.addEventListener('scroll', mostrarScroll);

//Esitlos cambio form home
function direccionar(from){
    if (from=="home"){
        hide();
        document.getElementById('base').style.display="block";
        animacion();
    }else if(from=="DatosAlumnos"){
        hide();
        document.getElementById('DatosAlumno').style.display="block";
        animacion();
    }else if(from=="IngresoNotas"){
        hide();
        document.getElementById('IngresoNotas').style.display="block";
        animacion();
    }else if(from=="VisualizarNotas"){
        hide();
        document.getElementById('BaseNotas').style.display="block";
        animacion();
    }else if(from=="VisualizarAlummnos"){
        hide();
        document.getElementById('BaseUsuarios').style.display="block";
        animacion();
    }else if(from=="CerrarSesion"){
        animacion();
        window.location="../index.html";
    }
}
function hide(){
    document.getElementById('base').style.display="none";
    document.getElementById('DatosAlumno').style.display="none";
    document.getElementById('IngresoNotas').style.display="none";
    document.getElementById('PrevDatos').style.display="none";
    document.getElementById('BaseUsuarios').style.display="none";
    document.getElementById('BaseNotas').style.display="none";
}
function animacion(){
    document.getElementById('cargando').style.display="flex";
    setTimeout(function(){
        document.getElementById('cargando').style.display="none";
    }, 4000);
}