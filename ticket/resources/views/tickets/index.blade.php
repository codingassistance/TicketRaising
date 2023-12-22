@extends('layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <a class="nav-link" onclick="goToProfile()" style="cursor: pointer">Profile</a>
    <a class="nav-link" href="/" onclick=" logout()">Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function logout() {
            if (localStorage.getItem('token') !== null) {
                localStorage.clear();
                Swal.fire({
                    icon: 'success',
                    title: 'Logged Out',
                    text: 'Successfully logged out',
                    showConfirmButton: false,
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Cannot Logout',
                    text: 'Before you log out, make sure you are logged in.',
                    showConfirmButton: false,
                });
            }
        }

        var token = localStorage.getItem('token');
        var isAdmin = localStorage.getItem('isAdmin');
        const currentPath = window.location.pathname;

        if (token && isAdmin && currentPath === "/tickets") {
            window.location.href = "/newclient";
        } else if (!token && currentPath === "/tickets") {
            window.location.href = "/"
        } else if (token && currentPath === "/check" || token && currentPath === "/register") {
            Swal.fire({
                title: "Logging in...",
                text: "Login successful!",
                icon: "success",
                timer: 1000,
                showConfirmButton: false
            });
            window.location.href = "/tickets";
        }
    </script>

    <script>
        // Function to navigate to the profile page with the token as a query parameter
        function goToProfile() {
            token = localStorage.getItem('token');
            if (token) {
                window.location.href = '/get-user-info/' + token;
            } else {
                // Handle the case when 'token' is not found in local storage
                Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'Login before checking the profile',
                    showConfirmButton: false,
                    timer: 1000
                });
            }
        }
    </script>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tickets</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    <!-- <a class="btn btn-primary" href="/tickets/create">Add New Ticket</a> -->
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Ticket</th>
                    <th scope="col">Summary</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id}}</td>
                    <td>{{ $ticket->summary}}</td>
                    <td>{{ $ticket->status}}</td>
                    <td><a href="/tickets/{{ $ticket->id }}" class="btn btn-primary">Update</a>
                        <a href="/tickets/delete/{{ $ticket->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection