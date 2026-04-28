<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #A0522D;" data-bs-theme="dark">
    <div class="container-lg">

        <!-- Logo -->><i
            <a class="navbar-brand fw-bold" href="." class="bi bi-cup-hot"></i> JemaCafe</a>

        <!-- Toggle (biar responsive di HP) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu kanan -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person"></i> <?php echo $hasil['username']; ?>
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