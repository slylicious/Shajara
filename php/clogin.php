<?php
include("connect.php");

$uName = $_POST['name'];
$pWord = $_POST['pwd'];

$res = mysql_query("SELECT id, username, password, fullnames  FROM users WHERE username='$uName' AND password='$pWord' ") or die(mysql_error());
$num_row = mysql_num_rows($res);
$row=mysql_fetch_assoc($res);
if( $num_row == 1 ) {
    
	session_start();

    $_SESSION['username'] = $row['username'];
	$_SESSION['fullnames'] = $row['fullnames'];
    echo 'true';
    }
else {
    echo 'false';
}
?>