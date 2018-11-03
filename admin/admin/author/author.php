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
					<h3 class="panel-title">author</h3>
				</div>
				<div class="panel-body" id="menu">
					<?php
					if(isset($_GET['addauthor']))
					{
						?>
						<a href="home.php?p=author" class="list-group-item"> Daftar author</a>
						<a href="home.php?p=author&addauthor" class="list-group-item active"> Tambah author</a>
						<?php
					}
					else
					{
						?>
						<a href="home.php?p=author" class="list-group-item active"> Daftar author</a>
						<a href="home.php?p=author&addauthor" class="list-group-item"> Tambah author</a>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-9" id="panelisi">
			<?php
			if(isset($_GET['addauthor']))
			{
				include"tambah_author.php";
			}
			else
			{
				include"daftar_author.php";
			}
			?>
		</div>
	</div>
</div>