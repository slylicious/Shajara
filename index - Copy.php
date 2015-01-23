<?php
session_start();

if(!isset($_SESSION['username']))
{
	header("location:login.php");
}

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
    
    <div class="col-lg-3">
    <div class="adminlogo"><img src="images/shajara_logo.png"></div>
    Welcome <?php echo $_SESSION['fullnames']; ?> | <a href="php/logout.php">Log out</a>
    <hr>
    <h3>Menu</h3>
    
    </div>
    
    <div class="col-lg-9">
    <hr>
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

