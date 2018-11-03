<form action="community/perintah_tambah_community.php" enctype="multipart/form-data" method="POST">
	<div class="form-group">
		<label>Picture</label>
		<input type="file" name="file">
	</div>
	<div class="form-group">
		<label>Judul community</label>
		<input type="text" name="judul" class="form-control">
	</div>
	<div class="form-group">
		<label>Contact Person</label>
		<input type="text" name="cp" class="form-control">
	</div>
	<div class="form-group">
		<textarea name="editor" class="form-control ckeditor"></textarea>
	</div>
	<button class="btn btn-primary">Tambah</button>
</form>