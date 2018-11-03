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
					<h3 class="panel-title">hiring</h3>
				</div>
				<div class="panel-body" id="menu">
					<?php
					if(isset($_GET['addhiring']))
					{
						?>
						<a href="home.php?p=hiring" class="list-group-item"> Daftar hiring</a>
						<a href="home.php?p=hiring&addhiring" class="list-group-item active"> Tambah hiring</a>
						<?php
					}
					else
					{
						?>
						<a href="home.php?p=hiring" class="list-group-item active"> Daftar hiring</a>
						<a href="home.php?p=hiring&addhiring" class="list-group-item"> Tambah hiring</a>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-9" id="panelisi">
			<?php
			if(isset($_GET['addhiring']))
			{
				include"tambah_hiring.php";
			}
			else
			{
				include"daftar_hiring.php";
			}
			?>
		</div>
	</div>
</div>