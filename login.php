<?php
require_once 'config.php';

$errors = [];

if(isset($_SESSION["email"])){
    header("Location: index.php");
}

if (isset($_POST['btnLogin'])) {
    extract($_POST);

    $email = escape($_POST['email']);
    $password = escape($_POST['password']);

    $password = hash('ripemd160', $password . $email);

    $query = $db->prepare('SELECT * FROM bs_users WHERE email = ? AND password = ?');
    $query->execute([$email, $password]);

    if ($query->rowCount() > 0) {
        $_SESSION['email'] = $email;

        header("Location: index.php");
    }
     else{
        $errors[] = "The email or password is incorrect!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta author="Niklas Rydkvist">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Buysimple | Login</title>

    <link rel="shortcut icon" href="images/favicon.png">

    <link href="css/grid.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/fadeIn.js"></script>
  </head>
<body>
    
<div class="container-fluid" style="margin-top:99px;">
    <p class="logo-text">
        <a href="../" class="logo-link" title="Buysimple">Buy<span>simple</a></span>
    </p>

    <?php
    if (!empty($errors)) {
        echo alert($errors[0], (isset($status)) ? 'success' : 'danger');
    }
    ?>

    <div class="form-box">
        <form action="" method="POST">
            <div class="form-group">        
                <h3 class="form-header">Sign In</h3><hr>

                <label class="control-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">

                <label class="control-label" for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password (at least 8 characters)" name="password">

            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="remember" >Remember me</label>
            </div>
            <div class="form-group form-btn">        
                <input type="submit" class="btn btn-primary" value="Sign In" name="btnLogin">
            </div>
            <hr class="form-hr">
            <label id="login-footer"><b>New? <a href="register.php">Sign up today!</a></label>
            
        </form>
    </div>
</div>

<?php include('footer.php')?>
</body>
</html>