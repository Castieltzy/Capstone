<?php
require_once "Connection/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinWinWin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/indexx.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Saira Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <!-- Header -->
    <header>
            <nav class="navbar bg-body-tertiary navbar-expand-lg fixed-top">
                <div class="container-fluid">
                    <!-- Logo -->
                    <img src="Asset/TPV.png" alt="Logo" width="auto" height="50" class="d-inline-block align-text-top">
                    <!-- Offcanvas Navbar -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <!-- Offcanvas Header -->
                        <div class="offcanvas-header">
                            <img src="Asset/TPV.png" alt="Logo" width="auto" height="45" class="d-inline-block align-text-top">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas Body -->
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                                <!-- Navbar Links -->
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="about.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                            <div class="d-flex dbuts">
                                <button type="button" class="login-button btn btn-primary" data-bs-toggle="modal" data-bs-target="#LoginM">Login</button>
                                <button type="button" class="signup-button btn btn-primary" onClick="window.location.href='SignUp.php'">Sign Up</button>

                            </div>
                        </div>

                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </nav>
    </header>

    <!-- Login Modal -->
    <section class="modalS">
        <div class="modal fade" id="LoginM" tabindex="-1" aria-labelledby="LoginMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
                        <!-- Login Form -->
                        <div class="myform">
                            <h2 class="text-center">Log In Account</h2>
                            <form>
                                <div class="mb-3 mt-4">
                                    <label for="email" class="form-label" required>Email Address:</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" required class="form-control" id="password"> <i class="fa fa-eye spw" id="togglePaswword"></i>
                                </div>
                                <button type="submit" class="btn btn-light mt-3 lg">LOGIN</button>
                                <hr class="solid">
                                <p class="notmem">Not a member? <a href="SignUp.php">Signup now</a></p>
                            </form>
                            <!-- Script for toggling password visibility -->
                            <script>
                                const togglePassword = document.getElementById('togglePaswword');
                                const password = document.getElementById('password');

                                togglePassword.addEventListener('click', function() {
                                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                    password.setAttribute('type', type);
                                    this.classList.toggle('fa-eye');
                                    this.classList.toggle('fa-eye-slash');
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Content Section 1 -->
    <section class="section1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-6 col-sm-12 col1">
                    <!-- Content -->
                    <h1 class="fs-1 hf hb">CRAFTING MOMENTS,</h1>
                    <h1 class="fs-1 hs hb">CREATING MEMORIES</h1>
                    <p class="fs-4 sup">Sign up now for Valenzuela's Finest Event Suppliers and turn your celebrations into extraordinary experiences! </p>
                    <a href="SignUp" class="signup-button">Get Started</a>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <!-- Image -->
                    <img src="Asset/4.png" class="col-md-6 pic1" style="width: 100%; height: auto; display: block;" alt="...">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="container4"></section>

    <!-- Section 3 -->
    <section class="head2nd">
        <div class="container2">
            <div class="row justify-content-center column-gap-5">
                <div class="col-lg-6 col-md-6 col-sm-12 pictureCol d-flex align-items-center justify-content-center">
                    <div class="image-container secPic" style="border-radius: 50px;">
                        <img src="Asset/3.png" class="pic2" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 d-flex align-items-center colright">
                    <div>
                        <h1 class="fs-1 sup2">Struggling to find the
                            perfect event supplier
                            that meets your needs?</h1>
                        <p>Let us guide you to the best match for your event!
                            Say goodbye to the hassle of searching for the right event
                            supplier! We understand the challenges of finding a perfect
                            match for your needs. Let us take the stress out of your
                            planning process, guiding you effortlessly to the ideal event
                            supplier that meets and exceeds your expectations.</p>
                        <a href="SignUp" class="signup-button">Sign Up for Free</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <hr class="solid">
    <section class="applicants">
        <div class="container">
            <h1>WHO CAN SIGN UP</h1>
            <div class="row liss">
                <div class="col-lg-6 col2">
                    <ul>
                        <!-- List for Applicants -->
                        <li class="highlighted" id="highlighted"> Event Planner/Organizer </li>
                        <li class="highlighted"> Event Coordinator </li>
                        <li class="highlighted"> Event Equipment Supplier </li>
                        <li class="highlighted"> Event Stylist/Florist/Balloon Arranger </li>
                        <li class="highlighted"> Photographer/Videographer Video Editor</li>
                        <li class="highlighted"> Supplier of Party Booths, Giveaways and Favors and more</li>
                    </ul>
                </div>
                <div class="col-lg-6 col2">
                    <ul>
                        <!-- List for Applicants (Continued) -->
                        <li class="highlighted"> Professional Hair and Make-up Artist (HMUA) </li>
                        <li class="highlighted"> Music & Entertainment </li>
                        <li class="highlighted"> Graphic Artist/Designer </li>
                        <li class="highlighted"> Wedding Cake Designer </li>
                        <li class="highlighted"> Party Needs Supplier </li>
                        <li class="highlighted"> Professional Host/Emcees</li>
                    </ul>
                </div>
            </div>
            <div>
                <!-- Additional content can be added here -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-body-tertiary text-center">
        <!-- Social Media Links -->
        <div class="container">
            <!-- Facebook -->
            <a class="btn text-white btn-floating m-1  float-end" style="background-color: #3b5998;" href="#!" role="button"><i class="fa fa-facebook-f"></i></a>
            <!-- Twitter -->
            <a class="btn text-white btn-floatin m-1 float-end" style="background-color: #55acee;" href="#!" role="button"><i class="fa fa-twitter"></i></a>
            <!-- Google -->
            <a class="btn text-white btn-floatin m-1 float-end" style="background-color: #dd4b39;" href="#!" role="button"><i class="fa fa-google"></i></a>
            <!-- Youtube -->
            <a class="btn text-white btn-floatin m-1 float-end" style="background-color: #dd4b39;" href="#!" role="button"><i class="fa fa-youtube"></i></a>
            <!-- Linkedin -->
            <a class="btn text-white btn-floatin m-1 float-end" style="background-color: #0082ca;" href="#!" role="button"><i class="fa fa-linkedin-square"></i></a>
        </div>

        <!-- Footer Logo -->
        <section class="sectionFooter">
            <div class="footerLogo float-start d-flex align-items-start">
                <img src="Asset/ValLogo.png" class="col-md-6 " style="height: 75px; width: auto; margin-left: 50px; margin-top:20px" alt="...">
                <h1 class="val" style="margin-top:10%; padding:2px">Valenzuela <span class="eventsup">Event Suppliers</span></h1>
            </div>
            <div class="text-center" style=" height: 100px;">
                <!-- © 2020 Copyright:
                <a class="text-body" href="https://valenzuela.gov.ph/home/">Valenzuela.gov.ph</a> -->
            </div>
        </section>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>