<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inventaris Portal API</title>
	<!-- CSS Module -->
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" href="/vendor/font-awesome/css/fontawesome-all.min.css">
		<!-- DataTable -->
		<link rel="stylesheet" type="text/css" href="/vendor/datatable/css/dataTables.bootstrap4.min.css">
</head>
<body>
	@include('app.header')

	@yield('content')

	<!-- JS Module -->
		<!-- Bootstrap -->
		<script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Jquery -->
		<script type="text/javascript" src="/vendor/jquery-3.3.1.min.js"></script>
		<!-- Sweet Alert -->
		<script type="text/javascript" src="/vendor/sweetalert/sweetalert2-all.js"></script>
		<!-- DataTable -->
		<script type="text/javascript" src="/vendor/datatable/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="/vendor/datatable/js/dataTables.bootstrap4.min.js"></script>
		<!-- Vue 2 -->
		<script type="text/javascript" src="/vendor/vue/vue.min.js"></script>

		<!-- MyApp -->
		<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>