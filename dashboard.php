<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="icon" href="img/tt.jpg" type="image/x-icon">
  <?php
  include("koneksi.php");
  session_start();
  if (empty($_SESSION['username'])) {
	  echo '<meta http-equiv="refresh" content="0;url=login.php">';
  }
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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Warga</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
						<?php
						$totalPenduduk = mysqli_query($db, "SELECT COUNT(*) AS 'Jumlah' FROM penduduk");
						while($total = mysqli_fetch_array($totalPenduduk)) {
							echo $total['Jumlah'] . " orang";
						}
						?>
					  </div>
            <br><a href="data-penduduk.php"><p class="card-text text-black">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Warga Yang Menerima <b>"PKH"</b></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
						$totalPenduduk = mysqli_query($db, "SELECT COUNT(*) AS 'Jumlah' FROM penduduk where bantuan ='PKH'");
						while($total = mysqli_fetch_array($totalPenduduk)) {
							echo $total['Jumlah'] . " orang";
						}
						?>
           </div>
            <br><a href="list-PKH.php"><p class="card-text text-black">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Warga Yang Menerima <b>"BPNT Kabupaten/Provinsi/Kemensos"</b></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
						$totalPenduduk = mysqli_query($db, "SELECT COUNT(*) AS 'Jumlah' FROM penduduk where bantuan ='BPNT Kabupaten/Provinsi/Kemensos'");
						while($total = mysqli_fetch_array($totalPenduduk)) {
							echo $total['Jumlah'] . " orang";
						}
						?>
           </div>
            <br><a href="list-bpnt.php"><p class="card-text text-black">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Warga Yang Menerima <b>"BLT Dana Desa"</b></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
						$totalPenduduk = mysqli_query($db, "SELECT COUNT(*) AS 'Jumlah' FROM penduduk where bantuan ='BLT Dana Desa'");
						while($total = mysqli_fetch_array($totalPenduduk)) {
							echo $total['Jumlah'] . " orang";
						}
						?>
           </div>
            <br><a href="list-BLT-desa.php"><p class="card-text text-black">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Warga Yang Menerima <b>"BLT Kemensos"</b></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
						$totalPenduduk = mysqli_query($db, "SELECT COUNT(*) AS 'Jumlah' FROM penduduk where bantuan ='BLT Kemensos'");
						while($total = mysqli_fetch_array($totalPenduduk)) {
							echo $total['Jumlah'] . " orang";
						}
						?>
           </div>
            <br><a href="list-BLT-kemensos.php"><p class="card-text text-black">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Warga Yang Menerima <b>"BST Kementerian/kemensos"</b></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
						$totalPenduduk = mysqli_query($db, "SELECT COUNT(*) AS 'Jumlah' FROM penduduk where bantuan ='BST Kementerian/kemensos'");
						while($total = mysqli_fetch_array($totalPenduduk)) {
							echo $total['Jumlah'] . " orang";
						}
						?>
           </div>
            <br><a href="list-BST.php"><p class="card-text text-black">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Warga Yang Menerima <b>"Jaminan Lanjut Usia"</b></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
						$totalPenduduk = mysqli_query($db, "SELECT COUNT(*) AS 'Jumlah' FROM penduduk where bantuan ='Jaminan Lanjut Usia'");
						while($total = mysqli_fetch_array($totalPenduduk)) {
							echo $total['Jumlah'] . " orang";
						}
						?>
           </div>
            <br><a href="list-Jaminan-Lanjut-Usia.php"><p class="card-text text-black">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <!-- /.container-fluid -->

      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2023 </span>
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
