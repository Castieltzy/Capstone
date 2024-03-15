<?php
require_once "Connection/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinWinWin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Saira Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary navbar-expand-lg">
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
    <section class="modalS">
        <div class="modal fade" id="LoginM" tabindex="-1" aria-labelledby="LoginMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="myform">
                            <h2 class="text-center">Log in Account</h2>
                            <form>
                                <div class="mb-3 mt-4">
                                    <label for="email" class="form-label" required>Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" required class="form-control" id="password">
                                        <span class="input-group-text" id="togglePassword">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-light mt-3 lg">LOGIN</button>
                                <hr class="solid">
                                <p>Not a member? <a href="SignUp.php">Signup now</a></p>
                            </form>
                            <script>
                                const togglePassword = document.getElementById('togglePassword');
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

    <section>
        <div class="container1">
            <h1>About Us</h1>
        </div>
    </section>
    <section>
        <div class="container2">
            <div class="row">
                <div class="col-lg-7">
                    <p>Welcome to our Community-Centric Supplies Finder System, dedicated to enhancing the vibrant events and creatives industry in Valenzuela City! At the heart of our mission is a commitment to empower local events with the right tools. We're not just a platform; we're a community-driven initiative, connecting organizers with the perfect supplies, fostering collaboration, and elevating the city's creative spirit. Explore a smooth experience with us, where every event is a celebration of community and creativity. Together, let's build memorable moments and support the growth of Valenzuela City's dynamic events and creatives landscape.</p>
                </div>
                <div class="col-lg-4">
                    <img src="asset/2.png" width="500" height="500">
                </div>
            </div>
        </div>
    </section>
</body>

</html>