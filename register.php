<?php
require_once 'config.php';

$errors = [];

if (isset($_POST['btnRegister'])) {
    extract($_POST);

    $firstName = escape($firstName);
    $lastName = escape($lastName);
    $email = escape($email);
    $password = escape($password);
    $retryPassword = escape($retryPassword);

    // First Name
    if (empty($firstName)) {
        $errors[] = 'First name cannot be empty.';
    }
    if (!ctype_alpha($firstName)) {
        $errors[] = 'First name can only contain letters.';
    }

    if (strlen($firstName) == 1) {
        $errors[] = 'First name has to be longer.';
    }
    
    if (strlen($firstName) > 40) {
        $errors[] = 'First name is too long.';
    }

    // Last Name
    if (empty($lastName)) {
        $errors[] = 'Last name cannot be empty.';
    }
    if (!ctype_alpha($lastName)) {
        $errors[] = 'Last name can only contain letters.';
    }
    if (strlen($lastName) == 1) {
        $errors[] = 'Last name has to be longer.';
    }
    
    if (strlen($lastName) > 40) {
        $errors[] = 'Last name is too long.';
    }
    
    // Emails
    $sql = "SELECT email FROM bs_users WHERE email = :email";

    $query = $db->prepare($sql);

    $query->bindParam(':email', $email, PDO::PARAM_STR);

    $query->execute();

    if ($query->rowCount() == 1) {
        $errors[] = 'Email already exists!';
    } 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is incorrect. Please enter a valid email address.';
    }
    
    // Password
    if (strlen($password) < 8){
        $errors[] = 'Password is too short.';
    }
    if ($password != $retryPassword) {
        $errors[] = 'Passwords do not match.';
    }
    
    if (empty($errors)) {
        $password = hash('ripemd160', $password . $email);
        $query = $db->prepare('INSERT INTO bs_users(first_name, last_name, email, password) VALUES (?,?,?,?)');
        $query->execute([$firstName, $lastName, $email, $password]);

        $_SESSION['email'] = $email;

        header("Location: index.php");
    } else {
        $errors[] = 'Something went wrong, please try again.';
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

    <title>Buysimple | Register</title>

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
<div class="container-fluid">
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
                <h3 class="form-header">Create account</h3><hr>

                <label class="control-label" for="firstName">Name</label>
                <input type="firstName" class="form-control" id="firstName" placeholder="Name" name="firstName">

                <label class="control-label" for="lastName">Last Name</label>
                <input type="lastName" class="form-control" id="lastName" placeholder="Last Name" name="lastName">

                <label class="control-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">

                <label class="control-label" for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password (at least 8 characters)" name="password">

                <label class="control-label" for="retryPassword">Re-enter Password</label>
                <input type="password" class="form-control" id="retryPassword" placeholder="Re-enter Password" name="retryPassword">
            
            </div>
            <div class="form-group form-btn">        
                <input type="submit" class="btn btn-primary" value="Create your Buysimple account" name="btnRegister">
            </div>

            <div class="form-group">        
                <label id="terms">By creating an account, you agree to Buysimple's <a href="#">Conditions of Use</a> & <a href="#">Privacy Notice</a>.</label>
            </div>

            <hr class="form-hr">
            <label id="form-footer">Already have an account? <a href="login.php">Sign in</a></label>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
</html>