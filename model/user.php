<?php

  class user extends connection {

    

    public function can_login($table_name, $where_condition)
    {

        $condition='';

        foreach($where_condition as $key => $value)
        {
            $condition .= $key . " = '".$value."' AND ";
        }
        
        $condition = substr($condition, 0, -5);
        
        $query=" SELECT * FROM " .$table_name. " WHERE " . $condition;
       
        $result = mysqli_query($this->connect(),$query);

        
        while($row = $result->fetch_assoc()){
           
            $_SESSION['Id_U'] = $row['Id_U'];
            $_SESSION['email'] = $row['email'];   

        }
        
            if(mysqli_num_rows($result))
            {

               
                return TRUE;  
            }
            
        else{
                $this->errors = "mauvaise information";
            }
                
        
       

    }

    
    public function isUserExist($email){  

        $qr = "SELECT * FROM Admin WHERE email = '".$email."'";  
        $result = $this->connect()->query($qr);
        $row = $result->num_rows; 
        if($row > 0){  
            return true;  
        } else {  
            return false;  
        }  
    }

    function Userregister($UserName, $Passworde, $email) {  
         
            $register = "Insert into Admin (UserName, Passworde, email) values ('$UserName','$Passworde','$email')";  
            $result = $this->connect()->query($register);
            return true;  
        }
      
  

  }

  

?>