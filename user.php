<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JemaCafe</title>
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
            <?php
            include "proses/proses_input_user.php";
            $query = mysqli_query($conn, "SELECT * FROM tb_user");
            while ($record = mysqli_fetch_array($query)) {
                $result[] = $record;
            }
            ?>
            <!-- Content -->
            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-header fw-semibold">
                        Halaman User
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" style="background-color:#A0522D; border-color:#A0522D;"
                                    data-bs-toggle="modal" data-bs-target="#ModalTambahUser">
                                    Tambah User
                                </button>
                            </div>
                        </div>

                        <!-- Modal Tambah User Baru -->
                        <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" value="<?php echo $row['nama'] ?>">
                                                        <label for="floatingInput">Nama</label>
                                                        <div class="invalid-feedback">
                                                            Please enter your name.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="<?php echo $row['username'] ?>>
                            <label for=" floatingInput">Username</label>
                                                        <div class="invalid-feedback">
                                                            Please enter your username.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" name="username" value="\
                            <?php
                            if ($row['level'] == 1) {
                                echo "Admin";
                            } elseif ($row['level'] == 2) {
                                echo "Kasir";
                            } elseif ($row['level'] == 3) {
                                echo "pelayan";
                            } elseif ($row['level'] == 4) {
                                echo "Dapur";
                            }
                            ?>">
                                                        <label for="floatingInput">Level User</label>
                                                        <div class="invalid-feedback">
                                                            Please enter your level user.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="text"
                                                            class="form-control"
                                                            name="no_hp"
                                                            placeholder="No HP"
                                                            inputmode="numeric"
                                                            pattern="[0-9]*" value="<?php echo $row['nohp'] ?>">
                                                        <label for="floatingInput">No HP</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="password" class="form-control" id="floatingInput" placeholder="Password" disabled value="12345" name="password">
                                                        <label for="floatingPassword">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="" style="height:100px" name="alamat"><?php echo $row['alamat'] ?></textarea>
                                                <label for="floatingInput">Alamat</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Tambah User Baru -->

                        <?php
                        foreach ($result as $row) {
                        ?>
                            <!-- Modal View-->
                            <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal View -->
                        <?php
                        }
                        if (empty($result)) {
                            echo "Data user tidak ada";
                        } else {
                        ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">No HP</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($result as $row) {
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $no++ ?></th>
                                                <td><?php echo $row['nama'] ?></td>
                                                <td><?php echo $row['username'] ?></td>
                                                <td><?php echo $row['level'] ?></td>
                                                <td><?php echo $row['nohp'] ?></td>
                                                <td class="d-flex">
                                                    <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView"><i
                                                            class="bi bi-eye"></i></button>
                                                    <button class="btn btn-warning btn-sm me-1"><i class="bi bi-pencil-square"></i></button>
                                                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <?php
                if (isset($_GET['x']) && $_GET['x'] == 'home') {
                    include "home.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
                    include "order.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
                    include "user.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'customer') {
                    include "customer.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
                    include "report.php";
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

<script>
    (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>