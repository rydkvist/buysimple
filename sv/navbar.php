<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="fa fa-bars" style="color:white;"></span>
      </button>
      <a class="navbar-brand" href="index.php" data-toggle="tooltip" data-placement="bottom" title="Buysimple"><p id="nav-header" style="color:#dfdfdf;">Buy<span style="color:#75a5f5;">simple</span></p></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    <form class="navbar-form navbar-left navbar-collapse" id="form">
      <div class="input-group">
        <input type="text" class="form-control" id="form_input" placeholder="Sök..">
        <div class="input-group-btn">
          <button class="btn btn-info" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" style="font-size:16px;"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
      <span class="fa fa-user-cog"></span>  Konto  <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" target="_blank"><span class="fas fa-sign-in-alt"></span>Registrera</a></li>
          <li><a href="register.php" target="_blank"><span class="fas fa-sign-in-alt"></span>Logga in</a></li>
        </ul>
      </li>

        <li style="font-size:16px;"><a href="#" target="_blank"><span class="fa fa-shopping-cart"></span>  Kundvagn  </a></li>

      <li class="dropdown" style="font-size:16px;"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="fas fa-globe "></span> Språk <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li>
          <a href="../" target="_parent">Engelska<img src="../img/flag_gb.png" style="margin-bottom:3px;margin-left:11px;"></a>
          </li>
          <li>            
            <a href="../es" target="_parent">Spanska<img src="../img/flag_es.png" style="margin-bottom:3px;margin-left:11px;"></a>
          </li>
          <li>
            <a href="index.php" target="_parent">Svenska<img src="../img/flag_se.png" style="margin-bottom:3px;margin-left:11px;"></a>
          </li>          
        </ul>
      </li>
    </ul>
    </div>
  </div>
</nav>
