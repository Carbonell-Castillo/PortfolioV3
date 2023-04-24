<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men</title>
    <!-- CDN Select2 vinculacion -->   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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

    <section class="container-products">
        <nav>
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
              </center>
    </section>        
    <section class="products">

        <a class="card" >
            <header class="headerCard1"></header> 
           <div class="content"> 
               <h3>Playera</h3>
               <p>Costo: Q.62</p>
               <p>Colores: unico</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard2"></header> 
           <div class="content"> 
               <h3>Combo Traje</h3>
               <p>Costo: Q.105</p>
               <p>Colores: negro, azul</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard3"></header> 
           <div class="content"> 
               <h3>Camisa</h3>
               <p>Costo: Q.85</p>
               <p>Colores: verde, celeste</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard4"></header> 
           <div class="content"> 
               <h3>Sueter</h3>
               <p>Costo: Q.75</p>
               <p>Colores: negro, gris</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard5"></header> 
           <div class="content"> 
               <h3>Chumpa</h3>
               <p>Costo: Q.155</p>
               <p>Colores: rojo, blanco</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard6"></header> 
           <div class="content"> 
               <h3>Sudadero</h3>
               <p>Costo: Q.95</p>
               <p>Colores: unico</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard7"></header> 
           <div class="content"> 
               <h3>Sueter</h3>
               <p>Costo: Q.85</p>
               <p>Colores: celeste, azul</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard8"></header> 
           <div class="content"> 
               <h3>Compo unico</h3>
               <p>Costo: Q.345</p>
               <p>Colores: unico</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard9"></header> 
           <div class="content"> 
               <h3>Pantalon ejercito</h3>
               <p>Costo: Q.55</p>
               <p>Colores: verde, gris</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>
        <a class="card" >
            <header class="headerCard10"></header> 
           <div class="content"> 
               <h3>Combo playeras</h3>
               <p>Costo: Q.525</p>
               <p>Colores: negra, celeste</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard11"></header> 
           <div class="content"> 
               <h3>Sudadero Formal</h3>
               <p>Costo: Q.255</p>
               <p>Colores: unico</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>

        <a class="card" >
            <header class="headerCard12"></header> 
           <div class="content"> 
               <h3>Sudadero Casual</h3>
               <p>Costo: Q.234</p>
               <p>Colores: negro, azul</p>
           </div> 
           <span class="read-more">Comprar</span>
        </a>
        
    </section>  
    </section>  
    <?php 
    require_once "assets/complements/footer.php";
    ?>    
</body>
</html>
<link rel="stylesheet" href="css/pages.css">
<link rel="stylesheet" href="css/men.css">
