window.onload =function(){
    let contenedor= document.getElementById('loading');
    let content = document.getElementById('all');
    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';
    
    
}
window.addEventListener("load", function(event) {
    let contenedor= document.getElementById('loading');
    let content = document.getElementById('all');
    setTimeout(function(){        
        contenedor.style.display='none';
    }, 3000);
    content.style.display='block';     
});