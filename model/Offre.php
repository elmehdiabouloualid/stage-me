<?php

class offre extends connection{

public function saverecord($img,$titre,$description){

$sql ="INSERT INTO offers(id, img, titre, description) VALUES (NULL,'$img','$titre','$description')";
$result=$this->connect()->query($sql);



}

public function selectOffre($Table_Name){

    $array=array();
    $query="SELECT * FROM ".$Table_Name."";
    $result=mysqli_query($this->connect(),$query);
    while($row=mysqli_fetch_assoc($result)){

        $array[] = $row;
    }
        return $array;
}

  }
?>