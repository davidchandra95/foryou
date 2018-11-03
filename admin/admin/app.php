<head>

<?php
error_reporting(0);
include"../config.php";

$qry = mysql_query("select * from app");
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
					<h3 class="panel-title">Contact Us</h3>
				</div>
				<div class="panel-body">
					<div class="rows">
						<div class="col-md-12">
						<!--pesan-->
						<?php
							if(isset($_POST['edit']))
							{
								include"config.php";
                                $version = $_POST['version'];
                                $url = $_POST['url'];
                                
						
                                $qry = mysql_query("update app set version='$version',url='$url' where id='1'");
                                ?>
                                <script>
                                alert("Anda telah melakukan perubahan data")
                                window.location="home.php?p=app";
                                </script>
                                <?php
									

							}
						?>
						<!--selesai-->
							<form class="form-horizontal" id="formeditadmin" method="post" action="">
				               	<div class="form-group">
				                  	<label class="col-md-3">Version</label>
				                  	<div class="col-md-9">
				                  		<input type="text" class="form-control" name="version"value="<?php echo  $hasil['version']; ?>">
				               		</div>
				               	</div>
				               	<div class="form-group">
				                  	<label class="col-md-3">url</label>
				                  	<div class="col-md-9">
				                  		<input type="text" class="form-control" name="url"value="<?php echo  $hasil['url']; ?>">
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

