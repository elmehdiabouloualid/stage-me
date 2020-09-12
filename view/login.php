<?php
include_once '../Controller/Crlogin.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/Css/StyleHome1.css">
  <link rel="stylesheet" href="../public/Css/contactStyle2.css">
  <link rel="stylesheet" href="../public/Css/styleLogin.css">
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
            <li><a href="Inscription2.php" data-after="Inscription">Inscription</a></li>
            <li><a href="login.php" data-after="login">login</a></li>
            
           
  </ul>
</header>
  <!-- End Header -->


  
  
	<!-- login Regestration -->
                    
	<div class="login-wrap" style="  height: 550px; margin-top: 100px;">
	
	<div class="login-html"  >
		<input id="tab-1" type="radio" name="tab"  class="sign-in" checked ><label for="tab-1" class="tab"  >Sign In</label>
		<input id="tab-2" type="radio" name="tab"   class="sign-up"><label for="tab-2" class="tab" required >Sign Up</label>
	
		<div class="login-form">
			<div class="sign-in-htm">
		
			<form action="" method="post">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input  id="user" type="text" name="UserName" class="input" class="form-control"   placeholder="Enter Your UserName" required />
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input  id="pass" type="password" name="Passworde" class="input" class="form-control"  placeholder="Enter Your Password" value=""required />
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="Login"  value="Login" class="button" >
				</div>
				
			</form>	
			</div>

<!-- Sign Up -->
			<div class="sign-up-htm">
		
			<form action="" method="post">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="UserName"  class="input" class="form-control"  placeholder=" Enter Your UserName" required />
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input type="password"  id="pass" name="Passworde" class="input" class="form-control" placeholder="Enter Your Password" required/>
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input type="email" id="pass" name="email" class="input" class="form-control"  placeholder=" Enter Your Email"required />
				</div>
				<div class="group">
					<input type="submit" name="Register"   class="button" value="Register">
				</div>
		</form>	
			</div>
		</div>
	</div>
</div>
<!--  Footer -->
<?php include('footer.php') ?>
<!-- End Footer -->
</body>
</html>