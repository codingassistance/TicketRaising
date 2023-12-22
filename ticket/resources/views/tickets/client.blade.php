<?php

use App\Models\User;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Client page</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/css/land.css">
</head>

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
                                <script>
                                    $(document).ready(function() {
                                        // Set the active link based on the current URL
                                        setActiveLink();

                                        // Add a click event listener to the nav links
                                        $('.nav_link').click(function() {
                                            // Remove the 'active' class from all nav links
                                            $('.nav_link').removeClass('active');

                                            // Add the 'active' class to the clicked nav link
                                            $(this).addClass('active');
                                        });

                                        // Function to set the active link based on the current URL
                                        function setActiveLink() {
                                            var currentUrl = window.location.href;

                                            if (currentUrl.endsWith('/')) {
                                                // If the URL ends with '/', set Home as active
                                                $('.nav_link[href="/"]').addClass('active');
                                            } else if (currentUrl.includes('#contact')) {
                                                // If the URL includes '#contact', set Contact as active
                                                $('.nav_link[href="#contact"]').addClass('active');
                                            }
                                        }
                                    });
                                </script>
                                <!-- End -->
                                <!-- start-->
                                <li class="item">
                                    <a href="#contact" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-envelope"></i>
                                        </span>
                                        <span class="navlink">Contact</span>
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
            </div>

            <!-- Main content -->
            <div class="main-content">
                <!-- Your content goes here -->
                <div class="content">
                    <!--Number of ticket Section -->
                    <div class="container mt-4">
                        <div class="row">
                            <!-- Number of total Tickets -->
                            <div class="col-md-3">
                                <div class="card bg-info text-white mb-3 card-animated">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Tickets</h5>
                                        <p class="card-text">{{$openTicketsCount+$inProgressTicketsCount+$closedTicketsCount}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Number of Open Tickets -->
                            <div class="col-md-3">
                                <div class="card bg-success text-white mb-3 card-animated">
                                    <div class="card-body">
                                        <h5 class="card-title">Open Tickets</h5>
                                        <p class="card-text">{{$openTicketsCount}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Number of In-progress Tickets -->
                            <div class="col-md-3">
                                <div class="card bg-warning text-white mb-3 card-animated">
                                    <div class="card-body">
                                        <h5 class="card-title">In-Progress Tickets</h5>
                                        <p class="card-text">{{$inProgressTicketsCount}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Number of Closed Tickets -->
                            <div class="col-md-3">
                                <div class="card bg-danger text-white mb-3 card-animated">
                                    <div class="card-body">
                                        <h5 class="card-title">Closed Tickets</h5>
                                        <p class="card-text">{{$closedTicketsCount}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="tableoftickets" id="tableoftickets">
                        <div class="center" style="align-items: center; justify-content: center; padding: 20px;padding-bottom:0%;">
                            <div>
                                <h1 class="h2">Tickets</h1>
                            </div><br>
                            <div class="mb-3 input-group">
                                <label for="searchTicket" class="form-label sr-only">Search Ticket:</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bx bx-search"></i></span>
                                </div>
                                <input type="text" class="form-control" id="searchTicket" oninput="searchTickets()" placeholder="Search for a ticket...">
                            </div>
                            <div class="table-responsive">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Ticket Name</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($tickets))
                                        @foreach ($tickets as $index => $ticket)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>{{ $ticket['tname'] }}</td>
                                            <td>
                                                @php
                                                $priority = $ticket['priority'];
                                                $badgeClass = '';

                                                switch ($priority) {
                                                case 'Critical':
                                                $badgeClass = 'badge-danger';
                                                break;
                                                case 'Urgent':
                                                $badgeClass = 'badge-primary';
                                                break;
                                                case 'Normal':
                                                $badgeClass = 'badge-success';
                                                break;
                                                }
                                                @endphp

                                                <span class="badge {{ $badgeClass }}" style="padding: 6px; border-radius: 25px;">{{ $priority }}</span>
                                            </td>

                                            <td>{{ $ticket['status'] }}</s></td>
                                            <td>{{$ticket['time']}}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" onclick="showTicketDetails('{{ $index }}')">
                                                    View Details
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="6">No tickets found.</td>
                                        </tr>
                                        @endif
                                        @if (!empty($tickets))
                                        <div class="pagination-container">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item" onclick="prevPage()">
                                                        <a class="page-link" href="#">&lt;&lt;</a>
                                                    </li> @php
                                                    $totalPages = ceil(count($tickets) / 10);
                                                    @endphp
                                                    @for ($i = 1; $i <= $totalPages; $i++) <li class="page-item {{ $i === 1 ? 'active' : '' }}">
                                                        <a class="page-link" href="#" onclick="changePage(`{{ $i }}`)">{{ $i }}</a>
                                                        </li>
                                                        @endfor
                                                        <li class="page-item" onclick="nextPage()">
                                                            <a class="page-link" href="#">&gt;&gt;</a>
                                                        </li>
                                                </ul>
                                            </nav>
                                        </div>



                                        <script>
                                            //path script
                                            if (window.location.pathname != "/") {
                                                window.location.href = "/";
                                            }
                                            //path end
                                            //pagination script
                                            var currentPage = 1;
                                            var totalPages = <?php echo $totalPages; ?>;

                                            function changePage(pageNumber) {
                                                currentPage = pageNumber;
                                                updateTable();
                                                updatePagination();
                                                disableBtn();
                                            }

                                            function prevPage() {
                                                if (currentPage > 1) {
                                                    currentPage--;
                                                    updateTable();
                                                    updatePagination();
                                                }
                                                disableBtn();
                                            }

                                            function nextPage() {
                                                if (currentPage < `{{ $totalPages}}`) {
                                                    currentPage++;
                                                    updateTable();
                                                    updatePagination();
                                                }
                                                disableBtn();
                                            }

                                            function updatePagination() {
                                                var paginationItems = document.querySelectorAll(".pagination-container .pagination li");
                                                paginationItems.forEach(function(item, index) {
                                                    if (index == currentPage) {
                                                        item.classList.add("active");
                                                    } else {
                                                        item.classList.remove("active");
                                                    }
                                                });
                                                disableBtn();
                                            }

                                            function updateTable() {
                                                var tableRows = document.querySelectorAll(".table tbody tr");
                                                var startIndex = (currentPage - 1) * 10;
                                                var endIndex = startIndex + 10;

                                                tableRows.forEach(function(row, index) {
                                                    if (index >= startIndex && index < endIndex) {
                                                        row.style.display = "";
                                                    } else {
                                                        row.style.display = "none";
                                                    }
                                                });
                                                disableBtn();
                                            }

                                            function disableBtn() {
                                                //disable prev button on first page
                                                var paginationItems = document.querySelectorAll(".pagination-container .pagination li");
                                                var prevButton = paginationItems[0];
                                                if (currentPage == 1) {
                                                    prevButton.classList.add("disabled");
                                                } else {
                                                    prevButton.classList.remove("disabled");
                                                }
                                                //disable next button on last page
                                                var nextButton = paginationItems[paginationItems.length - 1];
                                                if (currentPage == totalPages) {
                                                    nextButton.classList.add("disabled");
                                                } else {
                                                    nextButton.classList.remove("disabled");
                                                }
                                            }
                                            // Call updateTable initially to show the first page
                                            updateTable();
                                        </script>
                                        @endif
                                    </tbody>
                                </table>
                                <br>
                                <!-- contct Section Start -->
                                <section class="contact" id="contact" style="padding-bottom: 40px;">
                                    <div class="center" style="display: flex; align-items: center; justify-content: center;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border: 1px solid #ccc; padding: 20px;">
                                        <section class="contact" style="width:65%;">
                                            <h3 style="text-align:center">Contact Us</h3><br>
                                            <div class="mb-4">
                                                <label for="exampleInputname" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name">
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" onclick="sendFeedback()">Submit</button>

                                        </section>
                                        <!-- End Contact Form -->
                                    </div>
                            </div>
                    </section>
                </div>
                </main>

                <script>
                    function sendFeedback() {
                        email = document.getElementById('email').value;
                        name = document.getElementById('name').value;
                        message = document.getElementById('message').value;
                        if (email === '' || name === '' || message === '') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Please fill in all the fields.',
                                timer: 1000,
                                showConfirmButton: false,
                            });
                        } else {
                            var recipients = "vandanaprabhu702@gmail.com,shetvaish@gmail.com";

                            Email.send({
                                Host: "smtp.elasticemail.com",
                                Username: "vandanaprabhu702@gmail.com",
                                Password: "ECE65D1578529A982F0CCF537C56FD007684",
                                To: recipients,
                                From: 'vandanaprabhu702@gmail.com',
                                Subject: "Feedback",
                                Body: `<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
                    
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="x-apple-disable-message-reformatting">
                        <meta name="format-detection" content="telephone=no,address=no,email=no,date=no,url=no">
                
                        <meta name="color-scheme" content="light">
                        <meta name="supported-color-schemes" content="light">
                
                        
                        <!--[if !mso]><!-->
                          
                        <!--<![endif]-->
                
                        <!--[if mso]>
                          <style>
                              // TODO: fix me!
                              * {
                                  font-family: sans-serif !important;
                              }
                          </style>
                        <![endif]-->
                    
                        
                        <!-- NOTE: the title is processed in the backend during the campaign dispatch -->
                        <title></title>
                
                        <!--[if gte mso 9]>
                        <xml>
                            <o:OfficeDocumentSettings>
                                <o:AllowPNG/>
                                <o:PixelsPerInch>96</o:PixelsPerInch>
                            </o:OfficeDocumentSettings>
                        </xml>
                        <![endif]-->
                        
                    <style>
                        :root {
                            color-scheme: light;
                            supported-color-schemes: light;
                        }
                
                        html,
                        body {
                            margin: 0 auto !important;
                            padding: 0 !important;
                            height: 100% !important;
                            width: 100% !important;
                
                            overflow-wrap: break-word;
                            -ms-word-break: break-all;
                            -ms-word-break: break-word;
                            word-break: break-all;
                            word-break: break-word;
                        }
                
                
                        
                  direction: undefined;
                  center,
                  #body_table{
                    
                  }
                
                  .paragraph {
                    font-size: 14px;
                    font-family: Helvetica, sans-serif;
                    color: #000000;
                  }
                
                  ul, ol {
                    padding: 0;
                    margin-top: 0;
                    margin-bottom: 0;
                  }
                
                  li {
                    margin-bottom: 0;
                  }
                 
                  .list-block-list-outside-left li {
                    margin-left: 20px;
                  }
                
                  .list-block-list-outside-right li {
                    margin-right: 20px;
                  }
                  
                  .heading1 {
                    font-weight: 400;
                    font-size: 28px;
                    font-family: Helvetica, sans-serif;
                    color: #4A5568;
                  }
                
                  .heading2 {
                    font-weight: 400;
                    font-size: 20px;
                    font-family: Helvetica, sans-serif;
                    color: #4A5568;
                  }
                
                  .heading3 {
                    font-weight: 400;
                    font-size: 16px;
                    font-family: Helvetica, sans-serif;
                    color: #4A5568;
                  }
                  
                  a {
                    color: #cd8c30;
                    text-decoration: none;
                  }
                  
                
                
                        * {
                            -ms-text-size-adjust: 100%;
                            -webkit-text-size-adjust: 100%;
                        }
                
                        div[style*="margin: 16px 0"] {
                            margin: 0 !important;
                        }
                
                        #MessageViewBody,
                        #MessageWebViewDiv {
                            width: 100% !important;
                        }
                
                        table {
                            border-collapse: collapse;
                            border-spacing: 0;
                            mso-table-lspace: 0pt !important;
                            mso-table-rspace: 0pt !important;
                        }
                        table:not(.button-table) {
                            border-spacing: 0 !important;
                            border-collapse: collapse !important;
                            table-layout: fixed !important;
                            margin: 0 auto !important;
                        }
                
                        th {
                            font-weight: normal;
                        }
                
                        tr td p {
                            margin: 0;
                        }
                
                        img {
                            -ms-interpolation-mode: bicubic;
                        }
                
                        a[x-apple-data-detectors],
                
                        .unstyle-auto-detected-links a,
                        .aBn {
                            border-bottom: 0 !important;
                            cursor: default !important;
                            color: inherit !important;
                            text-decoration: none !important;
                            font-size: inherit !important;
                            font-family: inherit !important;
                            font-weight: inherit !important;
                            line-height: inherit !important;
                        }
                
                        .im {
                            color: inherit !important;
                        }
                
                        .a6S {
                            display: none !important;
                            opacity: 0.01 !important;
                        }
                
                        img.g-img+div {
                            display: none !important;
                        }
                
                        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                            u~div .contentMainTable {
                                min-width: 320px !important;
                            }
                        }
                
                        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                            u~div .contentMainTable {
                                min-width: 375px !important;
                            }
                        }
                
                        @media only screen and (min-device-width: 414px) {
                            u~div .contentMainTable {
                                min-width: 414px !important;
                            }
                        }
                    </style>
                
                    <style>
                        @media only screen and (max-device-width: 600px) {
                            .contentMainTable {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .single-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .multi-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .imageBlockWrapper {
                                width: 100% !important;
                                margin: auto !important;
                            }
                        }
                        @media only screen and (max-width: 600px) {
                            .contentMainTable {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .single-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .multi-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .imageBlockWrapper {
                                width: 100% !important;
                                margin: auto !important;
                            }
                        }
                    </style>
                    <style></style>
                    
                <!--[if mso | IE]>
                    <style>
                        .list-block-outlook-outside-left {
                            margin-left: -18px;
                        }
                    
                        .list-block-outlook-outside-right {
                            margin-right: -18px;
                        }
                
                    </style>
                <![endif]-->
                
                
                    </head>
                
                    <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #efefef;">
                        <center role="article" aria-roledescription="email" lang="en" style="width: 100%; background-color: #efefef;">
                            
                                        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" style="margin: auto;" class="contentMainTable">
                                            <tr class="wp-block-editor-spacerblock-v1"><td style="background-color:#EFEFEF;line-height:30px;font-size:30px;width:100%;min-width:100%">&nbsp;</td></tr><tr class="wp-block-editor-paragraphblock-v1"><td valign="top" style="padding:20px 20px 20px 20px;background-color:#EFEFEF"><p class="paragraph" style="font-family:Helvetica, sans-serif;text-align:right;line-height:1.15;font-size:9px;margin:0;color:#4A5568;word-break:normal">Unable to view? Read it <a href="{view}" data-type="mergefield" data-id="df81370a-ecd3-455f-9de8-f24576e72260-yTJQHrdYhYCwuUX8e_vjD" data-filename="" class="df81370a-ecd3-455f-9de8-f24576e72260-yTJQHrdYhYCwuUX8e_vjD" data-mergefield-value="view" data-mergefield-input-value="" style="color: #cd8c30;">Online</a></p></td></tr><tr class="wp-block-editor-imageblock-v1"><td style="background-color:#EFEFEF;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px" align="center"><table align="center" width="168" class="imageBlockWrapper" style="width:168px" role="presentation"><tbody><tr><td style="padding:0"><img src="https://api.smtprelay.co/userfile/fce461b2-a74a-4a02-9c15-840c04e135f3/inspirante.jpg" width="168" height="" alt="" style="border-radius:0px;display:block;height:auto;width:100%;max-width:100%;border:0" class="g-img"></td></tr></tbody></table></td></tr><tr class="wp-block-editor-paragraphblock-v1"><td valign="top" style="padding:20px 20px 5px 20px;background-color:#FFFFFF"><p class="paragraph" style="font-family:Helvetica, sans-serif;text-align:center;direction:ltr;line-height:1.15;font-size:24px;margin:0;color:#4A5568;letter-spacing:0;word-break:normal"><a href="{url}" data-type="mergefield" data-filename="" data-id="2f9d5c85-09fe-43be-a031-e21353eff654-4_nMFVYxXK77hHT8FAPat" class="2f9d5c85-09fe-43be-a031-e21353eff654-4_nMFVYxXK77hHT8FAPat" data-mergefield-value="url" data-mergefield-input-value="" style="color: #cd8c30;">Inspirante Techonologies Pvt Ltd.</a></p></td></tr><tr class="wp-block-editor-paragraphblock-v1"><td valign="top" style="padding:20px 20px 20px 20px;background-color:#fff"><p class="paragraph" style="font-family:Helvetica, sans-serif;line-height:1.15;font-size:16px;margin:0;color:#4A5568;letter-spacing:0;word-break:normal">Dear Admin,<br><br>` + name + ` has sent you a feedback about the Ticket Raising system<br><br>The feedback message is: ` + message + `<br><br>If you have any questions or require assistance, feel free to reach out to our dedicated support team at <a href="{inspirantech@gmail.com}" data-type="mergefield" data-id="3d08b48a-6a47-4681-97d2-d7a6fc793f79-IJnBS9_z5-kMvqE9QOhGX" data-filename="" data-mergefield-value="custom" data-mergefield-input-value="inspirantech@gmail.com" class="3d08b48a-6a47-4681-97d2-d7a6fc793f79-IJnBS9_z5-kMvqE9QOhGX" style="color: #cd8c30;">inspirantech@gmail.com</a>.<br><br>Thank you once again for choosing Inspirate Technologies Pvt Ltd. <br><br>We appreciate the opportunity to serve you, and we\'re confident that your experience with us will be both rewarding and enjoyable.<br><br>Best regards,<br>[Your Name]<br>[Your Title/Position]<br>Inspirate Technologies Pvt Ltd<br>[Contact Information]</p></td></tr><tr class="wp-block-editor-imageblock-v1"><td style="background-color:#fff;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0" align="center"><table align="center" width="210" class="imageBlockWrapper" style="width:210px" role="presentation"><tbody></tbody></table></td></tr><tr class="wp-block-editor-headingblock-v1"><td valign="top" style="background-color:#fff;display:block;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-align:center"><p style="font-family:Helvetica, sans-serif;text-align:center;line-height:23.00px;font-size:20px;background-color:#fff;color:#4A5568;margin:0;word-break:normal" class="heading2">Follow us on</p></td></tr><tr class="wp-block-editor-socialiconsblock-v1" role="article" aria-roledescription="social-icons" style="display:table-row;background-color:#fff"><td style="width:100%"><table style="background-color:#fff;width:100%;padding-top:15px;padding-bottom:32px;padding-left:32px;padding-right:32px;border-collapse:separate !important" cellpadding="0" cellspacing="0" role="presentation"><tbody><tr><td align="center" valign="top"><div style="max-width:536px"><table role="presentation" style="width:100%" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td valign="top"><div style="margin-left:auto;margin-right:auto;margin-top:-3.75px;margin-bottom:-3.75px;width:100%;max-width:141px"><table role="presentation" style="padding-left:197.5" width="100%" cellpadding="0" cellspacing="0"><tbody><tr><td><table role="presentation" align="left" style="float:left" class="single-social-icon" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" style="padding-top:3.75px;padding-bottom:3.75px;padding-left:7.5px;padding-right:7.5px;border-collapse:collapse !important;border-spacing:0;font-size:0"><a class="social-icon--link" href="https://www.youtube.com/channel/UCnMdEqI6xEQXvavURAXYiFg" target="_blank" rel="noreferrer"><img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/youtube/youtube-square-solid-color.png" width="32" height="32" style="max-width:32px;display:block;border:0" alt="X (formerly Twitter)"></a></td></tr></tbody></table><table role="presentation" align="left" style="float:left" class="single-social-icon" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" style="padding-top:3.75px;padding-bottom:3.75px;padding-left:7.5px;padding-right:7.5px;border-collapse:collapse !important;border-spacing:0;font-size:0"><a class="social-icon--link" href="https://www.linkedin.com/company/inspirante-technologies-pvt-ltd/?originalSubdomain=in" target="_blank" rel="noreferrer"><img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/linkedin/linkedin-square-solid-color.png" width="32" height="32" style="max-width:32px;display:block;border:0" alt="LinkedIn"></a></td></tr></tbody></table><table role="presentation" align="left" style="float:left" class="single-social-icon" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" style="padding-top:3.75px;padding-bottom:3.75px;padding-left:7.5px;padding-right:7.5px;border-collapse:collapse !important;border-spacing:0;font-size:0"><a class="social-icon--link" href="https://inspirantech.in/" target="_blank" rel="noreferrer"><img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/website/website-square-solid-color.png" width="32" height="32" style="max-width:32px;display:block;border:0" alt="Website"></a></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table></div></td></tr></tbody></table></td></tr>
                                        </table>
                                    
                        </center>
                    </body>
                </html>`
                            }).then(() => {
                                Swal.fire({
                                    title: "Sent Successfully",
                                    text: "Thank you for you time!",
                                    icon: "success",
                                    timer: 1000,
                                    showConfirmButton: false,
                                });
                            });
                            document.getElementById('email').value = "";
                            document.getElementById('message').value = "";
                            document.getElementById('name').value = "";
                        }
                    };

                    function addTicket() {
                        var token = localStorage.getItem('token');
                        if (token) {
                            window.location.href = '/adminTickets/create/' + token;
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Error',
                                text: 'Login before adding a new ticket',
                                showConfirmButton: false,
                                timer: 1000
                            });
                        }
                    }
                </script>
            </div>
        </div>
        <footer class="footer" style="padding: 1px 0;">
            <div class="container">
                <div class="row">
                    <p style="padding: 10px; margin: auto; color:grey;">&copy; 2023 Inspirante Technologies. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    </div>
    </div>
