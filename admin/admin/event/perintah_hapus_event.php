<?php
include"../../config.php";
$idevent = $_POST["idevent"];

$qry = mysql_query("select * from event where id='$idevent'");
$hasil = mysql_fetch_array($qry);


if($hasil['url']!="assets/img/event/default.gif")
{
	$img = $hasil['url'];
	$qry = mysql_query("delete from event where id='$idevent'");
	if($qry)
	{
		unlink("../../".$img);
		?>
		<script>
		<?php echo"window.location='../home.php?p=event'"; ?>
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
	$qry = mysql_query("delete from event where id='$idevent'");
	if($qry)
	{
		?>
		<script>
		<?php echo"window.location='../home.php?p=event'"; ?>
		</script>
		<?php
	}
	else
	{
		die(mysql_error());
	}
}

?>