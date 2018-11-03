<form action="event/perintah_tambah_event.php" enctype="multipart/form-data" method="POST">
	<div class="form-group">
		<label>Picture</label>
		<input type="file" name="file">
	</div>
	<div class="form-group">
		<label>Judul event</label>
		<input type="text" name="judul" class="form-control">
	</div>
	<div class="form-group">
		<label>Start</label>
		<input type="text" name="start" placeholder="yyyy-MM-dd mm:hh" class="form-control">
	</div>
	<div class="form-group">
		<label>End</label>
		<input type="text" name="end" placeholder="yyyy-MM-dd mm:hh" class="form-control">
	</div>
	<div class="form-group">
		<textarea name="editor" class="form-control ckeditor"></textarea>
	</div>
	<button class="btn btn-primary">Tambah</button>
</form>