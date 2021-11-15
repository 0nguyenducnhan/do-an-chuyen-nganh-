<!-- Nav Bar Start -->
<?php
session_start();
?>
<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">Burger <span>King</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="index.php" class="nav-item nav-link">Trang chủ</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="feature.php" class="nav-item nav-link">Feature</a>
                <a href="team.php" class="nav-item nav-link">Chef</a>
                <a href="menu.php" class="nav-item nav-link">Menu</a>
                <a href="booking.php" class="nav-item nav-link active">Booking</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu">
                        <a href="blog.php" class="dropdown-item">Blog Grid</a>
                        <a href="single.php" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <?php
               
                if (isset($_SESSION["user_name"])) {
                    echo '<div class="nav-item dropdown">';
                    echo '<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Welcome'.$_SESSION["user_name"].'</a>';
                    echo '<div class="dropdown-menu">';
                    echo '<a href="logoutcontroller.php" class="dropdown-item">Logout</a>';

                    echo '</div>';
                    echo '</div>';
                } else {
                    echo '<a href="login.php" class="nav-item nav-link">Login</a>';
                }
                ?>

            </div>
        </div>
    </div>
</div>