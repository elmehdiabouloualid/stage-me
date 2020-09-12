   <!-- Includes -->
   <?php 
       
        include('../Controller/inscriptionDirect.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="../public/Css/contactStyle2.css">
  <link rel="stylesheet" href="../public/Css/inscriptionStyle2.css">
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
  <header class="header" style="margin-top:-150px;">
  
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
 
  
<div class="container">
            <form class="form-horizontal" role="form"  action="" method="post">
                <h2>Formulaire d'Inscription</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input name="Nom" id="firstName" type="text" placeholder="Nom" class="form-control"class="input pass" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                    <input name="Prenom" id="lastName" type="text" placeholder="prenom" class="form-control"class="input pass"required>
                      
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input name="Email" id="email" type="email" placeholder="Email" class="form-control"class="input pass"required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="adresse" class="col-sm-3 control-label">Adresse*</label>
                    <div class="col-sm-9">
                        
                        <input name="Adresse" id="adresse" type="text" placeholder="adresse" class="form-control"class="input pass"required>
                    
                    </div>
                </div>
                <div class="form-group">
                    <label for="cin" class="col-sm-3 control-label">CIN*</label>
                    <div class="col-sm-9">
                      
                        <input name="CIN" id="cin" type="text" placeholder="cin" class="form-control"class="input pass"required>
                   
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
              
                        <input name="Date_of_Birth" id="birthDate" type="date" placeholder="Date of Birth" class="form-control"class="input pass"required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                    
                        <input name="Phone_number"  id="phoneNumber"  type="phoneNumber" placeholder="phone Number" class="form-control"class="input pass"required>
                        
                        
                    </div>
                </div>
               
                 <!-- /.form-group -->
               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
          
                <input type="submit" value="Envoyer" name="AddPassager" class="btn btn-danger btn-block" id="btn">
                 
            </form> <!-- /form -->
        </div> <!-- ./container -->
        <!--  Footer -->
<?php include('footer.php') ?>
<!-- End Footer -->
        <script src="js/global.js"></script>
        
        
</body>
</html>