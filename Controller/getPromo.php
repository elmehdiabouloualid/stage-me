<?php 
include('../model/connect.php');

//get Membres

function get_Promo(){
    global $con;
    $query="select * from Promo";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
    $Titre=$row ['Titre'];
    $Discription=$row['Discription'];
    
      echo "<tr>
            <td>$Titre</td>
            <td>$Discription</td>
            </tr>";
            
    }
}
?>

