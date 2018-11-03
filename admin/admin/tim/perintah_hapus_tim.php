<?php
include"../../config.php";
$idtim = $_POST["idtim"];

$qry = mysql_query("select * from tim where id='$idtim'");
$hasil = mysql_fetch_array($qry);


if($hasil['url']!="assets/img/tim/default.gif")
{
	$img = $hasil['url'];
	$qry = mysql_query("delete from tim where id='$idtim'");
	if($qry)
	{
		unlink("../../".$img);
		?>
		<script>
		<?php echo"window.location='../home.php?p=tim'"; ?>
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
	$qry = mysql_query("delete from tim where id='$idtim'");
	if($qry)
	{
		?>
		<script>
		<?php echo"window.location='../home.php?p=tim'"; ?>
		</script>
		<?php
	}
	else
	{
		die(mysql_error());
	}
}

?>