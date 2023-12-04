<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <base href="/">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="MobileOptimized" content="width"/>
    <meta name="description" content="Mordenize"/>
    <meta name="author" content=""/>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="src/public/images/logos/favicon.ico"/>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="src/public/libs/owl.carousel/dist/assets/owl.carousel.min.css">

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="src/public/css/style.min.css"/>
    <link rel="stylesheet" href="src/public/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <title><?= $title ?> | SODEC</title>
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <img src="src/public/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid"/>
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="src/public/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid"/>
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="./index.html" class="text-nowrap logo-img">
                    <img src="src/public/images/logos/dark-logo.svg" class="dark-logo" width="180" alt=""/>
                    <img src="src/public/images/logos/light-logo.svg" class="light-logo" width="180" alt=""/>
                </a>
                <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8 text-muted"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
			<?php
                require "sidebar.php";
			?>

            <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
                <div class="hstack gap-3">
                    <div class="john-img">
                        <img src="src/public/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40"
                             alt="">
                    </div>
                    <div class="john-title">
                        <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                        <span class="fs-2 text-dark">Designer</span>
                    </div>
                    <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                            aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                        <i class="ti ti-power fs-6"></i>
                    </button>
                </div>
            </div>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
		<?php
		require "header.php"
		?>

        <!--  Header End -->
