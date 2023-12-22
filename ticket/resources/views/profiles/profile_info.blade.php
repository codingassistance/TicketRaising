<!DOCTYPE html>
<html>
<?php

use Illuminate\Support\Facades\Auth;
?>

<head>
    <title>User Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-yGBqzP6HI2KZ9J4LGV+0RQYOp5O5FN6c8OqO+xgJ4eUn4ndvUQp2IaU7k5ekVZbS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TD6aP5tlfQT3E3L9P1hP9EJ3L9tXqKA5KmblbUHP/A+5CgCsKzUjZ6q6ZmLRXzj" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

    <!-- Custom CSS styles -->
    <style>
        .container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            margin-top: 50px;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            left: 0;
            background-color: var(--white-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 30px;
            z-index: 1000;
            box-shadow: 0 0 2px var(--grey-color-light);
        }

        .btn {
            margin: 10px;
        }

        .centered-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Center vertically */
            align-items: center;
            /* Center horizontally */
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #ffffff;
        }

        .profile-pic-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hidden {
            display: none !important;
        }
    </style>
</head>

<body style="background-color: white;">
    <div class="container-fluid">
        <div class="row" style="width:100%;">
            <!-- Sidebar code goes here -->
            <div class="sidebarbody" id="sidebarbody">
                <nav class="navbar">
                    <div class="logo_item">
                        <i class="bx bx-menu" id="sidebarOpen"></i>
                        <img src="/images/logo.png" style="height:60px;width:60px" alt="Light Logo" id="lightLogo">
                    </div>
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
                            <a class="social-icon--link social-icon" href="mailto:inspirantech@gmail.com?subject=Mail from Inspirante Website (Ticket Raising)" target="_blank" rel="noreferrer">
                                <img src="https://cdn.iconscout.com/icon/free/png-256/free-gmail-2981844-2476484.png?f=webp" alt="Gmail">
                            </a>
                        </div>
                    </div>
                </nav>
                @php
                $user=Auth::user();
                $type=$user['dropdown'];
                @endphp
                @if($type == 'Admin')
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
                                    <a href="{{url('/addp')}}" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-plus"></i>
                                        </span>
                                        <span class="navlink">Add project</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <li class="item">
                                    <a href="{{url('/adminNotifications')}}" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-bell"></i>
                                        </span>
                                        <span class="navlink">Notifications</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="{{url('/profile')}}" class="nav_link active">
                                        <span class="navlink_icon">
                                            <i class="bx bx-user"></i>
                                        </span>
                                        <span class="navlink">Profile</span>
                                    </a>
                                </li>
                                <!-- Start -->
                                <li class="item">
                                    <a class="nav_link" href="{{ route('logout') }}" onclick="localStorage.clear();event.preventDefault();  document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form><span class="navlink_icon">
                                            <i class="bx bx-log-out"></i>
                                        </span>
                                        <span class="navlink">Logout</span>
                                    </a>
                                </li>
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
                @else
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
                                <li class="item">
                                    <a href="{{url('/profile')}}" class="nav_link active">
                                        <span class="navlink_icon">
                                            <i class="bx bx-user"></i>
                                        </span>
                                        <span class="navlink">Profile</span>
                                    </a>
                                </li>
                                <!-- Start -->
                                <li class="item">
                                    <a class="nav_link" href="{{ route('logout') }}" onclick="localStorage.clear();event.preventDefault();  document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form><span class="navlink_icon">
                                            <i class="bx bx-log-out"></i>
                                        </span>
                                        <span class="navlink">Logout</span>
                                    </a>
                                </li>
                                <br>
                                <hr>
                                <!-- start-->
                                <li class="item">
                                    @if ($admin)
                                    <a href="{{url('/clientTickets/create')}}" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-plus"></i>
                                        </span>
                                        <span class="navlink">Raise Ticket</span>
                                    </a>
                                    @else
                                    <a class="btn btn-primary" style="margin-left:20px" href="{{ route('makeAdmin') }}" onclick="event.preventDefault();  document.getElementById('makeAdmin-form').submit();">Make me Admin</a>
                                    @endif
                                    <form id="makeAdmin-form" action="{{ route('makeAdmin') }}" method="POST">
                                        @csrf
                                    </form>
                                </li>
                                <!-- End -->
                                <hr>
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
                @endif
            </div>
            <div class="main-content" style="padding-left: 0;padding-top:70px">
                <!-- Your content goes here -->
                <div class="content">
                    <!--Number of ticket Section -->
                    <div class="row" style="margin-top: 4px;margin-bottom:20px">
                        <div class="container">
                            <div class="col-md-6 offset-md-3">
                                <h3 style="text-align:center;margin-bottom:0%">Profile Palette</h3><br><br>
                                <form id="profileForm" action="{{ route('profile.update', ['token' => $userData->token]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <div class="centered-container">

                                        <div class="profile-picture" style="width: 200px; height: 200px;margin-top:0%">
                                            <img src="{{$userData->image}}" alt="Your Profile Picture">
                                            <input type="file" id="imageInput" name="image" class="hidden">
                                        </div>
                                        <div class="form-group" style="margin-top:10%" id="imageUploadSection">
                                            <label for="image">New Profile Image:</label>
                                            <input type="file" id="imageInput" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="fname">First Name:</label>
                                        <input type="text" id="fname" name="fname" class="form-control" value="{{ $userData->fname }}" disabled />
                                    </div>

                                    <div class="form-group">
                                        <label for="lname">Last Name:</label>
                                        <input type="text" id="lname" name="lname" class="form-control" value="{{ $userData->lname }}" disabled />
                                    </div>

                                    <div class="form-group">
                                        <label for="semail">Email:</label>
                                        <input type="email" id="semail" name="semail" class="form-control" value="{{ $userData->semail }}" disabled />
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Type:</label>
                                        <input type="text" id="dropdown" name="dropdown" class="form-control" value="{{ $userData->dropdown }}" disabled />
                                    </div>
                                    <button type="submit" id="updateProfileBtn" class="btn btn-primary" style="display: none;">Update
                                        Profile</button>
                                </form>

                                <div class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <button id="editProfileBtn" class="btn btn-primary">Edit Profile</button>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <form action="{{ route('profile.destroy') }}" id="delete-form" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation()">Delete Account</button>
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
    <script>
        function showDeleteConfirmation() {
            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete my account',
                cancelButtonText: 'No, cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    localStorage.clear();
                    document.getElementById('delete-form').submit();
                }
            });
        }

        function toggleButtons() {
            var editButton = document.getElementById("editProfileBtn");
            var updateButton = document.getElementById("updateProfileBtn");
            var imageUploadInput = document.getElementById("imageUploadSection");
            if (editButton.style.display === "block" || editButton.style.display === "") {
                editButton.style.display = "none";
                updateButton.style.display = "block";
                imageUploadInput.style.display = "block";
            } else {
                editButton.style.display = "block";
                updateButton.style.display = "none";
                imageUploadInput.style.display = "none";
            }
        }

        function deleted() {
            if (localStorage.getItem('token') !== null) {
                localStorage.removeItem('token');
                Swal.fire({
                    icon: 'success',
                    title: 'Deleted',
                    text: 'Account deleted',
                    showConfirmButton: false,
                });
            }
        }

        document.getElementById("editProfileBtn").addEventListener("click", function() {
            toggleButtons();
            var fields = document.querySelectorAll('input[disabled]');
            fields.forEach(function(field) {
                field.disabled = false;
            });
            document.getElementById('dropdown').disabled = true;
        });

        // Hide the image upload section initially
        var imageUploadInput = document.getElementById("imageUploadSection");
        imageUploadInput.style.display = "none";
    </script>

</body>
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
</script>

</html>