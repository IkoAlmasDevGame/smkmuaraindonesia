<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    include "log/cek.php";
    include "koneksi.php";
    include "javascript.php";
    include "stylesheet.php";
    ?>
    <title>SMK Muara Indonesia</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="foto/icons/icon.png"></link:icon>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../../assets/js/jquery-ui/jquery-ui.css" type="text/css">
    <script src="../../assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="../../assets/js/jquery-ui/jquery-ui.js" type="text/javascript"></script>
    <script src="../../assets/js/jquery.js" type="text/javascript"></script>
</head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a href="https://www.smkmuaraindonesia.sch.id/" class="navbar-brand" target="_blank">SMK MUARA INDONESIA</a>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
					                <span class="icon-bar"></span>
					                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Hi, 
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM r_admin");
                                        if($dn = mysqli_fetch_array($query)){
                                            echo $_SESSION['nama'] = $dn['nama'];
                                    }?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="col-xs-10" style="margin-left: 10px;">
					            <a class="thumbnail">
						        <img class="img-responsive" src="foto/profile.jpeg">
					        </a>
				         </div>
                         <div class="row"></div>
		                    <ul class="nav nav-pills nav-stacked">
                                    <button onclick="myFunctions()" class="dropbtns btn btn-primary">SMK Muara Indonesia</button>
                                    <div id="myDropdowns" class="dropdowns-content">
                                    <a href="dashboard.php" class="active"><span class="glyphicon glyphicon-home">  Dashboard Home SMK</span></a>
                                    <a href="guru.php"><span class="glyphicon glyphicon-briefcase"></span>  Document GURU</a>
                                    <a href="struktur.php"><span class="glyphicon glyphicon-briefcase"></span>  Document Struktur Organisasi</a>
                                    <a href="isp.php"><span class="glyphicon glyphicon-briefcase"></span>  Document ISP</a>
                                    <a href="dokumen.php"><span class="glyphicon glyphicon-briefcase"></span>  Document Sekolah</a>
			                        <a href="daftar.php"><span class="glyphicon glyphicon-plus"></span>  Pendaftaran Murid Baru</a>
                                    <a href="maps.php"><span class="glyphicon glyphicon-map-marker"></span>  ALAMAT SEKOLAH</a>
                                    <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a>
                                </div>
                                <br><br>
                                    <button onclick="myFunctions2()" class="dropbtns btn btn-primary">Koperasi SMK MI</button>
                                    <div class="dropdowns-content" id="myDropdown">
                                        <a href="dashboard-koperasi.php" class="active"><span class="glyphicon glyphicon-home">  Dashboard Koperasi SMK</span></a>
                                        <a href="dagangan.php"><span class="glyphicon glyphicon-briefcase">  Data Barang</span></a>
                                        <a href="dagangan_laku.php"><span class="glyphicon glyphicon-briefcase">  Entry Penjualan</span></a>
                                </div>			
		                    </ul>
                        </div>
                    </div>   
                </main>
            </div>
        </div>
    <div class="col-md-10">