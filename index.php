<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin 2 - Tables</title>

	<!-- config ke file boostrap -->
	<link href="all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	
	<link href="sb-admin-2.min.css" rel="stylesheet">

	
	<link href="dataTables.bootstrap4.min.css" rel="stylesheet">
	<!-- akhir dari config ke file css -->

</head>

<body id="page-top">

	
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
			</a>
			<li class="nav-item active">
				<a class="nav-link" href="tables.html">
					<i class="fas fa-fw fa-table"></i>
					<span>Halaman utama</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

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

					<!-- ini adalah halaman pencarian -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>
						<!-- Nav Item - Alerts -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bell fa-fw"></i>
								<!-- Counter - Alerts -->
								<span class="badge badge-danger badge-counter">3+</span>
							</a>
							<!-- Dropdown - Alerts -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header">
								

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- config database ke halaman utama -->
					<h1 class="h3 mb-2 text-gray-800">Noted</h1>
					<p class="mb-4">Data calon dan perolehan surat suara ini diambil dari database mysqli dan menampilkan data dari database ke halaman utama</p>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Pemumungutan surat suara</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<form method="POST" class="form-inline" action="create.php">
											<div class="form-group">
										
										</form>
										<br />
										<table class="table table-bordered alert-warning table-hover">
											<thead>
												<th>Nama</th>
												<th>hasil peroleh calon</th>
												
											</thead>
											<tbody>
												<?php
												require 'class.php';
												$conn = new db_class();
												$read = $conn->read();
												while ($fetch = $read->fetch_array()) {
													?>
													<tr>
														<td><?php echo $fetch['name'] ?></td>
														<td><?php echo $fetch['earned_vote'] ?></td>
														<td>
															<center><a class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</a> | <a class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center>
														</td>
													</tr>
												<?php
											}
											?>
											</tbody>
										</table>
	<!-- akhir config database ke halaman utama -->
	<!-- Footer -->
	<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright &copy; Abdul robi padri</span>
			</div>
		</div>
	</footer>
	<!-- akhir dari fotter -->

</body>

</html>