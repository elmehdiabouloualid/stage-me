 

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
</head>
<link rel="stylesheet" href="../public/Css/Admin1.css">
<link rel="stylesheet" href="../public/Css/contactStyle2.css">


<style>
  .header .menu-icon{
    margin-left: 60px;
  }
</style>
<body>
    <!-- Navigation !-->
     <!-- Header -->
     <header class="header" style="margin-top:-100px;">
    
    <div class="braand">
    <a href="" class="logo"><span>A</span>uto ecole <span>A</span>youb amin</a>
    </div>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
              <li><a href="index.php" data-after="Home">Home</a></li>
              <li><a href="promo.php" data-after="Promo">promo</a></li>
              <li><a href="guide.php" data-after="guides">Guides</a></li>
              <li><a href="presentation.php" data-after="Qui somme nous">Qui somme nous</a></li>
              <li><a href="contact.php" data-after="Contact">Contact</a></li>
              <li><a href="inscription2.php" data-after="Inscription">Inscription</a></li>
              <li><a href="login.php" data-after="login">login</a></li>
              
              
                   <?php session_start(); if(isset($_SESSION['UserName'])): ?>
                <li><a class="nav-link active" href="<?php echo "Administrator.php" ?>">Administrator</a></li>
  
                   <?php endif; ?>
              <li><a class="nav-link" href="<?php echo "../Controller/LogOut.php" ?>">Logout</a></li>
                              
  
                          
                     
                      
                   
             
    </ul>
  </header>

<!-- End Header -->



<div class="jumbotron"  style="margin-top:100px;"   >
  <h1 class="display-4"> You Welcome !  <?php
            echo '<h1> '.$_SESSION["UserName"].'</h1>';
        ?></h1>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg"  href="listePromo.php" role="button">List Promo</a>
  <a class="btn btn-primary btn-lg" href="AddPromo.php" role="button">Add Promo</a>
</div>


  <!-- Footer -->
    
    <?php 

  include("Footer.php");
   ?>
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