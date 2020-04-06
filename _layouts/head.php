<head>
	
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?= isset($title)?$title:'E-TPU Surakarta' ?></title>

	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= templates() ?>plugins/fontawesome-free/css/all.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?= templates() ?>dist/css/adminlte.min.css">
  
	<!-- summernote -->
	<link rel="stylesheet" href="<?= templates() ?>plugins/summernote/summernote-bs4.css">

	<!-- DataTables -->
  	<link rel="stylesheet" href="<?= templates() ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= templates() ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="<?= templates() ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

	<!-- Toastr -->
	<link rel="stylesheet" href="<?= templates() ?>plugins/toastr/toastr.min.css">

	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= templates() ?>dist/css/adminlte.min.css">

	<!-- Google Font: Source Sans Pro -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
	
	<!-- Leaflet Panel Layers -->
    <link rel="stylesheet" href="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.css" />

    <!-- Custom Inline CSS -->
    <style type="text/css">
    	
    	#mapid {

        	height: 100vh;
    	}

    	.icon {

	        display: inline-block;
	        margin: 2px;
	        height: 16px;
	        width: 16px;
	        background-color: #ccc;
	      }

	    .icon-bar {

	    	background: url('assets/js/leaflet-panel-layers-master/examples/images/icon/bar.png');
	    }
    </style>
</head>