<?php
require_once 'koneksi.php';
if (isset($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $koneksi = mysqli_query($db, "SELECT * FROM account WHERE username='" . $username . "'");

    if (mysqli_num_rows($koneksi) == 0) {
        $_SESSION['error'] = 'Data Tidak Ditemukan!';
        header("location:lupapassword.php?pesan=gagal");
    } else {
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body class="bg-gradient-primary">

        <div class="hero">
            <div class="row justify-content-center pt-5">
                <div class="col-md-5">
                    <div class="card pb-10">
                        <div class="formhero">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <center>
                                        <h1>Ganti Password</h1>
                                        <?php
                                        if (isset($_GET['pesan'])) {
                                            if ($_GET['pesan'] == "gagal") {
                                                echo "Gagal update!";
                                            } else if ($_GET['pesan'] == "truncane") {
                                                echo "gagal hapus";
                                            } else if ($_GET['pesan'] == "berhasil") {
                                                echo "Ganti Password Berhasil";
                                            }
                                        }
                                        ?>
                                        <form role="form" method="POST" action="updatelupa.php">
                                            <div class="form-group">
                                                <label>
                                                    <h4> Username</h4>
                                                </label>
                                                <input type="text" class="form-control" name="username" id="username" value="<?= $username ?>" readonly="true">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">
                                                    <h4>Password Baru</h4>
                                                </label>
                                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                            </div>
                                </div>
                                <div class="form-group">
                                    <center> <button type="submit" class="btn btn-success rounded-pill px-4 py-2">Submit</button><br><br>
                                </div>

                                </form>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>

    </html>
<?php
} ?>