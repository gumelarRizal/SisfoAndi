<div class="modal fade" id="modal-default">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modal-title">Form {{$pages}}</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modal-body">
				<form action="">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">NIS</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tempat Lahir</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Siswa</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tanggal Lahir</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Jenis Kelamin</label> 
								<div class="form-check">
									<input class="form-check-input" type="radio" name="radio1">
									<label class="form-check-label">Laki Laki</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="radio1">
									<label class="form-check-label">Perempuan</label>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">No telp</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="modal-btn-save">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
<!-- /.modal-dialog -->
</div>