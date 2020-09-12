
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/Css/StyleHome1.css">
  <link rel="stylesheet" href="../public/Css/contactStyle2.css">
  <link rel="stylesheet" href="../public/Css/stylegalerie.css">
  <title>My Website</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
  
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


</head>
<body>
  <!-- Header -->
  <?php include('header.php') ?>
  <!-- End Header -->
   <!-- Hero Section  -->
   <section id="hero">
    <div class="hero container">
      <div>
        <h1>Bienvenue  <span></span></h1>
        <h1> à l'auto-école <span></span></h1>
        <h1>Ayoub amin <span></span></h1>
        <a href="inscription.php" type="button" class="cta">Inscription en ligne</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->
 
<!---- start img gallery ----->
<div class="container gallery-container">

<h1> Gallery</h1>



<div class="tz-gallery">

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="../public/Images/image_l'ecole/I.jpg">
            <img src="../public/Images/image_l'ecole/I.jpg" alt="img">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="../public/Images/image_l'ecole/H.jpg">
            <img src="../public/Images/image_l'ecole/H.jpg" alt="img">
            </a>
        </div>
        <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="../public/Images/image_l'ecole/G.jpg">
            <img src="../public/Images/image_l'ecole/G.jpg" alt="img">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="../public/Images/image_l'ecole/F.jpg">
            <img src="../public/Images/image_l'ecole/F.jpg" alt="img">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="../public/Images/image_l'ecole/A.jpg">
            <img src="../public/Images/image_l'ecole/A.jpg" alt="img">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="../public/Images/image_l'ecole/E.jpg">
            <img src="../public/Images/image_l'ecole/E.jpg" alt="img">
</a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="../public/Images/image_l'ecole/B.jpg">
            <img src="../public/Images/image_l'ecole/B.jpg" alt="img">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="../public/Images/image_l'ecole/J.jpg" style="height: 691px;width: 1044px;">
            <img src="../public/Images/image_l'ecole/J.jpg" alt="img">
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="../public/Images/image_l'ecole/C.jpg">
            <img src="../public/Images/image_l'ecole/C.jpg" alt="img">
            </a>
        </div>
    </div>


</div>
</div>
<style>
body {
    background-image: linear-gradient(to top, #ecedee 0%, #eceeef 75%, #e7e8e9 100%);

    font: normal 16px sans-serif;
}

.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    border-radius: 20px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    max-width: 800px;
    margin: 25px auto;
    color: #888;
    font-size: 18px;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .lightbox img {
    width: 100%;
    margin-bottom: 30px;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}


.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}

.tz-gallery img {
    border-radius: 4px;
}

.baguetteBox-button {
    background-color: transparent !important;
}


@media(max-width: 768px) {
    body {
        padding: 0;
    }
    .secondary-menu{
        visibility: hidden;

    }


    .container.gallery-container {
        border-radius: 0;
    }
}
</style>
<!--  Footer -->
<?php include('footer.php') ?>
<!-- End Footer -->
<!-- Javascript files -->

        <!-- Javascript files -->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap JS -->
        <!-- WayPoints JS -->
        <script src="js/waypoints.min.js"></script>
        <!-- Include js plugin -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- One Page Nav -->
        <script src="js/jquery.nav.js"></script>
        <!-- Respond JS for IE8 -->
        <script src="js/respond.min.js"></script>
        <!-- HTML5 Support for IE -->
        <script src="js/html5shiv.js"></script>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js%22%3E "></script>
        <!---- end img gallery ----->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
        
</body>
</html>