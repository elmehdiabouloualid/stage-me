
<!doctype html>
<html lang="en">
<head>
    <title>Administrator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/Css/admin.css">
    <link rel="stylesheet" href="../public/Css/contactStyle2.css">
    <link rel="stylesheet" href="../public/Css/OfferStyle.css">
</head>


<body>  
<!--header-->                                                                                                                                                                                                                                                                                                  
<?php
    include("header.php");
?>
<!--end header-->  

<!--affichage promo-->  
<br><br><br><br><br><br><br><br>

  
<!--logique--> 
<?php
include_once '../model/connection.php';
include_once '../model/offer.php';
if(isset($_POST['delete'])){

    $key  = $_POST['delete'];

    $object = new offers();
	$object->supprimoffers($key);
  
    
}

?>

<?php
include_once '../model/connection.php';
include_once '../model/offer.php';

$data=new offers();

      $Offre_data = $data->selectOffre('offers');

       foreach($Offre_data as $Offre){
        ?>
        <form method="POST">
        <div class="main">
          <div class="card">
        <div class="image">
          <img src="./img/offers/<?php echo $Offre["img"]; ?>" style="background:gray">
        </div>
        <div class="title">
        <h1 style="font-size:30px;font-family:arial tahoma"><?php echo $Offre["titre"];?><svg color="orange" width="1em" height="0.8em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg></h1>
        </div>
        <div class="des">
        <p><?php echo $Offre["dscription"]; ?><br><br>
        <button type="submit" name="delete" value="<?php echo $Offre["id"]; ?>">Supprimer</button>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </form>

  <?php
  }
  ?>

  
<!--affichge de promo end--> 

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>

</html>