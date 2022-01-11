<section class="content-header">
	<h1>
		Kelola Pengguna
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="modal fade" id="modal-default">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Tambah Pengguna</h4>
						</div>
						<div class="modal-body">
							<?php echo form_open('admin/add_pengguna', array('class' => 'form-horizontal')) ?>
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-10">
										<input type="text" name="nama" class="form-control" placeholder="masukkan nama" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Username</label>
									<div class="col-sm-10">
										<input type="text" name="username" class="form-control" required placeholder="masukkan username">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
										<input type="password" name="password" class="form-control" required placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Hak Akses</label>
									<div class="col-sm-10">
										<input type="radio" name="hak_akses" required value="Admin"> Admin
									</div>
									<div class="col-sm-10">
										<input type="radio" name="hak_akses" required value="Security"> User 
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>

			<div class="box">
				<div class="box-header with-border">
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
						+ Tambah Pengguna
					</button>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				<?php if ($this->session->flashdata('pesan')) { ?>
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						</button>
						<?php echo $this->session->flashdata('pesan'); ?>
					</div>
				<?php } else if ($this->session->flashdata('warning')) {
					?>
					<div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<?php echo $this->session->flashdata('warning'); ?>
					</div>
				<?php } else if ($this->session->flashdata('gagal')) {
					?>
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<?php echo $this->session->flashdata('gagal'); ?>
					</div>
				<?php } ?>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th style="width: 10px">No</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Hak Akses</th>
							<th style="width: 90px">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach($data_pengguna as $list){
							?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $list->nama; ?></td>
								<td><?php echo $list->username;?></td>
								<td>
									<?php 
									if ($list->hak_akses == "Security") {
										echo "User";
									}else{
										echo $list->hak_akses;
									}
									?>
								</td>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $list->pengguna_id; ?>"><i class="glyphicon glyphicon-pencil"></i></button>
									<button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete<?php echo $list->pengguna_id; ?>" id="sa-params"><i class="fa fa-fw fa-trash"></i></button>
								</td>
							</tr> 

							<!--modal edit  -->

						<?php } ?>

					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
		<!-- modal hapus -->
		<?php 
		foreach($data_pengguna as $list){
			?>
			<div class="modal fade" id="modal-delete<?php echo $list->pengguna_id; ?>">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">

						<div class="modal-body">
							<?php echo form_open('admin/delete_pengguna', array('class' => 'form-horizontal')) ?>
							<div class="box-body">
								<center><img src="<?php echo base_url().'/'; ?>dist/img/non.png" width="30%">
									<h4>Apakah Anda ingin menghapus data ini ?</h4></center>
									<input type="hidden" name="pengguna_id" value="<?php echo $list->pengguna_id;?>">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-lg pull-left" data-dismiss="modal">No</button>
									<button type="submit" class="btn btn-primary btn-lg">Yes</button>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<?php }?>
			<!-- tutup modal hapus -->
			<!-- modal edit -->
			<?php 
			foreach($data_pengguna as $list){
				?>
				<div class="modal fade" id="modal-edit<?php echo $list->pengguna_id; ?>">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">Edit Pengguna</h4>
							</div>
							<div class="modal-body">
								<?php echo form_open('admin/edit_pengguna', array('class' => 'form-horizontal')) ?>
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input type="hidden" name="pengguna_id" value="<?php echo $list->pengguna_id;?>">
											<input type="text" name="nama" class="form-control" value="<?php echo $list->nama;?>" required>
										</div>
									</div>
									<div class="form-group">
										<label  class="col-sm-2 control-label">Username</label>
										<div class="col-sm-10">
											<input type="text" name="username" class="form-control" value="<?php echo $list->username;?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
											<input type="teks" name="password" class="form-control" placeholder="masukkan ulang password" required>
										</div>
									</div>
									<div class="form-group">
										<label  class="col-sm-2 control-label">Hak Akses</label>
										<?php if ($list->hak_akses == "Admin"){
											$admin = "checked";
											$secu = "";
										} else if ($list->hak_akses == "Security"){
											$secu = "checked";
											$admin = "";
										}
										?>
										<div class="col-sm-10">
											<input type="radio" name="hak_akses" required value="Admin" <?php echo $admin; ?> > Admin
										</div>
										<div class="col-sm-10">
											<input type="radio" name="hak_akses" required value="Security" <?php echo $secu; ?> > User 
										</div>
									</div>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<?php }?>
			<!-- tutup modal edit -->

		</div>
		<!-- /.row -->
	</div>
</section>
