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
					<h3 class="panel-title">Banner</h3>
				</div>
				<div class="panel-body" id="menu">
					<?php
					if(isset($_GET['addbanner']))
					{
						?>
						<a href="home.php?p=banner" class="list-group-item"> Daftar Banner</a>
						<a href="home.php?p=banner&addbanner" class="list-group-item active"> Tambah Banner</a>
						<?php
					}
					else
					{
						?>
						<a href="home.php?p=banner" class="list-group-item active"> Daftar Banner</a>
						<a href="home.php?p=banner&addbanner" class="list-group-item"> Tambah Banner</a>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-9" id="panelisi">
			<?php
			if(isset($_GET['addbanner']))
			{
				include"tambah_banner.php";
			}
			else
			{
				include"daftar_banner.php";
			}
			?>
		</div>
	</div>
</div>