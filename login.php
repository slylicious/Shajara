<?php
session_start();
?>
<head>
<title>Shajara Login</title>
<link rel="stylesheet" href="jquery_simple/jquery-ui.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="fa/css/font-awesome.css">
<link rel="stylesheet" href="css/shajara.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="jquery_simple/jquery-1.10.js"></script>
<script type="text/javascript" src="jquery_simple/jquery-ui.js"></script>
<script type="text/javascript" src="jquery_simple/components.js"></script>

</head>
<body>

<div class="container">
<div class="row">
    <div class="col-lg-12">
    <div class="col-lg-4">
    </div>
    <div class="col-lg-4">
        <div class="logo"><img src="images/shajara_logo.png"></div>
          <form class="form-signin" action="./" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <div class="form-group">
            <label for="inputEmail" class="sr-only">Username</label>
            <span class=" glyphicon glyphicon-user"></span>&nbsp;<input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <span class=" glyphicon glyphicon-lock"></span>&nbsp;
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <input type="submit" class="btn btn-lg btn-default btn-block" value="Sign in" id="loginfxn">
            <div id="login_err"></div>
            
            
          </form>
    </div>
    </div>

	<footer class="footer">
      <div class="container">
        <p class="text-center">&copy; <?php echo date('Y'); ?> | Shajara&trade;</p>
      </div>
    </footer>
</div>
</div>
<?php
if(isset($_POST['submit']))
{
	echo $_POST['inputEmail'];
}

?>
</body>

