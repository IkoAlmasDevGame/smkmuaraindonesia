<?php
include "koneksi.php";
include "header.php";
?>

<?php
$a = mysqli_query($conn, "SELECT * FROM db_dagangan_laku");
?>

<div class="col-md-10">
	<h3>Selamat datang</h3>	
    <h3>Aplikasi Penjualan Koperasi Sederhana</h3>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php
include "footer.php";
?>