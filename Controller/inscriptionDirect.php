<?php

include_once '../model/connection.php';
include_once '../model/inscription.php';

$data=new inscription();

$message="";

if(isset($_POST["AddPassager"])){
  

        $Nom = $_POST['Nom'];  
        $Prenom = $_POST['Prenom'];  
        $Email = $_POST['Email'];
        $Adresse = $_POST['Adresse'];  
        $CIN = $_POST['CIN'];  
        $Date_of_Birth = $_POST['Date_of_Birth'];
        $Phone_number = $_POST['Phone_number'];
   
    $EmailE = $data->isPassagerExist($Email);  

    if(!$EmailE){  
       
        $AddP= $data->AddPassager($Nom, $Prenom, $Email, $Adresse, $CIN, $Date_of_Birth, $Phone_number);
        if($AddP){  

               
            {
                  echo "<script>alert('Registration Successful')</script>";
                  echo "<script>window.open('../view/login.php','_self')</script>";
              }

        }
        else{  
              
            echo "<script>alert('Registration Not Successful')</script>";
            echo "<script>window.open('../view/login.php','_self')</script>";
          
        }  
    }    
    else {  
        
       
        echo "<script>alert('Registration Not Successful Email already exist')</script>";
        echo "<script>window.open('../view/login.php','_self')</script>";
    }  
       
}

   ?>
