<script type="text/javascript">
$(document).ready(function () {
  $('#nav > li > a').click(function(){
     if ($(this).attr('class') != 'active'){
       $('#nav li ul').slideUp();
	   $(this).next().slideToggle();
	   $('#nav li a').removeClass('active');
	   $(this).addClass('active');
	 }
  });
});

</script>
<ul class="box" id="nav">
    <li id="<?php echo ! empty($this->mnMaster) ? $this->mnMaster : ''; ?>"><a href="#"><b>+ MASTER</b></a> <!-- Active -->
        <ul>
            <li><?php echo anchor('app/driver/','Driver'); ?></li>
            <li><a href="/app/driver/add">Tambah Driver</a></li>
            <li><a href="/app/unit">Unit</a></li>
            <li><a href="/app/unit/add">Tambah Unit</a></li>
        </ul>
    </li>
   <?php /*
    <li id="<?php echo ! empty($this->mnTransaksi) ? $this->mnTransaksi : ''; ?>"><a href="#"><b>+ TIME SHEET</b></a> <!-- Active -->
        <ul>
            <li><a href="/app/jam_kerja">Jam Kerja</a></li>
            <li><a href="/app/jam_kerja/add">Tambah Jam Kerja</a></li>
            <li><a href="/app/other">Lain-lain</a></li>
        </ul>
    </li>
     <li id="<?php echo ! empty($this->mnLaporan) ? $this->mnLaporan : ''; ?>"><a href="#"><b>+ REPORT</b></a> <!-- Active -->
        <ul>
            <li><a href="/app/rekapitulasi">Rekapitulasi Gaji Driver</a></li>
            <li><a href="/app/token">Bukti Gaji Driver</a></li>
        </ul>
    </li> /* ?>
</ul>