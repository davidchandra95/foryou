<?php
if(isset($_GET['masukevent']))
{
	include"masuk_event.php";
}
elseif(isset($_GET['editevent']))
{
	include"edit_event.php";
}
else
{


?>

<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
			<th class="text-center">No</th>
			<th class="text-center">Event</th>
			<th class="text-center">URL</th>
			<th class="text-center">Start</th>
			<th class="text-center">End</th>
			<th class="text-center">Desc</th>
			<th class="text-center">Opsi</th>
			</tr>
		</thead>

		<tbody class="text-center">
			
			<?php
			include"../config.php";
			$qry = mysql_query("select * from event");
			$no = 1;
			while($hasil=mysql_fetch_array($qry))
			{
				?>
				<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $hasil['event']?></td>
				<td><a href="<?php echo "../".$hasil['url']; ?>"><img src="<?php echo '../'.$hasil['url'];?>" class="img-responsive"></a></td>
				<td><?php echo $hasil['start']?></td>
				<td><?php echo $hasil['end']?></td>
				<td><?php echo $hasil['des']?></td>
				<td>
					<a data-toggle="modal" href="#hapusevent<?php echo $hasil['id']; ?>" class="btn btn-danger">Hapus</a>
					<?php include"modal_hapus_event.php"; ?>
				</td>
				</tr>
				<?php
				$no = $no + 1;
			}
			?>
			
		</tbody>
		
	</table>
</div>

<?php
}
?>