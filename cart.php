<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta author="Niklas Rydkvist">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Buysimple | Shopping Cart</title>

    <link rel="shortcut icon" href="img/favicon.png">

    <link href="css/grid.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/fadeIn.js"></script>
  </head>
<body>
<?php include('navbar.php')?>

<div class="shopping-cart">
    <div class="title">
        <h1><b>Shopping Cart</b></h1>
    </div>
    
    <div class="status"></div>

    <?php
    $test = null;
    $query = $db->prepare('SELECT * FROM bs_products');
    $query->execute();
    if (isset($_SESSION['cart'])):
        foreach ($_SESSION['cart'] as $obj):
    ?>
    <div class="item hr-cart">
        <div class="image">
            <img class="image-responsive" src="<?=$obj->image;?>" width="100" height=100 alt="<?=$obj->name;?>">
        </div>
    
        <div class="description">
            <span>
                <?=$obj->name;?>
            </span>

            <?php 
            include('functions/stock.php');
            include('functions/rating.php');
            ?>
    
            <p class="cart-item-remove">
                <a href="#" onclick="removeFromCart(<?=$obj->id?>)">Remove</a>
            </p>
        </div>
    
        <div class="quantity">
            <h5><b>Quantity</b></h5>
            1
        </div>
    
        <div class="total-price">
            <h5><b>Price</b></h5>
            $<?=$obj->price;?>
        </div>
    </div>
    <?php
        $test = true;
        endforeach;
    endif;
    if(isset($test)):
    ?>
    <div id="checkout" style="text-align:center;margin-top:20px;">
        <input type="submit" style="width:150px;" class="btn btn-warning" value="Checkout" name="btnCheckout">
    </div>
    <?php else: ?>
    <h1 style="text-align:center;margin-bottom:70px;">Your cart is empty!</h1>
    <?php endif;?>
</div>

<script>
function removeFromCart(id) {
  $.get("remove.php?id=" + id, function(data) {
    $(".status").css('margin-top', '50px');
    $(".status").html(data); 
    $(".item").remove(id-1);
    $("#checkout").remove();
  });
}
</script>

<?php include('footer.php');?>
</body>
</html>