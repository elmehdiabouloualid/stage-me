<!-- Includes -->
 <?php 
  include('../Controller/addPromo.php');
 ?>
<!doctype html>
<html lang="en">
<head>
    <title>Administrator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!--  CSS -->
    <link rel="stylesheet" href="../public/Css/admin.css">
    <link rel="stylesheet" href="../public/Css/contactStyle2.css">
    <link rel="stylesheet" href="../public/Css/OfferStyle.css">
</head>

<body> 
<!--header-->                                                                                                                                                                                                                                                                                                     
<?php
include('Header.php');
?>
<!--header end -->    
<br><br><br><br><br>
    
<!-- promo -->
			  <div class="promo parallax-one pad">
       

				<div class="container">
<!-- promo element -->
				<div class="promo-element ">

<!-- heading -->
            <center>
        <form  method="post" role="form" >
        <input type="img" class="rk" name="img" placeholder="entrer limage qui tu peux ajouter" required></input><br><br>
        <input type="titre" class="rk" name="titre" placeholder="Titre" required><br><br>
        <textarea type="description" class="rk" name="description" placeholder="Description" required></textarea><br><br>
        <textarea type="detailles" class="rk" name="detaile" placeholder="Detailles" required></textarea><br><br>
        <textarea type="avantages" class="rk" name="Avantages" placeholder="Les avantages" required></textarea><br><br>
        <button name="submit"  type="submit" placeholder="ajouter">Ajouter une offre</button><br><br>

       </form>
       

      </center>

<!-- link -->
						
					</div>
				</div>
			</div>
      <br><br><br><br>

<!-- footer -->
      <?php
        include ("footer.php");
      ?>
<!-- footer end -->      
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>

</html>