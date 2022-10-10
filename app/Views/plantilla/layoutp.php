<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comalcalco Tabasco | 2021-2024</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="<?php echo base_url().'/publica/css/fontawesome/css/all.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'/publica/css/adminlte.min.css?v=3.2.0'; ?>">
</head>

	<body class="hold-transition sidebar-mini sidebar-collapse">

		<div class="wrapper">

			<nav class="main-header navbar navbar-expand navbar-white navbar-light">

				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="../../index3.html" class="nav-link">Home</a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Contact</a>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">

					</li>

					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#"><i class="fa fa-door-open"></i></a>

						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

							<a href="#" class="dropdown-item">
								<div class="media">
									<img src="<?php echo base_url().'/publica/img/user3-128x128.jpg'; ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
									<div class="media-body">
										<h3 class="dropdown-item-title"> Alejandra Ramírez <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span></h3>
										<p class="text-sm">Administrador</p>
									</div>
								</div>
							</a>

							<div class="dropdown-divider"></div>

							<a href="#" class="dropdown-item dropdown-footer">Cerrar Sessión</a>

						</div>
					</li>

				</ul>
			</nav>


			<aside class="main-sidebar sidebar-dark-primary elevation-4">

				<a href="<?php echo base_url(); ?>" class="brand-link">
					<img src="<?php echo base_url().'/publica/img/AdminLTELogo.png'; ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">AdminLTE 3</span>
				</a>

				<div class="sidebar">

					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="<?php echo base_url().'/publica/img/user3-160x160.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
						</div>
						<div class="info">
							<a href="#" class="d-block">Alejandra Ramírez</a>
						</div>
					</div>

					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

							<li class="nav-item">
								
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Catalogos	<i class="right fas fa-angle-left"></i></p>
							</a>

								<ul class="nav nav-treeview">
									
									<li class="nav-item">
										<a href="<?php echo base_url().'/catalogos/paises'; ?>" class="nav-link active">
											<i class="far fa-circle nav-icon"></i><p>Paises</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo base_url().'/catalogos/estados'; ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i><p>Estados</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="far fa-circle nav-icon"></i><p>Municipios</p>
										</a>
									</li>

								</ul>

							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-th"></i><p> Widgets	<span class="right badge badge-danger">Nuevo</span>	</p>
								</a>
							</li>


							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-tree"></i>
									<p>
										UI Elements
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="../UI/general.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>General</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../UI/icons.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Icons</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../UI/buttons.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Buttons</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../UI/sliders.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Sliders</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../UI/modals.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Modals & Alerts</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../UI/navbar.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Navbar & Tabs</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../UI/timeline.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Timeline</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../UI/ribbons.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Ribbons</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-edit"></i>
									<p>
										Forms
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="../forms/general.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>General Elements</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../forms/advanced.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Advanced Elements</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../forms/editors.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Editors</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../forms/validation.html" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Validation</p>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="nav-item">
								<a href="../kanban.html" class="nav-link">
									<i class="nav-icon fas fa-columns"></i>
									<p>
										Kanban Board
									</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon far fa-circle text-info"></i>
									<p>Informational</p>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</aside>

			<div class="content-wrapper">

			<?= $this->renderSection('contenido'); ?>

			</div>

			<footer class="main-footer">
				<div class="float-right d-none d-sm-block">
					<b>Version</b> 3.2.0
				</div>
				<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
			</footer>

			<aside class="control-sidebar control-sidebar-dark">

			</aside>

		</div>


		<script src="<?php echo base_url().'/publica/js/jquery.js'; ?>"></script>

		<script src="<?php echo base_url().'/publica/js/bootstrap.bundle.min.js'; ?>"></script>

		<script src="<?php echo base_url().'/publica/js/adminlte.min.js?v=3.2.0'; ?>"></script>

	</body>
	</html>
