<section class="content-header">
	<h1>
		Form Pemesanan Gedung Serba Guna (GSG)
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid">
				<!-- /.box-header -->
				<div class="box-body">
					<h5 align="center">
					<b align="center">Formulir Pemesanan Gedung Serba Guna</b><br>
					<b>Politeknik Caltex Riau</b>
					</h5>
					<table>
						<tr>
							<td style="width: 50px">Tanggal&nbsp;Pemakaian </td>
							<td>&nbsp;:&nbsp; </td>
							<td>&nbsp;<?php $tanggal2 = $data_gsg->tgl_pemakaian;
							$format2 = date('d/m/Y', strtotime($tanggal2));
							echo '<span style="background-color:#7FFF00;">'. $format2 . '</span>';?> </td>
						</tr>
						<tr>
							<td>Untuk </td>
							<td>&nbsp;: </td>
							<td><?php echo $data_gsg->untuk;?> </td>
						</tr>
						<tr>
							<td>Nama </td>
							<td>&nbsp;: </td>
							<td><?php echo $data_gsg->nama_pemesanan;?> </td>
						</tr>
						<tr>
							<td>Nomor&nbsp;HP </td>
							<td>&nbsp;: </td>
							<td><?php echo $data_gsg->no_hp;?> </td>
						</tr>
						<tr>
							<td>Tanggal&nbsp;Pemesanan </td>
							<td>&nbsp;: </td>
							<td><?php
							$tanggal = $data_gsg->tgl_pemesanan;
							$format = date('d/m/Y', strtotime($tanggal));
							echo $format;
							?> </td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td>&nbsp;: </td>
							<td><?php echo $data_gsg->alamat_pemesanan;?> </td>
						</tr>
						<tr>
							<td>Note </td>
							<td>&nbsp;: </td>
							<td><?php echo $data_gsg->note;?> </td>
						</tr>
					</table>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<table class="table table-bordered">
							<?php 
							function rupiah($angka){

								$hasil_rupiah = number_format($angka,2,',','.');
								return $hasil_rupiah;
							}
							?>
							<tr>
								<th>Tempat dan Fasilitas</th>
								<th></th>
								<th style="width: 150px">Biaya</th>
							</tr>
							<tr>
								<td >
									1.  Pemakaian Hall, Koridor dan Lobby, <b>Pukul 11:00 - 17:00 WIB</b><br>
									2.  Stall Kosong 4 unit (<font color="blue"><i>biaya Rp. 300.000 / unit</i></font>)<br>
									3.  Meja Bulat 10 unit + Meja Panjang 4 unit (<font color="blue"><i>biaya Rp. 50.000 / unit</i></font>) <br>
									4.  Kursi 400 unit (<font color="blue"><i>biaya Rp. 5.000 / unit</i></font>)<br>
									5.  Ruangan Hias / Ganti 1 unit<br>
									6.  Ruangan Makan Keluarga / Panitia 1 unit<br>
									7.  Sound System dan 2 Mic Wireless<br>
									8.  Cadangan Listrik 3 Jam, Bila Listrik PLN Padam (<font color="blue"><i>biaya Rp. 500.000 / jam</i></font>)<br>
									9.  Pendingin Udara Hall, <b>Pukul 10:00 - 17:00</b><br>
									10. Janitor dan Security<br>

								</td>
								<td><br><br><br><br><br>Rp.</td>
								<td align="right"><br><br><br><br><br> <?php echo rupiah($data_gsg->biaya1to11);?></td>
							</tr>
							<tr>
								<td>11. Guest House (<font color="blue"><i>biaya Rp. 500.000 / hari, khusus tamu resepsi</i></font>)</td>
								<td>Rp.</td>
								<td align="right"><?php echo rupiah($data_gsg->biaya12);?></td>
							</tr>
							<tr>
								<td>12. Mini Garden (<font color="blue"><i>biaya Rp. 1.000.000</i></font>)</td>
								<td>Rp.</td>
								<td align="right"> <?php echo rupiah($data_gsg->biaya13);?>
							</td>
							</tr>
							<tr>
								<td>13. Projector (<font color="blue"><i>biaya Rp. 1.000.000 /Unit</i>) <i>Kerusakan akibat jatuh menjadi tanggung jawab penyewa</i></font>)</td>
								<td>Rp.</td>
								<td align="right"> <?php echo rupiah($data_gsg->biaya14);?>
							</td>
							</tr>
							<tr>
								<td>14. Orgen Tunggal, Pemain, Penyanyi (<font color="blue"><i>biaya Rp. 1.500.000 </i></font>)</td>
								<td>Rp.</td>
								<td align="right"> <?php echo rupiah($data_gsg->biaya15);?>
							</td>
							</tr>
							<tr>
								<td>15. Biaya Menggunakan Catering Sendiri Rp. 1.500.000 </td>
								<td>Rp.</td>
								<td align="right"> <?php echo rupiah($data_gsg->biaya16);?>
							</td>
							</tr>
							<tr>
								<td>16. Biaya menggunakan Sound System Sendiri atau peralatan listrik lainnya Rp. 500.000  </td>
								<td>Rp.</td>
								<td align="right"><?php echo rupiah($data_gsg->biaya17);?>
							</td>
							</tr>
							<tr>
								<td>17. Lain-lain</td>
								<td>Rp.</td>
								<td align="right"><?php echo rupiah($data_gsg->biaya18);?>
							</td>
							</tr>
							<tr>
								<td align="right"><b>DP</b></td>
								<td>Rp.</td>
								<td align="right">
									<font color="blue"><?php echo rupiah($data_gsg->biaya_dp);?></font>
							</td>
							</tr>
							<tr>
									<td align="right"><b>Pelunasan</b></td>
									<td>Rp.</td>
									<td align="right"><font color="blue"><?php echo rupiah($data_gsg->biaya_pelunasan);?></font>
									</
								</td>
								</tr>
								<tr>
									<td align="right"><b>Total</b></td>
									<td>Rp.</td>
									<td align="right"><font color="green">
									
											<?php 
											$total = ($data_gsg->biaya1to11 + $data_gsg->biaya12 + $data_gsg->biaya13 + $data_gsg->biaya14 + $data_gsg->biaya15 + $data_gsg->biaya16 + $data_gsg->biaya17 + $data_gsg->biaya18);
											echo rupiah($total);
											?>
										</font>
									</td>

								</tr>
								<tr>
									<td align="right"><b>Sisa</b></td>
									<td>Rp.</td>
									<td align="right"><font color="red">
										<?php 
										if ($total <= $data_gsg->biaya_dp) {
											echo "0,00";
										}
										else{
											$sisa = $total - ($data_gsg->biaya_dp + $data_gsg->biaya_pelunasan);
											echo rupiah($sisa);
										}
										?>
									</font>
									</td>
								</tr>
							</table>
							<p align="right">Pekanbaru, <?php echo date("d-m-Y");?></p>
							<table class="table table-striped">
								<tr>
									<td align="center">
										Penerima
									</td >
									<td align="center">
										Pemesan
									</td>
								</tr>
								<tr>
									<td align="center">
										<br>
										(<b>Nowo Budiono</b>)
									</td>
									<td align="center">
										<br>
										(<b><?php echo $data_gsg->nama_pemesanan;?></b>)
									</td>
								</tr>
							</table>
							<!-- <p>yang menerima pesanan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; yang memesan</p><br>
							<p>(Nowo Budiono)&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;(<?php echo $data_gsg->nama_pemesanan;?>)</p>
							 -->
						</div>
						<!-- /.box-body -->
					</div>
				<!-- /.box-body -->
			</div>
		<!-- /.box-body -->
	</div>
							<!-- /.box -->

</section>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function(event) {
		window.print()
	})
</script>