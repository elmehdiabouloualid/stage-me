<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--  CSS -->
  <link rel="stylesheet" href="../public/Css/StyleHome1.css">
  <link rel="stylesheet" href="../public/Css/contactStyle2.css">
  <link rel="stylesheet" href="../public/Css/OfferStyle.css">
 
  <title>My Website</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
   integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

  <!-- Service Section -->
<?php

include_once '../model/connection.php';
include_once '../model/offer.php';
$data=new offers();

        $Offre_data = $data->selectOffre('offers');

        foreach($Offre_data as $Offre){
        ?>
        <div class="main">
          <div class="card">
        <div class="image">
          <img src="./img/offers/<?php echo $Offre["img"]; ?>" style="background:gray">
        </div>
        <div class="title">
        <h1 style="font-size:30px;font-family:arial tahoma"><?php echo $Offre["titre"];?><svg color="orange" width="1em" height="0.8em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg></h1>
        </div>
        <div class="des">
        <p><?php echo $Offre["dscription"]; ?><br><br>
        <p class="team-text"><?php echo $Offre["detaille"]; ?></p>
        <h2 style="color:white"><?php echo $Offre["Avantages"]; ?></2><br>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        

  <?php
  }
  ?>

  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<!--  Footer -->
<?php include('footer.php') ?>
<!-- End Footer -->



<!-- script Guide -->
<script>
  $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
<!-- script Guide  end -->
</body>
</html>