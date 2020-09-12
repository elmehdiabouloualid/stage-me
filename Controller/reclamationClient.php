<?php

include_once '../model/connection.php';
include_once '../model/reclamation.php';

$data=new reclamation();

$message="";

if(isset($_POST["AddReclamation"])){
  

        $nom = $_POST['nom'];  
        $email = $_POST['email'];  
        $tel = $_POST['tel'];
        $message = $_POST['message'];  
        $AddR= $data->AddReclamation($nom,$email,$tel,$message);
        if($AddR){  

               
            {
                   
              }

        }
        else{  
              
            echo "<script>alert('message Not envoyer')</script>";
            echo "<script>window.open('../view/contact.php','_self')</script>";
          
        }  
    }    
   


   ?>
