<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Warga</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <?php
  include("koneksi.php");
  session_start();
  ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include("sidebar.php"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <?php include("topBar.php"); ?>

        </nav>
        <!-- End of Topbar -->
	  <!-- Content Row -->
          <div class="container-fluid">
			<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Warga</h6>
            </div>
            <div class="card-body">
				<?php
				if (isset($_GET['nik'])){
					$id = $_GET['nik'];
					$cekId = mysqli_query($db, "SELECT * FROM penduduk WHERE nik = '$id'");
					if (mysqli_num_rows($cekId) > 0) {
						while ($edit = mysqli_fetch_array($cekId)) {
				?>
				<form action="" id="tambahPenduduk" method="post">
					<b>NIK</b>:<br/>
					<input type="number" class="form-control form-control-user" name="nik" value="<?php echo $edit['nik']; ?>" required><br/>
					<b>No KK</b>:<br/>
					<input type="number" class="form-control form-control-user" name="no_kk" value="<?php echo $edit['no_kk']; ?>" required><br/>
					<b>Nama</b>:<br/>
					<input type="text" class="form-control form-control-user" name="nama" value="<?php echo $edit['nama']; ?>" required><br/>
					<b>TTL</b>:<br/>
					<div class="form-group row">
					  <div class="col-sm-3 mb-3 mb-sm-0">
						<input type="text" class="form-control form-control-user" name="tempatLahir" value="<?php echo $edit['tempatLahir']; ?>" placeholder="Tempat Lahir..." required>
					  </div>
					  <div class="col-sm-3">
						<input type="date" class="form-control form-control-user" name="tglLahir" value="<?php echo $edit['tglLahir']; ?>" required>
					  </div>
					</div>
					<b>Alamat</b>:<br/>
					<textarea class="form-control form-control-user" name="alamat" required><?php echo $edit['alamat']; ?></textarea><br/>
					<b>RT/RW</b>:<br/>
					<div class="form-group row">
					  <div class="col-sm-3 mb-3 mb-sm-0">
						<input type="number" name="rt" placeholder="RT" class="form-control form-control-user" value="<?php echo $edit['rt']; ?>" required/>
					  </div>
					  <div class="col-sm-3">
						<input type="number" name="rw" placeholder="RW" class="form-control form-control-user" value="<?php echo $edit['rw']; ?>" required/>
					  </div>
					</div>
					<b>Dusun</b>:<br/>
					<input type="text" class="form-control form-control-user" name="dusun" value="<?php echo $edit['dusun']; ?>" required><br/>
					<b>Desa</b>:<br/>
					<input type="text" class="form-control form-control-user" name="desa" value="<?php echo $edit['desa']; ?>" required /><br/>
					<b>No Telepon</b>:<br/>
					<input type="text" class="form-control form-control-user" name="no_telepon" value="<?php echo $edit['no_telepon']; ?>" required /><br/>
					<b>Agama</b>:<br/>
					<select name="agama" class="form-control form-control-user col-sm-3" required>
						<option value="Islam">Islam</option>
						<option value="Protestan">Protestan</option>
						<option value="Katolik">Katolik</option>
						<option value="Buddha">Buddha</option>
						<option value="Hindu">Hindu</option>
						<option value="Kong Hu Cu">Kong Hu Cu</option>
					</select><br/>
					<b>Pekerjaan</b>:<br/>
					<select name="pekerjaan" class="form-control form-control-user col-sm-3" required>
						<option value="Belum Bekerja">Belum Bekerja</option>
						<option value="Swasta">Swasta</option>
						<option value="ASN">ASN</option>
						<option value="Wiraswasta">Wiraswasta</option>
						<option value="Pelajar">Pelajar</option>
					</select><br/>
					<b>Jenis Bantuan</b>:<br/>
					<select name="bantuan" class="form-control form-control-user col-sm-3" required>
						<option value="PKH">PKH</option>
						<option value="BPNT KABUPATEN/PROVINSI/KEMENSOS">BPNT KABUPATEN/PROVINSI/KEMENSOS</option>
						<option value="BLT Dana Desa">BLT Dana Desa</option>
						<option value="BLT KEMENSOS">BLT KEMENSOS</option>
						<option value="BST Kementerian/kemensos">BST Kementerian/kemensos</option>
						<option value="JAMINAN LANJUT USIA">JAMINAN LANJUT USIA</option>
					</select><br/>
					<b>Jenis Kelamin</b>:<br/>
					<select name="gender" class="form-control form-control-user col-sm-3" required>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select><br/>
					<button type="submit" class="btn btn-primary btn-icon-split btn-sm">
						<span class="icon text-white-100">
						  <i class="fas fa-plus"></i>
						</span>
						<span class="text">Edit Penduduk</span>
					</button>
				</form>
				<?php
						}
					}
				}
				if (isset($_POST['nik'])) {
					$nik = $_POST['nik'];
					$no_kk = $_POST['no_kk'];
					$nama = $_POST['nama'];
					$tempatLahir = $_POST['tempatLahir'];
					$tglLahir = $_POST['tglLahir'];
					$tglLahir = date("Y-m-d", strtotime($tglLahir));
					$gender = $_POST['gender'];
					$alamat = $_POST['alamat'];
					$bantuan = $_POST['bantuan'];
					$rt = $_POST['rt'];
					$rw = $_POST['rw'];
					$desa = $_POST['desa'];
					$dusun = $_POST['dusun'];
					$agama = $_POST['agama'];
					$pekerjaan = $_POST['pekerjaan'];
					$no_telepon = $_POST['no_telepon'];
					
					$insertSql = mysqli_query($db, "UPDATE penduduk SET nik = '$nik', no_kk = '$no_kk', nama = '$nama', tempatLahir = '$tempatLahir', tglLahir = '$tglLahir', gender = '$gender', alamat = '$alamat', bantuan = '$bantuan', rt = '$rt', rw = '$rw', dusun = '$dusun', desa = '$desa', agama = '$agama', no_telepon = '$no_telepon' WHERE nik = '$id'");
					if ($insertSql) {
						echo '<meta http-equiv="refresh" content="0;url=data-penduduk.php">';
					}
				}
				?>
			</div>
			</div>
		  </div>
        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2023</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
