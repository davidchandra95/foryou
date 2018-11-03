<?php
if(isset($_GET['masuktim']))
{
	include"masuk_tim.php";
}
elseif(isset($_GET['edittim']))
{
	include"edit_tim.php";
}
else
{


?>

<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
			<th class="text-center">No</th>
			<th class="text-center">Name</th>
			<th class="text-center">Position</th>
			<th class="text-center">URL</th>
			<th class="text-center">Opsi</th>
			</tr>
		</thead>

		<tbody class="text-center">
			
			<?php
			include"../config.php";
			$qry = mysql_query("select * from tim");
			$no = 1;
			while($hasil=mysql_fetch_array($qry))
			{
				?>
				<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $hasil['name']?></td>
				<td><?php echo $hasil['position']?></td>
				<td><a href="<?php echo "../".$hasil['url']; ?>"><img src="<?php echo '../'.$hasil['url'];?>" class="img-responsive"></a></td>
				<td>
					<a data-toggle="modal" href="#hapustim<?php echo $hasil['id']; ?>" class="btn btn-danger">Hapus</a>
					<?php include"modal_hapus_tim.php"; ?>
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