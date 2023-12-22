<!DOCTYPE html>
<html lang="en">
<?php

use Carbon\Carbon; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Notification Page</title>
    <!-- Add Bootstrap JS and Popper.js scripts -->
    <link rel="stylesheet" href="/css/land.css">
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
    <style>
        /* Custom styles can be added here */
        body {
            background-color: #f8f9fa;
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

        .container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            margin-top: 50px;
        }

        .tab-content {
            margin-top: 20px;
        }

        .alert {
            margin-top: 10px;
        }

        .profile-picture {
            display: flex;
            align-items: center;
            overflow-x: auto;
        }

        .profile-picture img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>

<body style="background-color: white;">
    <div class="container-fluid">
        <div class="row" style="width:100%">
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
                                    <a href="{{url('/adminNotifications')}}" class="nav_link active">
                                        <span class="navlink_icon">
                                            <i class="bx bx-bell"></i>
                                        </span>
                                        <span class="navlink">Notifications</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="{{url('/profile')}}" class="nav_link">
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
            </div>
            <div class="main-content" style="padding-left: 0;padding-top:70px">
                <!-- Your content goes here -->
                <div class="content">
                    <!--Number of ticket Section -->
                    <div class="row">
                        <div class="container">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="all">
                                    <form action="" method="post">
                                        @csrf
                                        <h3>Admin Notifications</h3>
                                        <button class="btn btn-danger" onclick="submit()" style="border-radius:10px;font-size: 16px;">
                                            <i class="bx bx-trash"></i> Clear All
                                        </button>
                                        @if(isset($readNotifications) && is_array($readNotifications) && !empty($readNotifications))

                                        <ul class="list-unstyled">
                                            @php
                                            $reversedNotifications = array_reverse($readNotifications);
                                            @endphp
                                            @foreach($reversedNotifications as $notification)
                                            <div class="alert alert-dark" style="background-color:#fafafa;">
                                                <li>
                                                    <div class="profile-picture">
                                                        <img src="{{$notification['senderImg']}}" alt="user profile picture">
                                                        <b> {!! $notification['sender'] !!}</b>
                                                        &nbsp;{{$notification['message'] }}&nbsp;&nbsp;&nbsp;
                                                        <b style="text-align: right !important;"><span>{{ \Carbon\Carbon::parse($notification['timestamp'])->diffForHumans() }}</span></b>
                                                    </div>
                                                </li>
                                            </div> @endforeach
                                        </ul>
                                        @else
                                        <p class="mt-3">No notifications found.</p>
                                        @endif
                                    </form>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
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