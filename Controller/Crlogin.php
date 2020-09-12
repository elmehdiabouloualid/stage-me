<?php
session_start();
include_once '../model/connection.php';
include_once '../model/user.php';
$data=new user();
$message="";


// login 
if(isset($_POST["Login"])){

    $field= array (

        'UserName' => $_POST["UserName"],
        'Passworde' => $_POST["Passworde"]
    );

  


    if($data->can_login("Admin", $field)){
        
        $_SESSION["UserName"] = $_POST["UserName"]; 
        
       {
 
            header("location:index.php");
        }
       
    }
    else {  
            
           
        echo "<script>alert('Incorrect')</script>";
        echo "<script>window.open('../view/login.php','_self')</script>";
    }  


}




//Register 

if(isset($_POST["Register"])){

        $UserName = $_POST['UserName'];  
        $Passworde = $_POST['Passworde'];  
        $email = $_POST['email'];  

        $emaile = $data->isUserExist($email);  

        if(!$emaile){  
            $register = $data-> Userregister($UserName, $Passworde, $email);  

            if($register){  

               
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