<div class="modal fade" id="hapusbanner<?php echo $hasil['id']; ?>" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            Hapus banner
          </div>

      		<div class ="modal-body">
      			<form id="formdaftar" method="POST" action="banner/perintah_hapus_banner.php">
      			Apakah anda yakin ingin <code>menghapus banner ini?</code>
            <input type="hidden" value="<?php echo $hasil['id']; ?>" name="idbanner">
      		</div>

          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Hapus</button>
            <button class="btn btn-danger" data-dismiss="modal">Kembali</button>
            </form>
          </div>
		</div>
	</div>
</div>

