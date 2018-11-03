<?php
include"../../config.php";
$idcommunity = $_POST["idcommunity"];

$qry = mysql_query("select * from community where id='$idcommunity'");
$hasil = mysql_fetch_array($qry);


if($hasil['url']!="assets/img/community/default.gif")
{
	$img = $hasil['url'];
	$qry = mysql_query("delete from community where id='$idcommunity'");
	if($qry)
	{
		unlink("../../".$img);
		?>
		<script>
		<?php echo"window.location='../home.php?p=community'"; ?>
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
	$qry = mysql_query("delete from community where id='$idcommunity'");
	if($qry)
	{
		?>
		<script>
		<?php echo"window.location='../home.php?p=community'"; ?>
		</script>
		<?php
	}
	else
	{
		die(mysql_error());
	}
}

?>