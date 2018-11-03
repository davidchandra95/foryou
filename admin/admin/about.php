<head>

<?php
error_reporting(0);
include"../config.php";

$qry = mysql_query("select * from about");
$hasil = mysql_fetch_array($qry);
?>

<style>
	#panelconf 
	{
	padding-top: 20px;
	}
	.form-group{
	text-align: text-center;
	}
</style>

</head>

<div class="container-fluid">
	<div class="rows">
		<div class="col-md-12" id="panelconf">
			<div class="panel panel-default panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">About Us</h3>
				</div>
				<div class="panel-body">
					<div class="rows">
						<div class="col-md-12">
						<!--pesan-->
						<?php
							if(isset($_POST['edit']))
							{
								include"config.php";
                                $des = $_POST['des'];
                                $address = $_POST['address'];
                                $telp = $_POST['telp'];
                                $wa = $_POST['wa'];
                                $ig = $_POST['ig'];
                                $fb = $_POST['fb'];
                                $web = $_POST['web'];
						
                                $qry = mysql_query("update about set des='$des',address='$address',telp='$telp',wa='$wa',ig='$ig',fb='$fb',web='$web' where id='1'");
                                ?>
                                <script>
                                alert("Anda telah melakukan perubahan data")
                                window.location="home.php?p=about";
                                </script>
                                <?php
									

							}
						?>
						<!--selesai-->
							<form class="form-horizontal" id="formeditadmin" method="post" action="">
								<div class="form-group">
				                  	<label class="col-md-3">About</label>
				                  	<div class="col-md-9">
				                  		<textarea class="form-control" rows="5" name="des"><?php echo  $hasil['des']; ?></textarea>
				               		</div>
				               	</div>
				               	<div class="form-group">
				                  	<label class="col-md-3">Address</label>
				                  	<div class="col-md-9">
				                  		<input type="text" class="form-control" name="address"value="<?php echo  $hasil['address']; ?>">
				               		</div>
				               	</div>
				               	<div class="form-group">
				                  	<label class="col-md-3">Telp</label>
				                  	<div class="col-md-9">
				                  		<input type="text" class="form-control" name="telp"value="<?php echo  $hasil['telp']; ?>">
				               		</div>
				               	</div>
				               	<div class="form-group">
				                  	<label class="col-md-3">IG</label>
				                  	<div class="col-md-9">
				                  		<input type="text" class="form-control" name="ig" value="<?php echo  $hasil['ig']; ?>">
				               		</div>
				               	</div>
                                   <div class="form-group">
				                  	<label class="col-md-3">FB</label>
				                  	<div class="col-md-9">
				                  		<input type="text" class="form-control" name="fb" value="<?php echo  $hasil['fb']; ?>">
				               		</div>
				               	</div>
                                   <div class="form-group">
				                  	<label class="col-md-3">Web</label>
				                  	<div class="col-md-9">
				                  		<input type="text" class="form-control" name="web" value="<?php echo  $hasil['web']; ?>">
				               		</div>
				               	</div>
								<div class="form-group">
								  <div class="col-md-3 col-md-offset-3">
								    <button name="edit" id="edit" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Update Data</button>
								  </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

