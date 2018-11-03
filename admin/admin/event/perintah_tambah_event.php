<?php
include"../../config.php";
$date = date("Y-m-d");
$judul = $_POST['judul'];
$start = $_POST['start'];
$end = $_POST['end'];
$isi = $_POST['editor'];
$nama = $_FILES["file"]["name"];


if(!empty($nama)) //jika ada file yang di attach
{
	$allowedExts = array("image/gif","image/JPG","image/JPEG","image/PNG","image/jpg","image/jpeg","image/png"); 

	$akhir= explode(".", $_FILES["file"]["name"]);
	$extension = end($akhir);
	$lokasi = $_FILES["file"]["tmp_name"];
	$tipe = $_FILES["file"]["type"];
	$nama = $_FILES["file"]["name"];
	$namafile = str_replace(" ","-",$nama);
	//$namafilelast = end(explode(".",$namafile));

	$lokasiakhir="assets/img/event/$namafile"; //untuk di database;
	$lokasifile="../../assets/img/event/$namafile"; //untuk di folder;

	if (!in_array($tipe, $allowedExts))
	{
	 	?>
		<script>
		alert("Tipe file tidak diizinkan")
		<?php echo"window.location='../home.php?p=event&addevent'"; ?>
		</script>
		<?php
		exit();
	}
	else
	{ //jika filenya benar
		// $qry = mysql_query("select idevent from event");
		// $row = mysql_num_rows($qry);
		// $next = $row + 1;

		if(file_exists($lokasifile))
		{
		//ubah nama file
		$lokasiakhir="assets/img/event/$namafile"; //untuk di database;
		$lokasifile="../../assets/img/event/$namafile"; //untuk di folder;
		}

		//mengupload ke server
		move_uploaded_file ($lokasi,$lokasifile);

		//masukkan ke database
		$qry = mysql_query("insert into event(event,url,start,end,des) values ('$judul','$lokasiakhir','$start','$end','$isi')");
		if($qry)
		{
			?>
			<script>
			alert("berhasil");
			<?php echo"window.location='../home.php?p=event&addevent'"; ?>
			</script>
			<?php
		}
		else
		{
			die(mysql_error());
		}
		//selesai
	}
}

?>