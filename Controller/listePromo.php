
    <?php

include '../model/connection.php';
include '../model/Offre.php';
$data=new offre();

      $Offre_data = $data->selectOffre('offers');

       foreach($Offre_data as $Offre){
        ?>
 <div class="main">

   <div class="card">
     <div class="container-md">

<div class="image">
   <img src="./img/<?php echo $Offre["img"]; ?>">
</div>
<div class="title">
 <h1><?php echo $Offre["titre"]; ?></h1>
</div>
<div class="des">
 <p><?php echo $Offre["description"]; ?><br><br>
<button>Read More...</button>
</div>
</div>
       </div>
       </div>

  <?php
  }
  ?>
  <style>
     *{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;


 
 }

.title{
 
  text-align: center;
  padding: 10px;

 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}
  </style>