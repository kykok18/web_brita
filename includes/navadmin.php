<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand fw-bold" href="index.php?page=dashboard">
            🛠 AdminPanel
        </a>

        <!-- TOGGLE -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navAdmin">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navAdmin">

            <!-- MENU KIRI -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=dashboard">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=berita">
                        <i class="bi bi-newspaper"></i> Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=kategori">
                        <i class="bi bi-tags"></i> Kategori
                    </a>
                </li>

            </ul>



            <!-- USER DROPDOWN -->
            <div class="dropdown">
                <a class="text-white dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle"></i> <?= $_SESSION['admin']; ?>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="../login/logout.php">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>