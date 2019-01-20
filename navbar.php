<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="fa fa-bars" style="color:white;"></span>
      </button>
      <a class="navbar-brand" href="\.." data-toggle="tooltip" data-placement="bottom" title="Buysimple">
          <p id="nav-header" style="color:#f1f1f1;">Buy<span style="color:#75a5f5;">simple</span></p>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    <form class="navbar-form navbar-left navbar-collapse" id="form">
      <div class="input-group">
        <input type="text" class="form-control" id="form_input" placeholder="Search..">
        <div class="input-group-btn">
          <button class="btn btn-info" type="submit" >
            <i class="fa fa-search"></i>
</button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" style="font-size:16px;"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
      <span class="fa fa-user-cog"></span>  Account  <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php 
            if (!isset($_SESSION['email'])): 
            ?>
          <li><a href="register.php"><span class="fas fa-sign-in-alt"></span>Register</a></li>
          <li><a href="login.php"><span class="fas fa-sign-in-alt"></span>Login</a></li>
          <?php
          else:
            ?>
            <li><a href="logout.php"><span class="fas fa-sign-in-alt"></span>Logout</a></li>

        <?php endif; ?>
        </ul>
      </li>

        <li style="font-size:16px;"><a href="cart.php" target="_parent"><span class="fa fa-shopping-cart"></span>  Cart  </a></li>

      <li class="dropdown" style="font-size:16px;"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="fas fa-globe "></span> Language <span class="caret"></span></a>
        <ul class="dropdown-menu" >
          <li>
          <a href="#" target="_parent">English<img src="img/flag_gb.png" style="margin-bottom:3px;margin-left:11px;"></a>
          </li>
          <li>            
            <a href="/es" target="_parent">Spanish<img src="img/flag_es.png" style="margin-bottom:3px;margin-left:11px;"></a>
          </li>
          <li>
            <a href="/sv" target="_parent">Swedish<img src="img/flag_se.png" style="margin-bottom:3px;margin-left:11px;"></a>
          </li>          
        </ul>
      </li>
    </ul>
    </div>
  </div>
</nav>