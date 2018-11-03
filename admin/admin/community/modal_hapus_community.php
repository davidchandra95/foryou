<div class="modal fade" id="hapuscommunity<?php echo $hasil['id']; ?>" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            Hapus community
          </div>

      		<div class ="modal-body">
      			<form id="formdaftar" method="POST" action="community/perintah_hapus_community.php">
      			Apakah anda yakin ingin <code>menghapus community ini?</code>
            <input type="hidden" value="<?php echo $hasil['id']; ?>" name="idcommunity">
      		</div>

          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Hapus</button>
            <button class="btn btn-danger" data-dismiss="modal">Kembali</button>
            </form>
          </div>
		</div>
	</div>
</div>

