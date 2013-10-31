<?php $this->load->view($header); ?>


<div id="main">

	<!-- Tray -->
	<div id="tray" class="box">

		<p class="f-left box">

			<!-- Switcher -->
			<span class="f-left" id="switcher">
				<a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="<?php echo base_url(); ?>source/admin/design/switcher-1col.gif" alt="1 Column" /></a>
				<a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="<?php echo base_url(); ?>source/admin/design/switcher-2col.gif" alt="2 Columns" /></a>
			</span>

			<strong>Artist Management System</strong>

		</p>

		<p class="f-right">Welcome, <strong><?php echo $this->session->userdata('name'); ?> !</strong> | <a href="/app/dashboard" id="logout">Dashboard</a> <strong><a href="/app-panel/logout" id="logout">Log out</a></strong></p>

	</div> <!--  /tray -->

	<hr class="noscreen" />

	<!-- Menu -->
	<div id="menu" class="box">

		<!-- menu_top put here -->

	</div> <!-- /header -->

	<hr class="noscreen" />

	<!-- Columns -->
	<div id="cols" class="box">

		<!-- Aside (Left Column) -->
		<div id="aside" class="box">

			<div class="padding box">

				<!-- Logo (Max. width = 200px) -->
				<p id="logo"><a href="#"><img src="<?php echo base_url(); ?>source/admin/tmp/logo.gif" alt="Our logo" title="Visit Site" /></a></p>

			</div> <!-- /padding -->

<?php $this->load->view('app/includes/menu_left'); ?>

		</div> <!-- /aside -->

		<hr class="noscreen" />

		<!-- Content (Right Column) -->
		<div id="content" class="box">

<?php $this->load->view($content); ?>

		</div> <!-- /content -->

	</div> <!-- /cols -->



<?php $this->load->view('app/includes/footer'); ?>
