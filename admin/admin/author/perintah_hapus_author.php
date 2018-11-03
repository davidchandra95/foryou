<?php
include"../../config.php";
$idauthor = $_POST["idauthor"];

$qry = mysql_query("select * from author where id='$idauthor'");
$hasil = mysql_fetch_array($qry);


if($hasil['url']!="assets/img/author/default.gif")
{
	$img = $hasil['url'];
	$qry = mysql_query("delete from author where id='$idauthor'");
	if($qry)
	{
		unlink("../../".$img);
		?>
		<script>
		<?php echo"window.location='../home.php?p=author'"; ?>
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
	$qry = mysql_query("delete from author where id='$idauthor'");
	if($qry)
	{
		?>
		<script>
		<?php echo"window.location='../home.php?p=author'"; ?>
		</script>
		<?php
	}
	else
	{
		die(mysql_error());
	}
}

?>