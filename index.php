<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta author="Niklas Rydkvist">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Buysimple | Home</title>

    <link rel="shortcut icon" href="img/favicon.png">

    <link href="css/grid.css" type="text/css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/fadeIn.js"></script>
  </head>
<body>
<?php 
include("navbar.php");

/*$adc = $db->prepare('INSERT INTO bs_products(name, price, image, rating, in_stock) VALUES (?,?,?,?,?)');
$adc->execute(['WilliamsDick', '1', 'img/ding.jpg', 0.5, 100]);*/
$quotes = array("Happy talk must die", "Simplicity makes perfection", "Don't make me think");
$author = array("Steve Krug", "Buysimple Staff", "Steve Krug");
$rnd = rand(0, count($quotes) - 1);

$query = $db->prepare('SELECT SUM(in_stock) AS value_sum FROM bs_products');
$query->execute();

$column = $query->fetch(PDO::FETCH_OBJ);
$stocks = $column->value_sum;
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-12" >
    <!--?php include("sidenavbar.php")?>-->
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <p id="header"><b>Welcome to Buysimple</b></p>
      <p id="info">There are currently <b><?=$stocks;?></b> products available<br>
      "<?= $quotes[$rnd];?>" — <b><?= $author[$rnd];?></b></p><hr>
      
    </div>
    <div class="col-lg-2 col-md-2">
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="status"></div>
  <?php
  $query = $db->prepare('SELECT * FROM bs_products');
  $query->execute();

  while ($obj = $query->fetch(PDO::FETCH_OBJ)):
  ?>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card">
        <img src="<?=$obj->image;?>" width="<?$obj->image_width;?>" height=125 alt="<?=$obj->name;?>">
        
        <div class="card-body">
          <h5 class="card-title"><?=$obj->name;?></h5>
          <p class="card-price">$ <?=$obj->price;?></p>
          
          <?php include('functions/stock.php'); ?>
          <br><br>
          <?php include('functions/rating.php'); ?>
          <br><br>

          <button class="btn btn-buy" onclick="addToCart(<?=$obj->id?>)" type="submit">Add to Cart  <i class="fas fa-cart-plus"></i>
  </button>
        </div>
      </div>
    </div>
  <?php
  endwhile;
  ?>
  </div>
</div>
<?php include("footer.php")?>
</body>
</html>
