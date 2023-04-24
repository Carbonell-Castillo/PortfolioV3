<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kids</title>
    <!-- CDN kids vinculacion -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script>
      $(document).ready(function() {
       $(".js-example-placeholder-single").select2({
       placeholder: "Precio",
       allowClear: true
    });
});

$(document).ready(function() {
    $(".js-example-placeholder-single2").select2({
        placeholder: "Edad",
        allowClear: true
    });
});
</script>
</head>
<body>
<?php 
    require_once "assets/complements/nav.php";
    ?>    
    
    
    <section class="container">
        <h2>Realiza tus compras de forma segura</h2>
    </section>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L120,133.3C240,171,480,245,720,240C960,235,1200,149,1320,106.7L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
<main> 
    <center class="container-products">
        <nav class="navv">
         <ul>
            <li><a href="men.php" id="men">Men</a></li>   
            <li><a href="kids.php" id="kids">Kids</a></li>   
            <li><a href="woman.php" id="woman">Woman</a></li>   
        </ul>
    </nav>
    <section class="filter">
        <h2>Filtrar</h2>
    <center>
            <select class="js-example-placeholder-single precio" name="category" required>
                <option value=""></option>
               
                <option value="50">Q.50</option>
                <option value="100">Q.100</option> 
                <option value="200">Q.200</option>
                <option value="300">Q.300</option>
                <option value="400">Q.400</option>
                <option value="500">Q.500</option>
              </select>
              <br><br>
              <select class="js-example-placeholder-single2 precio" name="category" required>
                <option value=""></option>
                <option value="1">1 a 2 años</option>
                <option value="3">3 a 5 años</option>
                <option value="5">5 a 10 años</option>
              </select>
        </section>
    </center>        
    <section class="products">

        <a class="card" >
            <header class="headerCard1"></header> 
           <div class="content"> 
               <h3>Combo playera</h3>
               <p>Costo: Q.92</p>
               <p>Colores: verde, amrrillo</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard2"></header> 
           <div class="content"> 
               <h3>Combo Traje</h3>
               <p>Costo: Q.35</p>
               <p>Colores: rojo, verde</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard3"></header> 
           <div class="content"> 
               <h3>Camisa</h3>
               <p>Costo: Q.55</p>
               <p>Colores: rojo, cafe</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard4"></header> 
           <div class="content"> 
               <h3>Combo unico</h3>
               <p>Costo: Q.75</p>
               <p>Colores: unico</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard5"></header> 
           <div class="content"> 
               <h3>Combo para niña</h3>
               <p>Costo: Q.105</p>
               <p>Colores: rojo, rosado</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard6"></header> 
           <div class="content"> 
               <h3>Combo traje</h3>
               <p>Costo: Q.95</p>
               <p>Colores: amrrillo, anaranjado</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard7"></header> 
           <div class="content"> 
               <h3>Para la playa</h3>
               <p>Costo: Q.85</p>
               <p>Colores: azul, verde</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard8"></header> 
           <div class="content"> 
               <h3>Combo playera</h3>
               <p>Costo: Q.25</p>
               <p>Colores: amarrilo, verde</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard9"></header> 
           <div class="content"> 
               <h3>Combo casual</h3>
               <p>Costo: Q.55</p>
               <p>Colores: unico</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>
        <a class="card" >
            <header class="headerCard10"></header> 
           <div class="content"> 
               <h3>Combo niño</h3>
               <p>Costo: Q.525</p>
               <p>Colores: celeste, negro</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard11"></header> 
           <div class="content"> 
               <h3>Combo playera</h3>
               <p>Costo: Q.255</p>
               <p>Colores: cafe, celeste</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard12"></header> 
           <div class="content"> 
               <h3>Combo Casual</h3>
               <p>Costo: Q.234</p>
               <p>Colores: morado, negro</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>
        
    </section>  
    </section>  

</main>
<?php 
    require_once "assets/complements/footer.php";
    ?> 
   
</body>
</html>
<link rel="stylesheet" href="css/pages.css">