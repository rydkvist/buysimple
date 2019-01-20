<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta author="Niklas Rydkvist">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Buysimple | Startsida</title>

    <link rel="shortcut icon" href="images/favicon.png">

    <link href="../css/grid.css" type="text/css" rel="stylesheet">
    <link href="../css/index.css" type="text/css" rel="stylesheet">
    <link href="../css/sidenavbar.css" type="text/css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" type="text/css" rel="stylesheet">    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fadeIn.js"></script>
  </head>
<body>
<?php include("navbar.php")?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-12" >
    <!--?php include("sidenavbar.php")?>-->
    </div>
    <div class="col-lg-8 col-md-8 col-sm-9">
      <p id="header"><b>Välkommen till Buysimple</b></p>
      <div id="cube"></div>
      <p id="info">Det finns just nu <b>0</b> produkter i lager<br>
      Kom tillbaka imorgon — <b>Buysimple HQ</b></p><hr>
      
      <!-- <i class="fas fa-star-half-alt"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>-->
    </div>
    <div class="col-lg-2 col-md-2">
    </div>
  </div>
</div>
<div class="container">
  <div class="row centered">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="card">
      <img class="card-img-top" src="../img/goprohero4.jpg" width=125 height=125 alt="GoPro Hero 4">
        <div class="card-body">
          <h5 class="card-title">GoPro Hero 4</h5>
          <p class="card-text">3499 SEK</p>
          <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></span><br><br>
          <a href="#" class="btn btn-primary">Lägg i Kundvagn</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="card">
        <img class="card-img-top" src="../img/ps4.png" width=125 height=125 alt="PlayStation 4">
        <div class="card-body">
          <h5 class="card-title">PlayStation 4</h5>
          <p class="card-text">3299 SEK</p>
          <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span><br><br>
          <a href="#" class="btn btn-primary">Lägg i Kundvagn</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="card">
      <img class="card-img-top" src="../img/switch.jpg" width=200 height=125 alt="Nintendo Switch">
        <div class="card-body">
          <h5 class="card-title">Nintendo Switch</h5>
          <p class="card-text">4099 SEK</p>
          <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span><br><br>
          <a href="#" class="btn btn-primary">Lägg i Kundvagn</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="card">
      <img class="card-img-top" src="../img/iphonex.jpg" width=175 height=125 alt="iPhone X">
        <div class="card-body">
          <h5 class="card-title">iPhone X</h5>
          <p class="card-text">9999 SEK</p>
          <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span><br><br>
          <a href="#" class="btn btn-primary">Lägg i Kundvagn</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php")?>
</body>
</html>
