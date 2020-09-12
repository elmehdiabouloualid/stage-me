<?php
        include_once '../model/connection.php';
        include_once '../model/offer.php';
        
        if(isset($_POST['submit'])){
            
            $img = $_POST['img'];
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $Avantages = $_POST['detaile'];
            $detaille =  $_POST['Avantages'];

            
         $obj = new offers();
         $obj->saverecord($img,$titre,$description,$Avantages,$detaille);

         
         if($obj){  

               
          {
                echo "<script>alert('Registration Successful')</script>";
                echo "<script>window.open('../view/listePromo.php','_self')</script>";
            }

      }
      else{  
        
          echo "<script>alert('Registration Not Successful')</script>";
          echo "<script>window.open('../view/addPromo.php','_self')</script>";
        
      }  
  }    
        
     
        ?>
      