
$(document).ready(function() {
$('a[href^="#"]').click(function() {
var destino = $(this.hash);
if (destino.length == 0) {
destino = $('a[name="' + this.hash.substr(1) + '"]');
}
if (destino.length == 0) {
destino = $('html');
}
$('html, body').animate({ scrollTop: destino.offset().top }, 500);
return false;
});
});


function toggle(){
    let header = document.querySelector("#header");
    header.classList.toggle("active");
    let toggle = document.querySelector("#toggle");
    toggle.classList.toggle("active");
}

