<head>
	<style>
	#panel , #panelisi
	{
		padding-top: 20px;
	}
	#menu
	{
		padding: 0px;
	}
	</style>
	
</head>

<div class="container-fluid">
	<div class="rows">
		<div class="col-md-3" id="panel">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">info</h3>
				</div>
				<div class="panel-body" id="menu">
					<?php
					if(isset($_GET['addinfo']))
					{
						?>
						<a href="home.php?p=info" class="list-group-item"> Daftar info</a>
						<a href="home.php?p=info&addinfo" class="list-group-item active"> Tambah info</a>
						<?php
					}
					else
					{
						?>
						<a href="home.php?p=info" class="list-group-item active"> Daftar info</a>
						<a href="home.php?p=info&addinfo" class="list-group-item"> Tambah info</a>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-9" id="panelisi">
			<?php
			if(isset($_GET['addinfo']))
			{
				include"tambah_info.php";
			}
			else
			{
				include"daftar_info.php";
			}
			?>
		</div>
	</div>
</div>