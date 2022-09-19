<?php
include "header.php";
include "koneksi.php";
?>

<?php
$a = mysqli_query($conn, "SELECT * FROM db_pendaftaran");
?>

<div class="col-md-10">
	<h3>Selamat datang</h3>	
    <h3>Aplikasi Pendaftaran Sekolah</h3>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php
include "footer.php";
?>