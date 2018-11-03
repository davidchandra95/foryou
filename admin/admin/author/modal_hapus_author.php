<div class="modal fade" id="hapusauthor<?php echo $hasil['id']; ?>" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&authores;</button>
            Hapus author
          </div>

      		<div class ="modal-body">
      			<form id="formdaftar" method="POST" action="author/perintah_hapus_author.php">
      			Apakah anda yakin ingin <code>menghapus author ini?</code>
            <input type="hidden" value="<?php echo $hasil['id']; ?>" name="idauthor">
      		</div>

          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Hapus</button>
            <button class="btn btn-danger" data-dismiss="modal">Kembali</button>
            </form>
          </div>
		</div>
	</div>
</div>

