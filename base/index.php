<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        include "admin/koneksi.php";
        if(isset($_POST['login'])){
            $email = $_POST['username'];
            $pass = md5($_POST['password']);

            $hasil = mysqli_query($conn, "SELECT * FROM r_admin WHERE username='$email' and password='$pass'");
            $cek = mysqli_num_rows($hasil);

            if($cek > 0){
                $_SESSION['log'] = "true";
                header("location:admin/dashboard.php");
            }else{
                $_SESSION['log'] = "false";
                header("location:index.php?pesan=gagal");
            }
        }
    ?>
    <title>SMK Muara Indonesia</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="admin/foto/icons/icon.png"></link:icon>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../assets/js/jquery-ui/jquery-ui.css" type="text/css">
    <script src="../assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="../assets/js/jquery-ui/jquery-ui.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.js" type="text/javascript"></script>
    <style>
        body{
            background-image: url("https://1.bp.blogspot.com/-OFvZrpL9o1Q/XYW0IJg7eyI/AAAAAAAAACE/DnKXtvY10WkBr5CR2EPAExzgpRWGQ0rlACLcBGAsYHQ/s1600/bg.png");
            background-repeat: repeat;
            background-attachment: fixed;
        }
        .kotak{
            margin-top: 150px;
        }
        .kotak .input-group{
            margin-bottom: 20px;
        }
    </style>
</head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "gagal"){
                                    echo "Anda Gagal Login, Username dan Password anda salah !";
                                }else if($_GET['pesan'] == "logout"){
                                    echo "Anda Telah Logout";
                                }
                            }
                        ?>
                    </div>
                    <div class="panel panel-default">
                        <form method="post">
                            <div class="col-md-4 col-md-offset-4 kotak">
                                <h3>Silahkan Login ....</h3>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="email" class="form-control" placeholder="masukkan username anda" name="username">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" name="password" id="pass" class="form-control" placeholder="masukkan password anda">
                                    </div>
                                    <div class="input-group">
                                        <input type="submit" value="Login" class="btn btn-primary" name="login">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>