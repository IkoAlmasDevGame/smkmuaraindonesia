<?php
include "header.php";
include "koneksi.php";
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Lihat Nama Guru SMK MI</h3>

<form method="POST">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Nama Guru di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br>
<table class="table table-hover table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Guru</th>
        <th>Mata Pelajaran</th>
        <th>Kelas</th>
    </tr>
    <?php
    if(isset($_POST['cari'])){
        $no = 1;
        $sCari = $_POST['cari'];
        $sNamacari = mysqli_query($conn, "SELECT * FROM db_guru WHERE nama_guru like '%$sCari%'");
        while($dt = mysqli_fetch_array($sNamacari)){
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $dt['nama_guru'];?></td>
            <td><?php echo $dt['matapelajaran'];?></td>
            <td><?php echo $dt['kelas'];?></td>
        </tr>
        <?php
        }
    }
    ?>
</table>

<?php
include "footer.php";
?>