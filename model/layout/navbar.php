<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">         <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
  <a  class="navbar-brand" href="home">ABSENSI SISWA PRAKERIN</a>
  </div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right visible-xs visible-sm">
<li id="output_m"></li>
37
<?php
	if (isset($_SESSION['pb'])) {
   			$link=array("","add_siswa","siswa","absen","absensi","req_catatan","catatan", "katasandi&id=$_SESSION[id]","keluar");
			$name=array("","Tambah Siswa Prakerin","Daftar Siswa Prakerin","Konfirmasi Absen","Lihat Absensi","Konfirmasi Kegiatan","Catatan Kegiatan","Ubah Katasandi","Keluar");

			for ($i=1; $i <= count($link)-1 ; $i++) {
				echo "<li><a href='$link[$i]'>$name[$i]</a></li>";
			}
   		} elseif (isset($_SESSION['sw'])) {
			$link=array("","absen","absensi","catatan","keluar");
			$name=array("","Absen","Data Absensi","Catatan Kegiatan","Keluar");
			
			for ($i=1; $i <= count($link)-1 ; $i++) {
				
				echo "<li><a href='$link[$i]'>$name[$i]</a></li>";
			}
   		}
 ?>
</ul>
</div>