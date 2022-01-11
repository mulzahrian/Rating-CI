<section class="content-header">
	<h1>
		Form Pemesanan Gedung Serba Guna (GSG)
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="modal fade" id="modal-default" >
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Tambah Pemesanan</h4>
						</div>
						<div class="modal-body">
							<?php echo form_open('user/add_pesanan', array('class' => 'form-horizontal')) ?>
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Tanggal Pemakaian</label>
									<div class="col-sm-5">
										<input type="date" name="tgl_pemakaian" class="form-control" placeholder="masukkan tanggal pemesanan" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Untuk</label>
									<div class="col-sm-5">
										<input type="text" name="untuk" class="form-control" placeholder="masukkan nama acara" required>
									</div>
								</div>	
								<div class="form-group">
									<label  class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-5">
										<input type="text" name="nama_pemesanan" class="form-control" placeholder="masukkan nama pemesan" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Nomor HP</label>
									<div class="col-sm-5">
										<input type="number" name="no_hp" class="form-control" placeholder="masukkan nomor telepon" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Tanggal Pemesanan</label>
									<div class="col-sm-5">
										<input type="date" name="tgl_pemesanan" class="form-control" placeholder="masukkan tanggal pemesanan" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-5">
										<textarea name="alamat_pemesanan" rows="3" cols="60" required></textarea>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Note</label>
									<div class="col-sm-5">
										<textarea name="note" rows="3" cols="60" ></textarea>
									</div>
								</div>
								<hr>
								<!-- /.box-header -->
								<div class="box-body no-padding">
									<table class="table table-bordered">
										<tr>
											<th style="width: 10px">No</th>
											<th>Tempat dan Fasilitas</th>
											<th>Biaya</th>
										</tr>
										<tr>
											<td>1.</td>
											<td>Pemakaian Hall, Koridor dan Lobby, <b>Pukul 11:00 - 17:00 WIB</b></td>
											<td>
											</td>
										</tr>
										<tr>
											<td>2.</td>
											<td>Stall Kosong 4 unit (<font color="blue"><i>biaya Rp. 300.000 / unit</i></font>)</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>3.</td>
											<td>Meja Bulat 10 unit + Meja Panjang 4 unit (<font color="blue"><i>biaya Rp. 50.000 / unit</i></font>)</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>4.</td>
											<td>Kursi 400 unit (<font color="blue"><i>biaya Rp. 5.000 / unit</i></font>)</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>5.</td>
											<td>Ruangan Hias / Ganti 1 unit</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>6.</td>
											<td>Ruangan Makan Keluarga / Panitia 1 unit</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>7.</td>
											<td>Sound System dan 2 Mic Wireless</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>8.</td>
											<td>Cadangan Listrik 3 Jam, Bila Listrik PLN Padam (<font color="blue"><i>biaya Rp. 500.000 / jam</i></font>)</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>9.</td>
											<td>Pendingin Udara Hall, <b>Pukul 10:00 - 17:00</b></td>
											<td>
											</td>
										</tr>
										<tr>
											<td>10.</td>
											<td>Janitor dan Security</td>
											<td>
												<input type="number" name="biaya1to11" class="form-control" placeholder="Rp. point 1-11" required>
											</td>
										</tr>
										<tr>
											<td>11.</td>
											<td>Guest House (<font color="blue"><i>biaya Rp. 500.000 / hari, khusus tamu resepsi</i></font>)</td>
											<td>
												<input type="number" name="biaya12" class="form-control" placeholder="Rp. point 12" required>
											</td>
										</tr>
										<tr>
											<td>12.</td>
											<td>Mini Garden (<font color="blue"><i>biaya Rp. 1.000.000</i></font>)</td>
											<td>
												<input type="number" name="biaya13" class="form-control" placeholder="Rp. point 13" required>
											</td>
										</tr>
										<tr>
											<td>13.</td>
											<td>Projector (<font color="blue"><i>biaya Rp. 1.000.000 /Unit</i>) <i>Kerusakan akibat jatuh menjadi tanggung jawab penyewa</td>
											<td>
												<input type="number" name="biaya14" class="form-control" placeholder="Rp. point 14" required>
											</td>
										</tr>
										<tr>
											<td>14.</td>
											<td>Orgen Tunggal, Pemain, Penyanyi (<font color="blue"><i>biaya Rp. 1.500.000 </i></font>)</td>
											<td>
												<input type="number" name="biaya15" class="form-control" placeholder="Rp. point 15" required>
											</td>
										</tr>
										<tr>
											<td>15.</td>
											<td>Biaya Menggunakan Catering Sendiri Rp. 1.500.000</td>
											<td>
												<input type="number" name="biaya16" class="form-control" placeholder="Rp. point 16" required>
											</td>
										</tr>
										<tr>
											<td>16.</td>
											<td>Biaya menggunakan Sound System Sendiri atau peralatan listrik lainnya Rp. 500.000  </td>
											<td>
												<input type="number" name="biaya17" class="form-control" placeholder="Rp. point 17" required>
											</td>
										</tr>
										<tr>
											<td>17.</td>
											<td>Lain-lain</td>
											<td>
												<input type="number" name="biaya18" class="form-control" placeholder="Rp. point 18" required>
											</td>
										</tr>
										<tr>
											<td></td>
											<td align="right"><b>DP / Lunas</b></td>
											<td>
												<input type="number" name="biaya_dp" class="form-control" placeholder="Rp. DP" required>
											</td>
										</tr>
										<tr>
											<td></td>
											<td align="right"><b>Pelunasan</b></td>
											<td>
												<input type="number" name="biaya_pelunasan" class="form-control" placeholder="Rp. pelunasan" required>
											</td>
										</tr>
									</table>
								</div>
								<!-- /.box-body -->	
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
				<!-- <div class="box-header with-border">
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
						+ Tambah Pemesanan
					</button>
				</div> -->
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
							<th>Nama Pemesan</th>
							<th>Acara</th>
							<th>Tanggal Pemakaian</th>
							<th>Tanggal Pemesanan</th>
							<th>Nomor Telepon</th>
							<th style="width: 70px">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach($data_gsg as $list){
							?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $list->nama_pemesanan; ?></td>
								<td><?php echo $list->untuk;?></td>
								<td><?php
								$tanggal = $list->tgl_pemakaian;
								$format = date('d-m-Y', strtotime($tanggal));
								echo $format;
								?></td>
								<td><?php
								$tanggal = $list->tgl_pemesanan;
								$format = date('d-m-Y', strtotime($tanggal));
								echo $format;
								?></td>
								<td><?php echo $list->no_hp;?></td>
								<td>
									<a href="<?php echo base_url();?>user/detail_gsg/<?php echo $list->formulir_id; ?>" class="btn btn-primary"><i class="fa fa-file-text"></i></a>
									<a href="<?php echo base_url();?>user/cetak_gsg/<?php echo $list->formulir_id; ?>" class="btn btn-info"><i class="fa fa-print"></i></a>
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
		<?php foreach($data_gsg as $list){ ?>
			<div class="modal fade" id="modal-delete<?php echo $list->formulir_id; ?>">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">

						<div class="modal-body">
							<?php echo form_open('user/delete_gsg', array('class' => 'form-horizontal')) ?>
							<div class="box-body">
								<center>
									<img src="<?php echo base_url().'/'; ?>dist/img/non.png" width="30%">
									<h4>Apakah Anda ingin menghapus data ini ?</h4>
								</center>
								<input type="hidden" name="formulir_id" value="<?php echo $list->formulir_id;?>">
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
		<?php foreach($data_gsg as $list){ ?>
			<div class="modal fade" id="modal-edit<?php echo $list->formulir_id; ?>">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Edit Pemesanan</h4>
						</div>
						<div class="modal-body">
							<?php echo form_open('user/edit_pesanan', array('class' => 'form-horizontal')) ?>
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Tanggal Pemakaian</label>
									<div class="col-sm-5">
										<input type="hidden" name="formulir_id" value="<?php echo $list->formulir_id;?>">
										<input type="date" name="tgl_pemakaian" class="form-control" required value="<?php echo $list->tgl_pemakaian;?>">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Untuk</label>
									<div class="col-sm-5">
										<input type="text" name="untuk" class="form-control" required value="<?php echo $list->untuk;?>" >
									</div>
								</div>	
								<div class="form-group">
									<label  class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-5">
										<input type="text" name="nama_pemesanan" class="form-control" required value="<?php echo $list->nama_pemesanan;?>" >
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Nomor HP</label>
									<div class="col-sm-5">
										<input type="number" name="no_hp" class="form-control" required value="<?php echo $list->no_hp;?>" >
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Tanggal Pemesanan</label>
									<div class="col-sm-5">
										<input type="date" name="tgl_pemesanan" class="form-control" required value="<?php echo $list->tgl_pemesanan;?>" >
										
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-5">
										<textarea name="alamat_pemesanan" rows="3" cols="60" required><?php echo $list->alamat_pemesanan; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Note</label>
									<div class="col-sm-5">
										<textarea name="note" rows="3" cols="60" ><?php echo $list->note; ?></textarea>
									</div>
								</div>
								<hr>
								<!-- /.box-header -->
								<div class="box-body no-padding">
									<table class="table table-bordered">
										<tr>
											<th style="width: 10px">No</th>
											<th>Tempat dan Fasilitas</th>
											<th>Biaya</th>
										</tr>
										<tr>
											<td>1.</td>
											<td>Pemakaian Hall, Koridor dan Lobby, <b>Pukul 11:00 - 17:00 WIB</b></td>
											<td>
											</td>
										</tr>
										<tr>
											<td>2.</td>
											<td>Stall Kosong 4 unit (<font color="blue"><i>biaya Rp. 300.000 / unit</i></font>)</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>3.</td>
											<td>Meja Bulat 10 unit + Meja Panjang 4 unit (<font color="blue"><i>biaya Rp. 50.000 / unit</i></font>)</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>4.</td>
											<td>Kursi 400 unit (<font color="blue"><i>biaya Rp. 5.000 / unit</i></font>)</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>5.</td>
											<td>Ruangan Hias / Ganti 1 unit</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>6.</td>
											<td>Ruangan Makan Keluarga / Panitia 1 unit</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>7.</td>
											<td>Sound System dan 2 Mic Wireless</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>8.</td>
											<td>Cadangan Listrik 3 Jam, Bila Listrik PLN Padam (<font color="blue"><i>biaya Rp. 500.000 / jam</i></font>)</td>
											<td>
											</td>
										</tr>
										<tr>
											<td>9.</td>
											<td>Pendingin Udara Hall, <b>Pukul 10:00 - 17:00</b></td>
											<td>
											</td>
										</tr>
										<tr>
											<td>10.</td>
											<td>Janitor dan Srcurity</td>
											<td>
												<input type="number" name="biaya1to11" class="form-control" required value="<?php echo $list->biaya1to11;?>">
											</td>
										</tr>
										<tr>
											<td>11.</td>
											<td>Guest House (<font color="blue"><i>biaya Rp. 500.000 / hari, khusus tamu resepsi</i></font>)</td>
											<td>
												<input type="number" name="biaya12" class="form-control" required value="<?php echo $list->biaya12;?>">
											</td>
										</tr>
										<tr>
											<td>12.</td>
											<td>Mini Garden (<font color="blue"><i>biaya Rp. 1.000.000</i></font>)</td>
											<td>
												<input type="number" name="biaya13" class="form-control" required value="<?php echo $list->biaya13;?>">
											</td>
										</tr>
										<tr>
											<td>13.</td>
											<td>Projector (<font color="blue"><i>biaya Rp. 1.000.000 /Unit</i>) <i>Kerusakan akibat jatuh menjadi tanggung jawab penyewa</td>
											<td>
												<input type="number" name="biaya14" class="form-control" required value="<?php echo $list->biaya14;?>">
											</td>
										</tr>
										<tr>
											<td>14.</td>
											<td>Orgen Tunggal, Pemain, Penyanyi (<font color="blue"><i>biaya Rp. 1.500.000 </i></font>)</td>
											<td>
												<input type="number" name="biaya15" class="form-control" required value="<?php echo $list->biaya15;?>">
											</td>
										</tr>
										<tr>
											<td>15.</td>
											<td>Biaya Menggunakan Catering Sendiri Rp. 1.500.000 </td>
											<td>
												<input type="number" name="biaya16" class="form-control" required value="<?php echo $list->biaya16;?>">
											</td>
										</tr>
										<tr>
											<td>16.</td>
											<td>Biaya menggunakan Sound System Sendiri atau peralatan listrik lainnya Rp. 500.000  </td>
											<td>
												<input type="number" name="biaya17" class="form-control" required value="<?php echo $list->biaya17;?>">
											</td>
										</tr>
										<tr>
											<td>17.</td>
											<td>Lain-lain</td>
											<td>
												<input type="number" name="biaya18" class="form-control" required value="<?php echo $list->biaya18;?>">
											</td>
										</tr>
										<tr>
											<td></td>
											<td align="right"><b>DP</b></td>
											<td>
												<input type="number" name="biaya_dp" class="form-control" required value="<?php echo $list->biaya_dp;?>">
											</td>
										</tr>
										<tr>
											<td></td>
											<td align="right"><b>Pelunasan</b></td>
											<td>
												<input type="number" name="biaya_pelunasan" class="form-control" required value="<?php echo $list->biaya_pelunasan;?>">
											</td>
										</tr>
									</table>
								</div>
								<!-- /.box-body -->	
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
		<!-- modal detail -->
		<?php foreach($data_gsg as $list){ ?>
			<div class="modal fade" id="modal-detail<?php echo $list->formulir_id; ?>">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Detail Pemesanan</h4>
						</div>
						<div class="modal-body">
							
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
		<?php }?>
		<!-- tutup modal detail -->
	</div>
	<!-- /.row -->
</div>
</section>
