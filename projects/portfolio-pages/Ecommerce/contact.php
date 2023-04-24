<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    
<?php 
    require_once "assets/complements/nav.php";
    ?>    <section class="container">
        <h2>Contactanos</h2>
    </section>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L120,133.3C240,171,480,245,720,240C960,235,1200,149,1320,106.7L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>

    <!-- Ubicaciones  -->
<main> 
    <section class="location">
        <h2>Ubicaciones</h2>
        <section class="content-location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30888.003166202492!2d-90.5246347604492!3d14.5990532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a3b4d2ca5d01%3A0x851b944462694e90!2sTienda%20Zara!5e0!3m2!1ses!2sgt!4v1614286213702!5m2!1ses!2sgt" width="500" class="map" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30888.003166202492!2d-90.5246347604492!3d14.5990532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a3bef59837bb%3A0x3f929f5346e50495!2sZara%20Home%20Guatemala!5e0!3m2!1ses!2sgt!4v1614286241193!5m2!1ses!2sgt" width="500" class="map" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30884.724319859277!2d-90.56946576044925!3d14.6223861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a1a53e9ab145%3A0x143ba4c8decdf7a4!2sZARA!5e0!3m2!1ses!2sgt!4v1614286258705!5m2!1ses!2sgt" width="500" class="map" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </section>
</main>
    <section class="sec contact" id="contacto">
        <div class="content">
            <div class="mxw800p">
                <h3>Send us A Message</h3>
             <center>   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptate eum voluptatem facere obcaecati ratione vitae velit. Obcaecati impedit dolore aspernatur incidunt minima cumque repellat accusantium, nam voluptatem, similique asperiores?</p></cente>
            </div>
            <div class="contactForm">
                <form action="">
                    <div class="row100">
                        <div class="inputbx50">
                            <input type="text" placeholder="Full Name" required>
                        </div>
                        <div class="inputbx50">
                            <input type="text" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputbx50" id="inputbx5">
                        <input type="number" placeholder="Number Phone" required>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputbx100">
                        <textarea placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputbx100">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </form>
            </div>

            </div>
            </section>
            <?php 
    require_once "assets/complements/footer.php";
    ?> 
</body>
</html>
<link rel="stylesheet" href="css/contact.css">