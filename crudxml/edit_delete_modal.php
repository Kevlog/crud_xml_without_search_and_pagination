<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row->nim; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ubah data Mahasiswa</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">NIM:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nim" value="<?php echo $row->nim;?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nama:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" value="<?php echo $row->nama; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Alamat:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Situs:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="situs" value="<?php echo $row->situs; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Gasido, datae wes bener</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Ubah Data</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row->nim; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Hapus data Mahasiswa</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Kamu yakin mau hapus datanya <?php echo $row->nama; ?> dari kelas SI A 2018? :(</p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Gajadi beb</button>
                <a href="delete.php?nim=<?php echo $row->nim; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Penting Yakin</a>
            </div>

        </div>
    </div>
</div>