</body>
<!-- javascript -->
<script>
    // script for sidebar
    const sidebarbody = document.querySelector(".sidebarbody");
    const darkLight = document.querySelector("#darkLight");
    const sidebar = document.querySelector(".sidebar");
    const submenuItems = document.querySelectorAll(".submenu_item");
    const sidebarOpen = document.querySelector("#sidebarOpen");
    const sidebarClose = document.querySelector(".collapse_sidebar");
    const sidebarExpand = document.querySelector(".expand_sidebar");

    // Function to check and toggle sidebar based on screen width
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

    function searchTickets() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("searchTicket");
        filter = input.value.toUpperCase();
        table = document.querySelector(".table");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            var found = false;
            for (j = 0; j < tr[i].getElementsByTagName("td").length; j++) {
                // Skip filtering on the header row (index 0)
                if (i !== 0) {
                    td = tr[i].getElementsByTagName("td")[j];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }
                }
            }
            if (found) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = i === 0 ? "" : "none"; // Keep header row visible
            }
        }
    }
</script>
@if ($tickets)
@foreach ($tickets as $index => $ticket)
<!-- Modal for each ticket -->
<div class="modal fade ticket-modal" id="ticketModal{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="ticketModalLabel{{ $index }}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ticketModalLabel{{ $index }}">Ticket Name - {{ $ticket['tname'] }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add the detailed information for the ticket here -->
                <p>Summary: {{$ticket['summary']}}</p>
                <!-- Determine priority and badge class within the modal loop -->
                @php
                $priority = $ticket['priority'];
                $badgeClass = '';

                switch ($priority) {
                case 'Critical':
                $badgeClass = 'badge-danger';
                break;
                case 'Urgent':
                $badgeClass = 'badge-primary';
                break;
                case 'Normal':
                $badgeClass = 'badge-success';
                break;
                }
                @endphp
                <p>Priority: <span class="badge {{ $badgeClass }}" style="padding: 6px; border-radius: 25px;">{{ $priority }}</span></p>
                <p>Status: {{ $ticket['status'] }}</p>
                <p>Time: {{ $ticket['time'] }}</p>

                @if (!empty($ticket['issueimg']))
                <p>Image:</p>
                <img src="{{ asset($ticket['issueimg']) }}" alt="Ticket Image" style="max-width: 100%; height: auto;">
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<p>No ticket available</p>
@endif
<script>
    function showTicketDetails(index) {
        $('.ticket-modal').modal('hide'); // Hide any open modals
        $('#ticketModal' + index).modal('show');
    }
</script>
<!-- modal end -->
</body>

</html>