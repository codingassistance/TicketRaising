@extends('layout')
@section('content')
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-yGBqzP6HI2KZ9J4LGV+0RQYOp5O5FN6c8OqO+xgJ4eUn4ndvUQp2IaU7k5ekVZbS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TD6aP5tlfQT3E3L9P1hP9EJ3L9tXqKA5KmblbUHP/A+5CgCsKzUjZ6q6ZmLRXzj" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<title>Raise ticket</title>
<link rel="stylesheet" href="/css/createReg.css">

<body>
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
                            <a class="social-icon--link social-icon" href="mailto:inspirantech@gmail.com?subject=Mail from Inspirante Website (Ticket Raising)" target="_blank" rel="noreferrer">
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

            <!-- Main content -->
            <div class="main-content">
                <!-- Your content goes here -->
                <div class="content">
                    <div class="card-container">
                        <div class="card" style="padding: 30px;margin-right:20px">
                            <form action="" method="post" enctype="multipart/form-data"> {{ csrf_field() }}
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="summary">Summary</label>
                                    <input type="text" id="summary" name="summary" class="form-control {{ $errors->has('summary')?'is-invalid':'' }}" />
                                </div>
                                @if($errors->has('summary'))
                                <span class="help-block">
                                    <p>
                                        {{ $errors->first('summary') }}
                                    </p>
                                </span>
                                @endif
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control {{ $errors->has('description')?'is-invalid':'' }}"></textarea>
                                    @if($errors->has('description'))
                                    <span class="help-block">
                                        <p>
                                            {{ $errors->first('description') }}
                                        </p>
                                    </span>
                                    @endif
                                    @include('layouts.partials._statuses')
                                    <div class="form-group">
                                        <label for="issueimage">Upload Image</label>
                                        <input type="file" id="issueimage" name="issueimage" accept="image/jpeg, image/png, image/jpg, image/gif, image/svg+xml" class="form-control {{ $errors->has('image')?'is-invalid':'' }}" />
                                        @if($errors->has('image'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('image') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>
                                    <button class=" btn btn-primary" type="submit">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>
@endsection