 <!-- Includes -->
 <?php 
       
	   include('../Controller/reclamationClient.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS -->
   <link rel="stylesheet" href="../public/Css/StyleHome1.css">
   <link rel="stylesheet" href="../public/Css/contactStyle2.css">
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

  <!--  Section contact  -->
  <section id="contact">
			<div class="section-content">
				<h1 class="section-header">POUR TOUTE <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> RÉCLAMATION:</span></h1>
				<h3>Bonjour, nous sommes l'auto ecole Ayoub amin. Nous sommes là pour vous fournir les meilleures services.</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form action="" method="post">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername"> votre nom</label>
					    	<input type="text" name="nom" class="form-control" id="" placeholder=" Entrez le nom">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail"> Adresse email</label>
					    	<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder=" Entrez l'email">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Numéro de tele</label>
					    	<input type="tel"  name="tel" class="form-control" id="telephone" placeholder=" Entrez le num">
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" name="message" id="description" placeholder="Écrivez votre message"></textarea>
			  			</div>
			  			<div>

			  				<button type="submit"  name="AddReclamation" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Envoyer le message</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
	</section>
<!-- End Section contact  --> 



<!--  Footer -->
<?php include('footer.php') ?>
<!-- End Footer -->



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</body>
</html>