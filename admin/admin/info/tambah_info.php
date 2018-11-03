<form action="info/perintah_tambah_info.php" enctype="multipart/form-data" method="POST">
	<div class="form-group">
		<label>Picture</label>
		<input type="file" name="file">
	</div>
	<div class="form-group">
		<label>Judul info</label>
		<input type="text" name="judul" class="form-control">
	</div>
	<div class="form-group">
		<textarea name="editor" class="form-control ckeditor"></textarea>
	</div>
	<button class="btn btn-primary">Tambah</button>
</form>