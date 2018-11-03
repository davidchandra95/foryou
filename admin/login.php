<?php

session_start(); //membuka sesi
include"config.php"; //membuka database

$user = $_POST['username'];
$pass = $_POST['password'];


$qry = mysql_query("select * from user where username ='$user'");
$num = mysql_num_rows($qry);
    
$row = mysql_fetch_array($qry);
$password = $row['password'];
$username = $row['username'];

    if ($num==0 OR $pass!=$password OR $user!=$username) {
    ?>
      <script language="JavaScript">
       alert('Username atau Password tidak sesuai !');
       document.location='index.php';
      </script>
    <?php
    }
    else 
    {   
    	$_SESSION['login'] = "true";
      header("location:admin/home.php");
    	//mysql_close(mysql_connect("localhost","root",""));
    }

?>


