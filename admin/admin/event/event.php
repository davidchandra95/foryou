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
					<h3 class="panel-title">event</h3>
				</div>
				<div class="panel-body" id="menu">
					<?php
					if(isset($_GET['addevent']))
					{
						?>
						<a href="home.php?p=event" class="list-group-item"> Daftar event</a>
						<a href="home.php?p=event&addevent" class="list-group-item active"> Tambah event</a>
						<?php
					}
					else
					{
						?>
						<a href="home.php?p=event" class="list-group-item active"> Daftar event</a>
						<a href="home.php?p=event&addevent" class="list-group-item"> Tambah event</a>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-9" id="panelisi">
			<?php
			if(isset($_GET['addevent']))
			{
				include"tambah_event.php";
			}
			else
			{
				include"daftar_event.php";
			}
			?>
		</div>
	</div>
</div>