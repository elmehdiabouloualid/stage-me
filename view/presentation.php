<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/Css/StyleHome1.css">
  <link rel="stylesheet" href="../public/Css/contactStyle2.css">
  <link rel="stylesheet" href="../public/Css/presentationStyle1.css">
  
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


 

  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators" >
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Bienvenu </h1>        
            <h3>sur le site officiel du  Ayoub amin de auto-école à Safi et ses environs .</h3>
        </hgroup>
        <a href="inscription.php" type="button" class="cta">Inscription en ligne</a>
      </div>
    </div>

    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>Vous êtes intelligent </h1>        
            <h3>parce que vous avez choisi la bonne auto école</h3>
        </hgroup>
        <a href="inscription.php" type="button" class="cta">Inscription en ligne</a>
      </div>
    </div>
  </div> 
</div>






<div class="container" style="margin-top:100px; color:red;" >
  <div class="row transparent">
    <div class="col-md-12">
    	  <div class="tuyin first">	
			<span class="title">Qui somme nous</span>
			
			  <div class="text">
				<p>
L'école Ayoub amin est l'une des écoles de conduite. Nous ne sommes pas la seule institution à enseigner la conduite et le droit de la route dans mon pays, mais nous pouvons être les premiers à suivre une formation supérieure pour les pilotes au niveau pratique et théorique grâce à nos équipements modernes et avancés,
<br><br>

Plus de 30 ans d'expérience dans la formation des pilotes, l'école de conduite Ayoub amin a fait ses preuves et son sérieux, car nos institutions ont à cœur de suivre le développement et les progrès, et travaillent toujours pour améliorer la qualité et apporter leur expertise et efficacité à leurs clients tout en s'assurant qu'ils les suivent et les accompagnent pour les aider à bien se préparer à l'examen du permis de conduire Réussi. </p>
			  </div>
			
		  </div>
		</div>
  </div>
  
</div>

<!--  Footer -->
<?php include('footer.php') ?>
<!-- End Footer -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>