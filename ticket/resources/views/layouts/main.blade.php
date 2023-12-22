<!doctype html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<title>Tickets</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@include('layouts.partials._head')

<body>
    <!-- @include('layouts.partials._navigation') -->

    <div class="container-fluid">
        <div class="row">
            @include('layouts.partials._alerts')
            @yield('content')
        </div>
    </div>


</body>

</html>