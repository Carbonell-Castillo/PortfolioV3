window.addEventListener("scroll", function(){
    let header = document.querySelector("header");
    header.classList.toggle("sticky",  window.scrollY > 0);
})
function toggle(){
    let header = document.querySelector("header");
    header.classList.toggle("active");
}