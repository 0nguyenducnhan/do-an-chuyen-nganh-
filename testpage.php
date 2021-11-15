<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'layouts/headerpage.php' ?>
    </head>

    <body>
        <?php include 'layouts/menupage.php'?>
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Login Page</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Login Page</p>
                                <h2>Sign Up with  Dinners & Happy Hours</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <h2 style="color:white;text-align: center;margin-bottom: 40px;">Tên</h2>
                            <form action="thuchanh.php" method="POST" >

                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" name="txt_input" class="form-control" placeholder="Email" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div>
                                    <button class="btn custom-btn" type="submit">Proccess</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->





        <!-- Footer Start -->
         <?php include 'layouts/footerpage.php' ?>
        <!-- Footer End -->

    </body>
</html>
