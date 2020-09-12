<?php

  class reclamation extends connection {



    function AddReclamation($nom,  $email, $tel, $message) {  
    
        $AddR = "insert into reclamation(nom,email,tel,message) values ('$nom','$email','$tel','$message')";  
        $result = $this->connect()->query($AddR);
        return true;  
    }
     


}

 

?>