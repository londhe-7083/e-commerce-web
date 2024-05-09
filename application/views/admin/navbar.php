<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="<?=base_url()?>admin_assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url()?>admin_assets/images/favicon.ico" />
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="<?=base_url()?>admin"><img
                        src="<?=base_url()?>admin_assets/images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="<?=base_url()?>admin"><img
                        src="<?=base_url()?>admin_assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="orders" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Orders</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="orders">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?=base_url()?>admin/pending_orders">Pending Orders</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?=base_url()?>admin/dispatched_orders"> 
                                        Dispatch Orders</a></li>
                          
                                <li class="nav-item"> <a class="nav-link" href="<?=base_url()?>admin/deliver_order"> 
                                        Delivered Orders</a></li>
                            
                                <li class="nav-item"> <a class="nav-link" href="<?=base_url()?>admin/product_list"> 
                                        Rejected Orders</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link" data-toggle="collapse" href="contact"
                            aria-controls="ui-basic" aria-expanded="false">
                            <span class="menu-title">Contact</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="contact">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?=base_url()?>admin/contact">Contact</a></li>
                            </ul>

                        </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="category" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Category</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="category">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link" href="<?=base_url()?>admin/category">Category</a></li>
                                <li class="nav-item">
                                     <a class="nav-link" href="<?=base_url()?>admin/sub_category">Sub Category</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Product</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="product">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="<?=base_url()?>admin/add_product">Add Product</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?=base_url()?>admin/product_list"> Sub
                                        Product List</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="<?=base_url()?>admin/manage_slider">
                            <span class="menu-title">Manage Slider</span>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>



            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">