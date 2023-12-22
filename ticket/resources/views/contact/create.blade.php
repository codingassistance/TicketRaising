@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TD6aP5tlfQT3E3L9P1hP9EJ3L9tXqKA5KmblbUHP/A+5CgCsKzUjZ6q6ZmLRXzj" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ticket register page</title>
    <link rel="stylesheet" href="/css/createReg.css">
    <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session("error") }}'
    });
</script>
@endif
<!-- sidebar start -->

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar code goes here -->
            <div class="sidebarbody" id="sidebarbody">
                <nav class="navbar">
                    <div class="logo_item">
                        <i class="bx bx-menu" id="sidebarOpen"></i>
                        <img src="/images/logo.png" style="height:60px;width:60px" alt="Light Logo" id="lightLogo">
                    </div>
                    <!-- social media -->
                    <div class="social-icons-container">
                        <div class="linkedin">
                            <a class="social-icon--link social-icon" href="https://www.linkedin.com/company/inspirante-technologies-pvt-ltd/?originalSubdomain=in" target="_blank" rel="noreferrer">
                                <img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/linkedin/linkedin-square-solid-color.png" alt="LinkedIn">
                            </a>
                        </div>
                        <div class="facebook">
                            <a class="social-icon--link social-icon" href="https://www.facebook.com/Inspirantechnologies" target="_blank" rel="noreferrer">
                                <img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/facebook/facebook-square-solid-color.png" alt="Facebook">
                            </a>
                        </div>
                        <div class="youtube">
                            <a class="social-icon--link social-icon" href="https://www.youtube.com/channel/UCnMdEqI6xEQXvavURAXYiFg" target="_blank" rel="noreferrer">
                                <img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/youtube/youtube-square-solid-color.png" alt="YouTube">
                            </a>
                        </div>
                        <div class="gmail">
                            <a class="social-icon--link social-icon" href="https://inspirantech@gmail.com" target="_blank" rel="noreferrer">
                                <img src="https://cdn.iconscout.com/icon/free/png-256/free-gmail-2981844-2476484.png?f=webp" alt="Gmail">
                            </a>
                        </div>
                    </div>

                    <!-- social media end -->
                </nav>
                <nav class="sidebar">
                    <div class="menu_content">
                        <ul class="menu_items">
                            <div class="menu_title menu_dahsboard"></div>
                            <ul class="menu_items">
                                <div class="menu_title menu_editor"></div>
                                <!-- Start -->
                                <li class="item">
                                    <a href="/" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bxs-magic-wand"></i>
                                        </span>
                                        <span class="navlink">Home</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- start-->
                                <li class="item">
                                    <a href="/" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-envelope"></i>
                                        </span>
                                        <span class="navlink">Contact</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- start-->
                                <li class="item">
                                    <a href="{{url('/login')}}" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-log-in"></i>
                                        </span>
                                        <span class="navlink">Login</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- start-->
                                <li class="item">
                                    <a href="{{url('/reg')}}" class="nav_link active">
                                        <span class="navlink_icon">
                                            <i class="bx bx-user-plus"></i>
                                        </span>
                                        <span class="navlink">Signup</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- Sidebar Open / Close -->
                                <div class="bottom_content">
                                    <div class="bottom expand_sidebar">
                                        <span> Expand</span>
                                        <i class='bx bx-log-in'></i>
                                    </div>
                                    <div class="bottom collapse_sidebar">
                                        <span> Collapse</span>
                                        <i class='bx bx-log-out'></i>
                                    </div>
                                </div>
                            </ul>
                    </div>
                </nav>
            </div>
            <!-- Main content -->
            <div class="main-content">
                <!-- Your content goes here -->
                <div class="content">
                    <div class="card-container">
                        <div class="card text-center">
                            <div class="card-body" style="background-color: #4169E1;padding:20px;margin-right:20px">
                                <h2 class="card-title" style="color: white;">Create Your Account </h2>
                            </div>
                            <div id="login">
                                <div class="container">
                                    <div id="login-row" class="row justify-content-center align-items-center">
                                        <div id="login-column" class="col-md-6">
                                            <div id="login-box" class="col-md-12">
                                                <form id="login-form" action="{{ route('register') }}" method="post" class="reg-form">
                                                    {!! csrf_field() !!}
                                                    <h3 class="text-center text-info">SignUp</h3>
                                                    <hr>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="fname" class="text-info">First Name:</label>
                                                            <input type="text" name="fname" id="fname" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="lname" class="text-info">Last Name:</label>
                                                            <input type="text" name="lname" id="lname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="semail" class="text-info">Email:</label>
                                                        <input type="email" name="semail" id="semail" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="text-info">Password:</label>
                                                        <div class="input-group">
                                                            <input type="password" name="password" id="password" class="form-control">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i id="togglePassword" class="fa fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="text-info">Confirm Password:</label>
                                                        <div class="input-group">
                                                            <input type="password" name="cpassword" id="cpassword" class="form-control">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i id="toggleCPassword" class="fa fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="btnsubmit" class="btn btn-primary btn-block">Submit</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- javascript -->
    <script>
        // script for sidebar
        const sidebarbody = document.querySelector(".sidebarbody");
        const sidebar = document.querySelector(".sidebar");
        const submenuItems = document.querySelectorAll(".submenu_item");
        const sidebarOpen = document.querySelector("#sidebarOpen");
        const sidebarClose = document.querySelector(".collapse_sidebar");
        const sidebarExpand = document.querySelector(".expand_sidebar");

        function checkScreenWidth() {
            if (window.innerWidth < 768) {
                sidebar.classList.add("close");
            } else {
                sidebar.classList.remove("close");
            }
        }
        checkScreenWidth();
        window.addEventListener("resize", checkScreenWidth);

        sidebarOpen.addEventListener("click", () => {
            sidebar.classList.remove("close");
        });

        sidebarClose.addEventListener("click", () => {
            sidebar.classList.add("close", "hoverable");
        });

        sidebarExpand.addEventListener("click", () => {
            sidebar.classList.remove("close", "hoverable");
        });
        document.getElementById('lightLogo').style.display = 'inline';

        submenuItems.forEach((item, index) => {
            item.addEventListener("click", () => {
                item.classList.toggle("show_submenu");
                submenuItems.forEach((item2, index2) => {
                    if (index !== index2) {
                        item2.classList.remove("show_submenu");
                    }
                });
            });
        });

        if (window.innerWidth < 768) {
            sidebar.classList.add("close");
        } else {
            sidebar.classList.remove("close");
        }
        // end script of sidebar
    </script>

    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        //reg script
        (function() {
            document.querySelector(".reg-form").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission
                let fname = document.getElementById('fname').value;
                let email = document.getElementById('semail').value;
                let password = document.getElementById('password').value;
                let confirmPassword = document.getElementById('cpassword').value;
                let isValid = true;
                if (fname === "") {
                    isValid = false;
                    swal("Error", "First Name is required field", "error");
                }
                if (isValid && email === "") {
                    isValid = false;
                    swal("Error", "Email is required field", "error");
                } else if (isValid && (!email.endsWith("@gmail.com") && !email.endsWith("@yahoo.com") && !email.endsWith("@nmamit.in"))) {
                    isValid = false;
                    swal("Error", "Invalid Email", "error");
                }
                if (isValid && password === "") {
                    isValid = false;
                    swal("Error", "Password is required field", "error");
                } else if (isValid && !isPasswordValid(password)) {
                    isValid = false;
                    swal("Error", "Password should be at least 8 characters with at least one number, one capital letter, and one symbol", "error");
                }
                if (isValid && confirmPassword === "") {
                    isValid = false;
                    swal("Error", "Confirm Password is required field", "error");
                } else if (isValid && confirmPassword !== password) {
                    isValid = false;
                    swal("Error", "Password and Confirm Password do not match", "error");
                }
                if (isValid) {
                    if (localStorage.getItem('token')) {
                        swal("Error", "It is recommended to log out before attempting to Signup.", "error");
                    } else {
                        if (localStorage.getItem('token')) {
                            swal("Error", "It is recommended to log out before attempting to sign in.", "error");
                        } else {
                            document.getElementById('fname').setAttribute('readonly', "");
                            document.getElementById('lname').setAttribute('readonly', "");
                            document.getElementById('cpassword').setAttribute('readonly', "");
                            document.getElementById('password').setAttribute('readonly', "");
                            document.getElementById('semail').setAttribute('readonly', "");
                            this.submit();
                        }
                    }
                }
            });

            function isPasswordValid(password) {
                if (!/^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,}$/.test(password)) {
                    swal("Error", "Password should have 8 characters with at least one number, one capital letter, and one symbol", "error");
                    return false;
                }
                return true;
            }
        })();
        (function() {
            document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);
            document.getElementById('toggleCPassword').addEventListener('click', toggleCPasswordVisibility);

            function togglePasswordVisibility() {
                const passwordInput = document.getElementById('password');
                const passwordIcon = document.getElementById('togglePassword');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordIcon.classList.remove('fa-eye');
                    passwordIcon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    passwordIcon.classList.remove('fa-eye-slash');
                    passwordIcon.classList.add('fa-eye');
                }
            }

            function toggleCPasswordVisibility() {
                const cpasswordInput = document.getElementById('cpassword');
                const cpasswordIcon = document.getElementById('toggleCPassword');
                if (cpasswordInput.type === 'password') {
                    cpasswordInput.type = 'text';
                    cpasswordIcon.classList.remove('fa-eye');
                    cpasswordIcon.classList.add('fa-eye-slash');
                } else {
                    cpasswordInput.type = 'password';
                    cpasswordIcon.classList.remove('fa-eye-slash');
                    cpasswordIcon.classList.add('fa-eye');
                }
            }
        })();
        //reg end
    </script>
</body>

</html>
@endsection