<header class="header">
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