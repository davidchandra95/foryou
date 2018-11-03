<?php
include"../../config.php";
$idinfo = $_POST["idinfo"];

$qry = mysql_query("select * from info where id='$idinfo'");
$hasil = mysql_fetch_array($qry);


if($hasil['url']!="assets/img/info/default.gif")
{
	$img = $hasil['url'];
	$qry = mysql_query("delete from info where id='$idinfo'");
	if($qry)
	{
		unlink("../../".$img);
		?>
		<script>
		<?php echo"window.location='../home.php?p=info'"; ?>
		</script>
		<?php
	}
	else
	{
		die(mysql_error());
	}
}
else
{
	$qry = mysql_query("delete from info where id='$idinfo'");
	if($qry)
	{
		?>
		<script>
		<?php echo"window.location='../home.php?p=info'"; ?>
		</script>
		<?php
	}
	else
	{
		die(mysql_error());
	}
}

?>