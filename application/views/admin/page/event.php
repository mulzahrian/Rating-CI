<section class="content-header">
	<h1>
		Kelola Acara
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
							<h4 class="modal-title">Tambah Acara</h4>
						</div>
						<div class="modal-body">
							<?php echo form_open('admin/add_event', array('class' => 'form-horizontal')) ?>
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Lokasi</label>
									<div class="col-sm-10">
										<select class="form-control" name="lokasi" id="lokasi">
										<option value="Pilihan">Pilihan...</option>
                							<option value="Gedung Utama">Gedung Utama</option>
                							<option value="Workshop">Workshop</option>
                							<option value="Dormitory">Dormitory</option>
                							<option value="Gsg">Gsg</option>
                							<option value="Masjid">Masjid</option>
                							<option value="Student Center">Student Center</option>
                						</select>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Pic</label>
									<div class="col-sm-10">
										<input type="text" name="pic" class="form-control" required placeholder="masukkan data pic" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Kontak Pic</label>
									<div class="col-sm-10">
										<input type="number" name="kontak" class="form-control" required placeholder="Kontak Pic" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Ruangan</label>
									<div class="col-sm-10">
										<input type="text" name="ruangan" class="form-control" required placeholder="Ruangan" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Kegiatan</label>
									<div class="col-sm-10">
										<input type="text" name="kegiatan" class="form-control" required placeholder="Kegiatan" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Tanggal</label>
									<div class="col-sm-10">
										<input type="date" name="tanggal" class="form-control" required placeholder="Tanggal" required>
									</div>
								</div>

								<!-- <div class="form-group">
								 	<label class="col-sm-2 control-label">Hari</label>
								 	<div class="col-sm-10">
        							<select class="form-control" name="hari" id="hari">
                						<option value="Jenis hari">Pilih Hari</option>
                							<option value="Senin">Senin</option>
                							<option value="Selasa">Selasa</option>
                							<option value="Rabu">Rabu</option>
                							<option value="Kamis">Kamis</option>
                							<option value="Jumat">Jumat</option>
                							<option value="Sabtu">Sabtu</option>
                							<option value="Minggu">Minggu</option>
                						</select>
                					</div>
         						</div> -->

         						<div class="form-group">
            						<div class="form-row">
            							<label class="col-sm-2 control-label">Jam Mulai</label>
             								 <div class="col-sm-4">
              									  <div class="form-label-group">
                 							 <input type="time" id="jam_mul" name="jam_mul" class="form-control">
               						 </div>
              </div>
              <label class="col-sm-3 control-label">Jam Selesai</label>
              <div class="col-sm-3">
                <div class="form-label-group">
                  <input type="time" id="jam_sel" name="jam_sel" class="form-control">
                </div>
              </div>
            </div>
          </div>
								<!-- <div class="form-group"> -->
									<!-- <label  class="col-sm-2 control-label">Hak Akses</label> -->
									<!-- <div class="col-sm-10">
										<input type="radio" name="hak_akses" required value="Admin"> Admin
									</div> -->
									<!-- <div class="col-sm-10">
										<input type="radio" name="hak_akses" required value="Security"> Security 
									</div> -->
								<!-- </div> -->
								
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
						+ Tambah Acara
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
							<th style="width: 10px">NO</th>
							<th>LOKASI</th>
							<th>PIC</th>
							<th>KONTAK</th>
							<th>RUANGAN</th>
							<th>KEGIATAN</th>
							<th>HARI</th>
							<th>TANGGAL</th>
							<th>JAM MULAI</th>
							<th>JAM SELESAI</th>
							<th style="width: 95px">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach($event as $list){
							?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $list->lokasi; ?></td>
								<td><?php echo $list->pic;?></td>
								<td><?php echo $list->kontak;?></td>
								<td><?php echo $list->ruangan;?></td>
								<td><?php echo $list->kegiatan;?></td>
								<td><?php echo $list->hari;?></td>
								<td><?php echo $list->tanggal;?></td>
								<td><?php echo $list->jam_mul;?></td>
								<td><?php echo $list->jam_sel;?></td>
								<td>
									<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit<?php echo $list->id; ?>"><i class="glyphicon glyphicon-pencil"></i></button>
								
									<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete<?php echo $list->id; ?>" id="sa-params"><i class="fa fa-fw fa-trash" ></i></button>
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
			<!-- modal edit -->
			<?php 
			foreach($event as $list){
				?>
				<div class="modal fade" id="modal-edit<?php echo $list->id; ?>">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">Edit Acara</h4>
							</div>
							<div class="modal-body">
								<?php echo form_open('admin/edit_event', array('class' => 'form-horizontal')) ?>
								<div class="box-body">
									<!-- test -->

									<div class="form-group">
									<label class="col-sm-2 control-label">Lokasi</label>
									<div class="col-sm-10">
										<input type="hidden" name="id" value="<?php echo $list->id;?>">
										<input type="text" name="lokasi" class="form-control" placeholder="masukkan lokasi acara" value="<?php echo $list->lokasi;?>" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Pic</label>
									<div class="col-sm-10">
										<input type="text" name="pic" class="form-control" required placeholder="masukkan data pic" value="<?php echo $list->pic;?>" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Kontak Pic</label>
									<div class="col-sm-10">
										<input type="number" name="kontak" class="form-control" required placeholder="Kontak Pic" value="<?php echo $list->kontak;?>" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Ruangan</label>
									<div class="col-sm-10">
										<input type="text" name="ruangan" class="form-control" required placeholder="Ruangan" value="<?php echo $list->ruangan;?>" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Kegiatan</label>
									<div class="col-sm-10">
										<input type="text" name="kegiatan" class="form-control" required placeholder="Kegiatan" value="<?php echo $list->kegiatan;?>" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Tanggal</label>
									<div class="col-sm-10">
										<input type="date" name="tanggal" class="form-control" required placeholder="Tanggal" value="<?php echo $list->tanggal;?>" required>
									</div>
								</div>

						<!--	 <div class="form-group">
								 	<label class="col-sm-2 control-label">Hari</label>
								 	<div class="col-sm-10">
        							<select class="form-control" name="hari" id="hari" value="<?php echo $list->hari;?>">
                						<option value="Jenis hari">Pilih Hari</option>
                							<option value="Senin">Senin</option>
                							<option value="Selasa">Selasa</option>
                							<option value="Rabu">Rabu</option>
                							<option value="Kamis">Kamis</option>
                							<option value="Jumat">Jumat</option>
                							<option value="Sabtu">Sabtu</option>
                							<option value="Minggu">Minggu</option>
                						</select>
                					</div>
         						</div> -->

         						<div class="form-group">
            						<div class="form-row">
            							<label class="col-sm-2 control-label">Jam Mulai</label>
             								 <div class="col-sm-4">
              									  <div class="form-label-group">
                 							 <input type="time" id="jam_mul" name="jam_mul" class="form-control" value="<?php echo $list->jam_mul;?>">
               						 </div>
              </div>
              <label class="col-sm-3 control-label">Jam Selesai</label>
              <div class="col-sm-3">
                <div class="form-label-group">
                  <input type="time" id="jam_sel" name="jam_sel" class="form-control" value="<?php echo $list->jam_sel;?>">
                </div>
              </div>
            </div>
          </div>
								<div class="form-group">
										<label  class="col-sm-2 control-label">Status</label>
										<?php if ($list->status == "1"){
											$satu = "checked";
											$nol = "";
										} else if ($list->status == "0"){
											$nol = "checked";
											$satu = "";
										}
										?>
										<div class="col-sm-10">
											<input type="radio" name="status" required value="1" <?php echo $satu; ?> > Acara Aktif
										</div>
										<div class="col-sm-10">
											<input type="radio" name="status" required value="0" <?php echo $nol; ?> > Acara Dibatalkan
										</div>
									</div>

									<!-- end test -->

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

			<!-- modal hapus -->
		<?php 
		foreach($event as $list){
			?>
			<div class="modal fade" id="modal-delete<?php echo $list->id; ?>">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">

						<div class="modal-body">
							<?php echo form_open('admin/delete_event', array('class' => 'form-horizontal')) ?>
							<div class="box-body">
								<center><img src="<?php echo base_url().'/'; ?>dist/img/non.png" width="30%">
									<h4>Apakah Anda ingin menghapus data ini ?</h4></center>
									<input type="hidden" name="id" value="<?php echo $list->id;?>">
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

		</div>
		<!-- /.row -->
	</div>
</section>
