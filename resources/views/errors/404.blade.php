<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap" rel="stylesheet">
	<link href="{{'template/assets/build/styles/ltr-core.css'}}" rel="stylesheet">
	<link href="{{'template/assets/build/styles/ltr-vendor.css'}}" rel="stylesheet">
	<link href="{{'template/assets/images/favicon.ico'}}" rel="shortcut icon" type="image/x-icon">
	<title>Not Found</title>
</head>

<body class="theme-light preload-active" id="fullscreen">
	<!-- BEGIN Preload -->
	<div class="preload">
		<div class="preload-dialog">
			<!-- BEGIN Spinner -->
			<div class="spinner-border text-primary preload-spinner"></div>
			<!-- END Spinner -->
		</div>
	</div>
	<!-- END Preload -->
	
	<!-- BEGIN Page Holder -->
	<div class="holder">
		<!-- BEGIN Page Wrapper -->
		<div class="wrapper">
			<!-- BEGIN Page Content -->
			<div class="content ">
				<div class="container-fluid">
					<div class="row no-gutters align-items-center justify-content-center h-100">
						<div class="col-md-8 col-lg-6 col-xl-4 text-center">
							<h1 class="widget20">404</h1>
							<h2 class="mb-3">Halaman tidak ditemukan</h2>
							<p class="mb-4">Halaman yang anda cari tidak ditemukan</p>
							<a href="{{ route('dashboard' )}}" class="btn btn-label-primary btn-lg btn-widest">Back to home</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END Page Content -->
		</div>
		<!-- END Page Wrapper -->
	</div>

	<!-- BEGIN Float Button -->
	<div class="float-btn float-btn-right">
		<button class="btn btn-flat-primary btn-icon mb-2" id="theme-toggle" data-toggle="tooltip" data-placement="right" title="Change theme">
			<i class="fa fa-moon"></i>
		</button>
		</a>
	</div>

	<!-- END Float Button -->
	<script type="text/javascript" src="{{'template/assets/build/scripts/mandatory.js'}}"></script>
	<script type="text/javascript" src="{{'template/assets/build/scripts/core.js'}}"></script>
	<script type="text/javascript" src="{{'template/assets/build/scripts/vendor.js'}}"></script>
</body>

</html>
