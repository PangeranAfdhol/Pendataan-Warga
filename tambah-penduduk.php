<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Penduduk</title>

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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Penduduk</h6>
            </div>
            <div class="card-body">
				<form action="" id="tambahPenduduk" method="post">
					<b>NIK</b>:<br/>
					<input type="number" class="form-control form-control-user" name="nik" required><br/>
					<b>No KK</b>:<br/>
					<input type="number" class="form-control form-control-user" name="no_kk" required><br/>
					<b>Nama</b>:<br/>
					<input type="text" class="form-control form-control-user" name="nama" required><br/>
					<b>TTL</b>:<br/>
					<div class="form-group row">
					  <div class="col-sm-3 mb-3 mb-sm-0">
						<input type="text" class="form-control form-control-user" name="tempatLahir" placeholder="Tempat Lahir..." required>
					  </div>
					  <div class="col-sm-3">
						<input type="date" class="form-control form-control-user" name="tglLahir" required>
					  </div>
					</div>
					<b>Jenis Kelamin</b>:<br/>
					<select name="gender" class="form-control form-control-user col-sm-3" required>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select><br/>
					<b>Alamat</b>:<br/>
					<textarea class="form-control form-control-user" name="alamat" required></textarea><br/>
					<b>RT/RW</b>:<br/>
					<div class="form-group row">
					  <div class="col-sm-3 mb-3 mb-sm-0">
						<input type="number" name="rt" placeholder="RT" class="form-control form-control-user" required/>
					  </div>
					  <div class="col-sm-3">
						<input type="number" name="rw" placeholder="RW" class="form-control form-control-user" required/>
					  </div>
					</div>
					<b>Dusun</b>:<br/>
					<input type="text" class="form-control form-control-user" name="dusun" required><br/>
					<b>Desa</b>:<br/>
					<input type="text" class="form-control form-control-user" name="desa" required /><br/>
					<b>No Telepon</b>:<br/>
					<input type="text" class="form-control form-control-user" name="no_telepon" required><br/>
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
						<option value="BPNT Kabupaten/Provinsi/Kemensos">BPNT Kabupaten/Provinsi/Kemensos</option>
						<option value="BLT Dana Desa">BLT Dana Desa</option>
						<option value="BLT Kemensos">BLT Kemensos</option>
						<option value="BST Kementerian/kemensos">BST Kementerian/kemensos</option>
						<option value="Jaminan Lanjut Usia">Jaminan Lanjut Usia</option>
					</select><br/>
					<button type="submit" class="btn btn-primary btn-icon-split btn-sm">
						<span class="icon text-white-100">
						  <i class="fas fa-plus"></i>
						</span>
						<span class="text">Tambah Penduduk</span>
					</button>
				</form>
				<?php
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
					$no_telepon = $_POST['no_telepon'];
					$pekerjaan = $_POST['pekerjaan'];
					
					$insertSql = mysqli_query($db, "INSERT INTO penduduk (nik, no_kk, nama, tempatLahir, tglLahir, gender, alamat, bantuan, rt, rw, desa, dusun, agama, no_telepon, pekerjaan) VALUES ('$nik', '$no_kk', '$nama', '$tempatLahir', '$tglLahir', '$gender', '$alamat', '$bantuan', '$rt', '$rw', '$desa', '$dusun', '$agama', '$no_telepon', '$pekerjaan')");
					if ($insertSql) {
						echo '<meta http-equiv="refresh" content="0;url=dashboard.php">';
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

	<script>
	function klikSubmit(){
		document.getElementById('tambahJadwal').submit();
	}
	</script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
