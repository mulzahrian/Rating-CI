<?php
$data = $this->Md_pengguna->getPenggunaByUsername($this->session->userdata('username'));
?>
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url().'/';?>dist/img/caltex_logo.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $data->nama?></p>
				<a><?php echo $data->hak_akses?></a>
			</div>
		</div>
		
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">Menu</li>
			<li>
				<a href="<?php echo base_url();?>user">
					<i class="fa fa-calendar"></i> <span>EVENT</span>
				</a>
			</li>
			
			
			<!-- <li class="header">MANAGEMENT</li>
			<li><a href="<?php echo base_url();?>security/jadwal"><i class="fa fa-folder-o"></i> <span>Kelola Jadwal</span></a></li>
			 -->
		</ul>

	</section>
	<!-- /.sidebar -->

</aside>
