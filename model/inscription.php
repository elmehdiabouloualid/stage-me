<?php

  class inscription extends connection {



    function AddPassager($Nom, $Prenom, $Email, $Adresse, $CIN, $Date_of_Birth, $Phone_number) {  
    
        $AddP = "insert into passager(Nom,Prenom,Email,Adresse,CIN,Date_of_Birth,Phone_number) values ('$Nom','$Prenom','$Email','$Adresse','$CIN','$Date_of_Birth','$Phone_number')";  
        $result = $this->connect()->query($AddP);
        return true;  
    }
      
     public function isPassagerExist($Email){  

      $qr = "SELECT * FROM passager WHERE Email= '".$Email."'";  
      $result = $this->connect()->query($qr);
      $row = $result->num_rows; 
      if($row > 0){  
          return true;  
      } else {  
          return false;  
      }  
  }


  


}

 

?>