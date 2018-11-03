<?php
include"../../config.php";
$idhiring = $_POST["idhiring"];

$qry = mysql_query("select * from hiring where id='$idhiring'");
$hasil = mysql_fetch_array($qry);


if($hasil['url']!="assets/img/hiring/default.gif")
{
	$img = $hasil['url'];
	$qry = mysql_query("delete from hiring where id='$idhiring'");
	if($qry)
	{
		unlink("../../".$img);
		?>
		<script>
		<?php echo"window.location='../home.php?p=hiring'"; ?>
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
	$qry = mysql_query("delete from hiring where id='$idhiring'");
	if($qry)
	{
		?>
		<script>
		<?php echo"window.location='../home.php?p=hiring'"; ?>
		</script>
		<?php
	}
	else
	{
		die(mysql_error());
	}
}

?>