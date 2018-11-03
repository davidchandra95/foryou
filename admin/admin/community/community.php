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
					<h3 class="panel-title">community</h3>
				</div>
				<div class="panel-body" id="menu">
					<?php
					if(isset($_GET['addcommunity']))
					{
						?>
						<a href="home.php?p=community" class="list-group-item"> Daftar community</a>
						<a href="home.php?p=community&addcommunity" class="list-group-item active"> Tambah community</a>
						<?php
					}
					else
					{
						?>
						<a href="home.php?p=community" class="list-group-item active"> Daftar community</a>
						<a href="home.php?p=community&addcommunity" class="list-group-item"> Tambah community</a>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-9" id="panelisi">
			<?php
			if(isset($_GET['addcommunity']))
			{
				include"tambah_community.php";
			}
			else
			{
				include"daftar_community.php";
			}
			?>
		</div>
	</div>
</div>