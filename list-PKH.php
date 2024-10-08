<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Penerima PKH</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Data Penerima PKH</h3><br>
              <a target="blank" href="cetak_pkh.php" class="btn btn-danger mb-3"><i class="fas fa-print m-1"></i>CETAK</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>No KK</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Alamat</th>
                      <th>Jenis Bantuan</th>
                      <th>RT/RW</th>
                      <th>Dusun</th>
					  <th>Desa</th>
					  <th>Agama</th>
					  <th>Pekerjaan</th>
					  <th>No Telepon</th>
					  <th>Jenis Kelamin</th>
					  <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>No KK</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Alamat</th>
                      <th>Jenis Bantuan</th>
                      <th>RT/RW</th>
                      <th>Dusun</th>
					  <th>Desa</th>
					  <th>Agama</th>
					  <th>Pekerjaan</th>
					  <th>No Telepon</th>
					  <th>Jenis Kelamin</th>
					  <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
					$dataSql = mysqli_query($db, "select nik, no_kk, nama, tempatLahir ,tglLahir, alamat, bantuan, rt, rw, dusun, desa, agama, pekerjaan, no_telepon, gender, year(NOW())-year(tglLahir) from penduduk where bantuan = 'PKH'");
					if (mysqli_num_rows($dataSql) > 0) {
						while($data = mysqli_fetch_array($dataSql)) {
					?>
					<tr>
          <td><?php echo $data['nik']; ?></td>
            <td><?php echo $data['no_kk']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['tempatLahir'] . ", " . $data['tglLahir']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['bantuan']; ?></td>
						<td><?php echo $data['rt'] . "/" . $data['rw']; ?></td>
						<td><?php echo $data['dusun']; ?></td>
						<td><?php echo $data['desa']; ?></td>
						<td><?php echo $data['agama']; ?></td>
						<td><?php echo $data['pekerjaan']; ?></td>
            <td><?php echo $data['no_telepon']; ?></td>
						<td><?php echo $data['gender']; ?></td>
            <td>
							<a href="edit-penduduk.php?nik=<?php echo $data['nik']; ?>" class="btn btn-success btn-circle btn-sm">
								<i class="fas fa-pen"></i>
							</a>
							<a href="delete-penduduk.php?nik=<?php echo $data['nik']; ?>" class="btn btn-danger btn-circle btn-sm">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php
						}
					}
					?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
