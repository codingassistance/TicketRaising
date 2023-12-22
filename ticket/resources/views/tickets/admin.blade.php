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
    <title>Admin page</title>
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
                            <a class="social-icon--link social-icon" href="https://inspirantech@gmail.com" target="_blank" rel="noreferrer">
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
                                    <a href="/" class="nav_link active">
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
                    <!-- Chart begins here -->
                    <div class="container mt-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Ticket Status</h5>
                                            <canvas id="ticketsChart1" style="max-width: 400px; max-height: 300px;margin:auto"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Ticket Priority</h5>
                                            <canvas id="ticketsChart2" style="max-width: 400px; max-height: 300px;margin:auto"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chart ends here -->
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
                                                    <th scope="col">Raised By</th>
                                                    <th scope="col">Priority</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Actions</th>
                                                    >
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($tickets))
                                                @foreach ($tickets as $index => $ticket)
                                                <tr>
                                                    <th scope="row">{{ $index + 1 }}</th>
                                                    <td style="max-width:150px;">
                                                        {{$ticket['tname']}}
                                                    </td>
                                                    @php
                                                    $clientToken=$ticket['raisedTo'];
                                                    $user=User::where('token',$clientToken)->first();
                                                    $name=$user->fname." ".$user->lname;
                                                    @endphp
                                                    <td>{{ $name }}</td>
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
                                                            View
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a onclick="update('<?php echo addslashes($ticket['id']); ?>')" class="btn btn-success" style="color:white;border-radius:8px;margin-right:3px;padding:7px;margin-bottom:3px">Update</a>
                                                        <a onclick="deletee('<?php echo addslashes($ticket['id']); ?>')" class="btn btn-danger" style="color:white;border-radius:8px;padding:7px">Delete</a>
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
                                                    // Chart data
                                                    var openTicketsCount = parseInt("{{ $openTicketsCount }}");
                                                    var inProgressTicketsCount = parseInt("{{ $inProgressTicketsCount }}");
                                                    var closedTicketsCount = parseInt("{{ $closedTicketsCount }}");

                                                    var criticalCount = parseInt("{{ $criticalCount }}");
                                                    var urgentCount = parseInt("{{ $urgentCount }}");
                                                    var normalCount = parseInt("{{ $normalCount }}");

                                                    // Chart options
                                                    var options = {
                                                        responsive: true,
                                                        maintainAspectRatio: false,
                                                        title: {
                                                            display: true,
                                                            text: 'Ticket Status',
                                                            fontSize: 16,
                                                        },
                                                        legend: {
                                                            position: 'bottom',
                                                        },
                                                        tooltips: {
                                                            callbacks: {
                                                                label: function(tooltipItem, data) {
                                                                    var label = data.labels[tooltipItem.index] || '';
                                                                    var value = data.datasets[0].data[tooltipItem.index] || '';
                                                                    return label + ': ' + value;
                                                                },
                                                            },
                                                        },
                                                        animation: {
                                                            animateScale: true,
                                                            animateRotate: true,
                                                        },
                                                    };

                                                    var ctx1 = document.getElementById('ticketsChart1').getContext('2d');
                                                    var ticketsChart1 = new Chart(ctx1, {
                                                        type: 'pie',
                                                        data: {
                                                            labels: ['Open', 'Progress', 'Closed'],
                                                            datasets: [{
                                                                data: [openTicketsCount, inProgressTicketsCount, closedTicketsCount],
                                                                backgroundColor: ['#ff66b2', '#6610f2', '#ffc107'],
                                                            }]
                                                        },
                                                        options: options,
                                                    });

                                                    var ctx2 = document.getElementById('ticketsChart2').getContext('2d');
                                                    var ticketsChart2 = new Chart(ctx2, {
                                                        type: 'pie',
                                                        data: {
                                                            labels: ['Critical', 'Urgent', 'Normal'],
                                                            datasets: [{
                                                                data: [criticalCount, urgentCount, normalCount],
                                                                backgroundColor: ['#dc3545', '#007bff', '#28a745'],
                                                            }]
                                                        },
                                                        options: options,
                                                    });
                                                    //chart script ends
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
                                    </div>
                                </div>
                            </section>
                        </div>
                        </main>

                        <script>
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

                            function update(id) {
                                var updateUrl = '/update/' + id;
                                window.location.href = updateUrl;
                            }

                            function deletee(id) {
                                var updateUrl = '/deletee/' + id;
                                window.location.href = updateUrl;
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