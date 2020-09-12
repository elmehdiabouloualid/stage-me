
<?php

class offers extends connection {




    public function selectOffre($Table_Name){

      $array=array();
      $query="SELECT * FROM ".$Table_Name."";
      $result=mysqli_query($this->connect(),$query);
      while($row=mysqli_fetch_assoc($result)){
  
          $array[] = $row;
      }
          return $array;
  }



        
public function supprimoffers($key){

    $sql ="DELETE FROM `offers` WHERE id = '$key'";
    $result=$this->connect()->query($sql);
    return true;
    if($result){
        echo "thats true ....";
    }else{
        echo "thats not truuuuuue !!!!";
    }

}

    public function saverecord($img,$titre,$description,$Avantages,$detaille){

        $sql ="INSERT INTO `offers`(`id`, `img`, `titre`, `dscription`, `Avantages`, `detaille`) VALUES (NULL,'$img','$titre','$description','$Avantages','$detaille')";
        $result=$this->connect()->query($sql);
        echo $result;
        return true;
        if($result){
          echo "thats truuuuuuue ";
        }else{
          echo "thats not trueeeee";
        }
        
        }
    
    
    }
?>