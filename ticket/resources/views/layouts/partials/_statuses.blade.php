<?php

use Illuminate\Support\Str;
use App\Models\priority;
use App\Models\Project;

$priorities = priority::all();
$projects = project::all();
$tokenFromUrl = request()->path();
if (Str::is('clientTickets/create', $tokenFromUrl)) {
?>
    <div class="form-group">
        <label for="project">Projects</label>
        <select class="form-control" id="project" name="project" required>
            <option value="" selected disabled>--Select--</option>
            @foreach($projects as $project)
            <option value="{{ $project->pname . ' - ' . $project->plink }}" {{ isset($tickets['project']) && $tickets['project'] == $project->pname . ' - ' . $project->plink ? 'selected' : '' }}>{{ $project->pname . ' - ' . $project->plink }}</option>
            @endforeach
        </select><br>
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="" selected disabled>--Select--</option>
            <option value="Open">Open</option>
        </select><br>
        <label for="priority">Priority</label>
        <select class="form-control" id="priority" name="priority" required>
            <option value="" selected disabled>--Select--</option>
            @foreach($priorities as $priority)
            <option value="{{ $priority->name }}" {{ isset($tickets['priority']) && $tickets['priority'] == $priority->name ? 'selected' : '' }}>{{$priority->name}}</option>
            @endforeach
        </select>
    </div>
<?php
} else {
?>
    <div class="form-group">
        <label for="project">Projects</label>
        <select class="form-control" id="project" name="project" required>
            <option value="" selected disabled>--Select--</option>
            @foreach($projects as $project)
            <option value="{{ $project->pname . ' - ' . $project->plink }}" {{ isset($tickets['project']) && $tickets['project'] == $project->pname . ' - ' . $project->plink ? 'selected' : '' }}>{{ $project->pname . ' - ' . $project->plink }}</option>
            @endforeach
        </select><br>
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="" selected disabled>--Select--</option>
            @foreach($statuses as $status)
            <option value="{{ $status->name }}" {{ isset($tickets['status']) && $tickets['status'] == $status->name ? 'selected' : '' }}>{{$status->name}}</option>
            @endforeach
        </select><br>
        <label for="priority">Priority</label>
        <select class="form-control" id="priority" name="priority" required>
            <option value="" selected disabled>--Select--</option>
            @foreach($priorities as $priority)
            <option value="{{ $priority->name }}" {{ isset($tickets['priority']) && $tickets['priority'] == $priority->name ? 'selected' : '' }}>{{$priority->name}}</option>
            @endforeach
        </select>
    </div>
<?php
}