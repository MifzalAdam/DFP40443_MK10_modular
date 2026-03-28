<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">UserSystem</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link <?php if($currentPage == 'index.php') echo 'fw-bold'; ?>" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if($currentPage == 'register_view.php') echo 'fw-bold'; ?>" href="register_view.php">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if($currentPage == 'login_view.php') echo 'fw-bold'; ?>" href="login_view.php">Login</a>
                </li>

            </ul>
        </div>

    </div>
</nav>