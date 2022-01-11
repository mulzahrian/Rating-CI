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
				<a href="<?php echo base_url();?>admin">
					<i class="fa fa-dashboard"></i> <span>Home</span>
				</a>
			</li>
			
			<li><a href="<?php echo base_url();?>admin/kritik"><i class="fa fa-calendar"></i> <span>Kelola Acara</span></a></li>
			<li><a href="<?php echo base_url();?>admin/pengguna"><i class="fa fa-users"></i> <span>Kelola Pengguna</span></a></li>
		</ul>

	</section>
	<!-- /.sidebar -->

</aside>
