@extends('layouts.main')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

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
    <form action="" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="summary">Summary</label>
            <input type="text" id="summary" name="summary" class="form-control {{ $errors->has('summary')?'is-invalid':'' }}" value="{{ old('summary',$ticket->summary) }}" />
        </div>
        @if($errors->has('summary'))
        <span class="help-block">
            <strong>
                {{ $errors->first('summary') }}
            </strong>
        </span>
        @endif
        <br>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" class="form-control {{ $errors->has('description')?'is-invalid':'' }}" value="{{ old('description',$ticket->description) }}" />
        </div>
        @if($errors->has('description'))
        <span class="help-block">
            <strong>
                {{ $errors->first('description') }}
            </strong>
        </span>
        @endif
        <br>
        @include('layouts.partials._statuses')
        <br>
        <button class=" btn btn-primary" type="submit">Update</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Back</a></div>
    </form>
</main>
@endsection