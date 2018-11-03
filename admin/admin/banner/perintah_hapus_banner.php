<?php
include"../../config.php";
$idbanner = $_POST["idbanner"];

$qry = mysql_query("select * from banner where id='$idbanner'");
$hasil = mysql_fetch_array($qry);


if($hasil['url']!="assets/img/banner/default.gif")
{
	$img = $hasil['url'];
	$qry = mysql_query("delete from banner where id='$idbanner'");
	if($qry)
	{
		unlink("../../".$img);
		?>
		<script>
		<?php echo"window.location='../home.php?p=banner'"; ?>
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
	$qry = mysql_query("delete from banner where id='$idbanner'");
	if($qry)
	{
		?>
		<script>
		<?php echo"window.location='../home.php?p=banner'"; ?>
		</script>
		<?php
	}
	else
	{
		die(mysql_error());
	}
}

?>