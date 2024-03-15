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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/contact.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Saira Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#"><img src="Asset/TPV.png" alt="Logo" width="auto" height="50" class="d-inline-block align-text-top"></a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <!-- Login and Sign Up Buttons -->
                    <div class="d-flex">
                        <button type="button" class="login-button btn btn-primary" data-bs-toggle="modal" data-bs-target="#LoginM">Login</button>
                        <button type="button" class="signup-button btn btn-primary" onClick="window.location.href='SignUp.php'">Sign Up</button>
                    </div>
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
                                    <input type="password" required class="form-control" id="password"> <i class="fa fa-eye spw" id="togglePaswword"></i>
                                </div>
                                <button type="submit" class="btn btn-light mt-3 lg">LOGIN</button>
                                <hr class="solid">
                                <p>Not a member? <a href="SignUp.php">Signup now</a></p>
                            </form>
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
    <section>
        <div class="container1">
            <h1>Contact Us</h1>
        </div>
    </section>
    <section>
        <div class="container2">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <div class="mb-3 row align-items-center">
                            <label for="name" class="col-sm-3 col-form-label">Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="contact" class="col-sm-3 col-form-label">Contact:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="contact" placeholder="Enter your contact number">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="email" class="col-sm-3 col-form-label">Email:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="subject" class="col-sm-3 col-form-label">Subject:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="subject" placeholder="Enter the subject">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="message" class="col-sm-3 col-form-label">Message:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="col-sm-9 offset-sm-3 mt-3">
                                <a href="SignUp.php" class="signup-button">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img src="asset/1.png" height="400" width="400">
                </div>
                <!-- </div>
        <a href="SignUp" class="signup-button">Send</a>
    </div> -->
    </section>

</body>

</html>