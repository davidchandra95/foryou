<?php
if(isset($_GET['masukcommunity']))
{
	include"masuk_community.php";
}
elseif(isset($_GET['editcommunity']))
{
	include"edit_community.php";
}
else
{


?>

<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
			<th class="text-center">No</th>
			<th class="text-center">community</th>
			<th class="text-center">URL</th>
			<th class="text-center">Desc</th>
			<th class="text-center">CP</th>
			<th class="text-center">Opsi</th>
			</tr>
		</thead>

		<tbody class="text-center">
			
			<?php
			include"../config.php";
			$qry = mysql_query("select * from community");
			$no = 1;
			while($hasil=mysql_fetch_array($qry))
			{
				?>
				<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $hasil['title']?></td>
				<td><a href="<?php echo "../".$hasil['url']; ?>"><img src="<?php echo '../'.$hasil['url'];?>" class="img-responsive"></a></td>
				<td><?php echo $hasil['des']?></td>
				<td><?php echo $hasil['cp']?></td>
				<td>
					<a data-toggle="modal" href="#hapuscommunity<?php echo $hasil['id']; ?>" class="btn btn-danger">Hapus</a>
					<?php include"modal_hapus_community.php"; ?>
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