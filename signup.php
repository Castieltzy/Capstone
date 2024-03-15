<?php
require_once "Connection/connect.php";

$services = array(
    "Event Planner/Organizer",
    "Event Coordinator",
    "Event Equipment Supplier",
    "Event Stylist/Florist/Balloon Arranger",
    "Photographer/Videographer Video Editor",
    "Supplier of Party Booths, Giveaways and Favors and more",
    "Professional Hair and Make-up Artist (HMUA)",
    "Music & Entertainment",
    "Graphic Artist/Designer",
    "Wedding Cake Designer",
    "Party Needs Supplier",
    "Professional Host/Emcees"
);
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
    <link rel="stylesheet" href="css/signups.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Saira Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>


<body>

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
                                    <a class="nav-link mx-lg-2" href="index.php">Home</a>
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
                                        <input type="password" required class="form-control" id="password"> <i class="fa fa-eye spw" id="togglePaswword"></i>
                                    </div>
                                    <button type="submit" class="btn btn-light mt-3 lg">LOGIN</button>
                                    <hr class="solid">
                                    <p>Not a member? <a href="SignUp.php">Signup now</a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <h2>Sign Up Account</h2>
        </div>
        <div class="accInfo container text-center">
            <h1>ACCOUNT INFORMATION</h1>
        </div>

        <section class="">
            <form id="signupForm">
                <div class="body container">

                    <div>
                        <legend>Which are you belong?</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="client" value="client" onclick="toggleProfessionalFields()">
                            <label class="form-check-label" for="client">Client</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="professional" value="professional" onclick="toggleProfessionalFields()">
                            <label class="form-check-label" for="professional">Professional</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-label">
                                <label class="asterisk">*</label>
                                <label for="fName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fName" placeholder="Juan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-label">
                                <label class="asterisk">*</label>
                                <label for="lName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lName" placeholder="Dela Cruz">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-label">
                        <label class="asterisk">*</label>
                        <label for="inputAddress" class="form-label">Email Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="@gmail.com">
                    </div>
                    <div class="form-group form-label">
                        <label for="inputAddress2" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Block, Street, Baranggay">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-label">
                                <label class="asterisk">*</label>
                                <label for="gender" class="form-label">Gender</label>
                                <div>
                                    <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-label">
                                <label class="asterisk">*</label>
                                <label for="conNum" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="conNum" placeholder="09**-***-****">
                            </div>
                        </div>
                    </div>
                    <hr class="solid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-label">
                                <label class="asterisk">*</label>
                                <label for="fPassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="fPassword" aria-describedby="passwordHelpBlock">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword1"><i class="fa fa-eye"></i></button>
                                </div>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-label">
                                <label class="asterisk">*</label>
                                <label for="cPassword" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="cPassword">
                                    <button class="btn btn-outline-secondary" type="button" id="toggleConPass1"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="solid">
                    <div id="professionalFields" style="display:none;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputCity">Select Services</label>
                                    <div class="checkbox-list">
                                        <ul>
                                            <?php foreach ($services as $service) : ?>
                                                <li class="highlighted">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="<?php echo str_replace(' ', '', $service); ?>" name="services[]" value="<?php echo $service; ?>">
                                                        <label class="form-check-label" for="<?php echo str_replace(' ', '', $service); ?>"><?php echo $service; ?></label>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="identityCard">ID:</label>
                                            <div>
                                                <input type="file" class="form-control-file" id="identityCard" name="ID" accept="image/*" capture="environment" onchange="previewID(this)">
                                                <button type="button" class="btn btn-primary" onclick="openCamera()">
                                                    <i class="fa fa-camera"></i> <!-- Assuming you're using Font Awesome icons -->
                                                </button>
                                                <div><small class="form-text text-muted">You can select your ID picture from your gallery or take a photo with your camera.</small>
                                                </div>
                                                <div id="previewID"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="rate">Rate Per Hour</label>
                                            <input type="text" class="form-control" id="rate" placeholder="₱ 500.00">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="multipleMedia">Multiple Images or Videos:</label>
                                            <div>
                                                <input type="file" class="form-control-file" id="multipleMedia" name="media[]" accept="image/*,video/*" multiple>
                                                <div><small class="form-text text-muted">You can select multiple images or videos from your gallery.</small></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="solid">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>


</html>

<!-- Login Password Viewer -->
<script>
    const togglePassword = document.getElementById('togglePaswword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function(e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>

<!-- Signup Password Viewer -->
<script>
    const togglePassword1 = document.querySelector('#togglePassword1');
    const password1 = document.querySelector('#fPassword');

    togglePassword1.addEventListener('click', function(e) {
        const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
        password1.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye');
        this.querySelector('i').classList.toggle('fa-eye-slash');
    });

    const toggleConPass1 = document.querySelector('#toggleConPass1');
    const conpass1 = document.querySelector('#cPassword');

    toggleConPass1.addEventListener('click', function(e) {
        const type = conpass1.getAttribute('type') === 'password' ? 'text' : 'password';
        conpass1.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye');
        this.querySelector('i').classList.toggle('fa-eye-slash');
    });
</script>

<!-- Professional View-->
<script>
    function toggleProfessionalFields() {
        var professionalFields = document.getElementById("professionalFields");
        var clientFields = document.getElementById("clientFields");
        var form = document.getElementById("signupForm");

        if (document.getElementById("professional").checked) {
            professionalFields.style.display = "block";
            clientFields.style.display = "none";
        } else {
            professionalFields.style.display = "none";
            clientFields.style.display = "block";
        }

        // Reset all input fields in the form
        form.reset();
    }
</script>


<!-- Password Check -->
<script>
    document.getElementById("fPassword").addEventListener("input", function() {
        var password = this.value;
        var passwordHelpBlock = document.getElementById("passwordHelpBlock");

        if (password.length < 8 || password.length > 20) {
            passwordHelpBlock.textContent = "Password must be 8-20 characters long.";
        } else if (!/\d/.test(password)) {
            passwordHelpBlock.textContent = "Password must contain at least one number.";
        } else {
            passwordHelpBlock.textContent = "Your password is valid.";
        }
    });
</script>


<!-- ID Preview -->
<script>
    function previewID(input) {
        var previewID = document.getElementById('previewID');
        previewID.innerHTML = '';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = new Image();
                img.onload = function() {
                    var width = this.width;
                    var height = this.height;
                    var maxSize = 500; // Maximum size for either width or height
                    if (width >= height) {
                        img.style.width = maxSize + 'px';
                        img.style.height = 'auto';
                    } else {
                        img.style.width = 'auto';
                        img.style.height = maxSize + 'px';
                    }
                    img.className = 'img-thumbnail'; // Bootstrap class for styling
                    previewID.appendChild(img);
                };
                img.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function openCamera() {
        var input = document.getElementById('identityCard');
        input.setAttribute('capture', 'camera');
        input.click(); // Trigger file input click event
        input.setAttribute('capture', 'environment'); // Reset capture attribute to 'environment'
    }
</script>

</body>

</html>