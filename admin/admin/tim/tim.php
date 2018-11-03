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
					<h3 class="panel-title">tim</h3>
				</div>
				<div class="panel-body" id="menu">
					<?php
					if(isset($_GET['addtim']))
					{
						?>
						<a href="home.php?p=tim" class="list-group-item"> Daftar tim</a>
						<a href="home.php?p=tim&addtim" class="list-group-item active"> Tambah tim</a>
						<?php
					}
					else
					{
						?>
						<a href="home.php?p=tim" class="list-group-item active"> Daftar tim</a>
						<a href="home.php?p=tim&addtim" class="list-group-item"> Tambah tim</a>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-9" id="panelisi">
			<?php
			if(isset($_GET['addtim']))
			{
				include"tambah_tim.php";
			}
			else
			{
				include"daftar_tim.php";
			}
			?>
		</div>
	</div>
</div>