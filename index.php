<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jemma - Coffe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        /* ===== BROWN THEME ===== */
        :root {
            --brown-dark: #6B3A1F;
            --brown-main: #A0522D;
            --brown-medium: #C68B57;
            --brown-light: #E8D5C0;
            --brown-pale: #FDF6EE;
        }

        /* Navbar atas */
        .navbar-top {
            background-color: var(--brown-dark) !important;
        }

        /* Sidebar */
        .sidebar-nav {
            background-color: var(--brown-pale) !important;
            border-color: var(--brown-medium) !important;
        }

        /* Nav-link aktif di sidebar */
        .sidebar-nav .nav-link.active {
            background-color: var(--brown-main) !important;
            color: #fff !important;
        }

        /* Nav-link hover di sidebar */
        .sidebar-nav .nav-link:hover:not(.active) {
            background-color: var(--brown-light) !important;
            color: var(--brown-dark) !important;
        }

        /* Card header */
        .card-header {
            background-color: var(--brown-main) !important;
            color: #fff !important;
            border-bottom-color: var(--brown-medium) !important;
        }

        /* Card border */
        .card {
            border-color: var(--brown-medium) !important;
        }

        /* Tombol */
        .btn-brown {
            background-color: var(--brown-main);
            color: #fff;
            border: none;
        }

        .btn-brown:hover {
            background-color: var(--brown-dark);
            color: #fff;
        }

        /* Footer fixed bottom */
        .footer-bar {
            background-color: var(--brown-dark) !important;
            color: #fff;
            border-top: 2px solid var(--brown-medium);
        }

        /* Dropdown menu border */
        .dropdown-menu {
            border-color: var(--brown-medium) !important;
        }

        /* Dropdown item hover */
        .dropdown-item:hover {
            background-color: var(--brown-light) !important;
            color: var(--brown-dark) !important;
        }

        /* Scrollbar (opsional, biar tema konsisten) */
        ::-webkit-scrollbar-thumb {
            background-color: var(--brown-medium);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-track {
            background-color: var(--brown-pale);
        }
    </style>
</head>

<body style="background-color: #FAF3EB;">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-top" data-bs-theme="dark">
        <div class="container-lg">

            <!-- Logo -->
            <a class="navbar-brand fw-bold" href=".">
                <i class="bi bi-cup-hot"></i> JemaCafe
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu kanan -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person"></i> Username
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-person-circle"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-gear"></i> Setting
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item text-danger" href="#">
                                    <i class="bi bi-box-arrow-left"></i> Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- End Header -->

    <div class="container-lg">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg rounded border mt-2 sidebar-nav">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'home') ? 'active' : 'link-dark'; ?>"
                                            href="index.php?x=home">
                                            <i class="bi bi-house-door"></i> Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'order') ? 'active' : 'link-dark'; ?>"
                                            href="order.php?x=order">
                                            <i class="bi bi-cart4"></i> Order
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'customer') ? 'active' : 'link-dark'; ?>"
                                            href="customer.php?x=customer">
                                            <i class="bi bi-person-fill"></i> Customer
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 'active' : 'link-dark'; ?>"
                                            href="user.php?x=user">
                                            <i class="bi bi-card-checklist"></i> User
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ? 'active' : 'link-dark'; ?>"
                                            href="report.php?x=report">
                                            <i class="bi bi-file-earmark-bar-graph"></i> Report
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Sidebar -->

            <!-- Content -->
            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-header fw-semibold">
                        Home
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Welcome Caffe Jemma</h5>
                        <p class="card-text">Menyediakan berbagai macam minuman dan makanan.</p>
                        <a href="#" class="btn btn-brown rounded-2 px-4">Go somewhere</a>
                    </div>
                </div>

                <?php
                session_start();
                if (isset($_GET['x']) && $_GET['x'] == 'home') {
                    $page = "home.php";
                    include "main.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
                    $page = "order.php";
                    include "main.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
                    if ($_SESSION['level_jemmacoffe'] == 1) {
                        $page = "user.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } elseif (isset($_GET['x']) && $_GET['x'] == 'customer') {
                    $page = "customer.php";
                    include "main.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
                    if ($_SESSION['level_jemmacoffe'] == 1) {
                        $page = "report.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } elseif (isset($_GET['x']) && $_GET['x'] == 'menu') {
                    $page = "menu.php";
                    include "main.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
                    include "login.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
                    include "proses/proses_logout.php";
                } else {
                    $page = "home.php";
                    include "main.php";
                }
                ?>
            </div>
            <!-- End Content -->

        </div>
    </div>

    <!-- Footer -->
    <div class="fixed-bottom text-center py-2 footer-bar">
        Jemma Cafe 2026
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>