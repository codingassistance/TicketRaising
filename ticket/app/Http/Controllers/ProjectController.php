<?php

namespace App\Http\Controllers;

use App\Models\Project; // Import the Project model
use Illuminate\Http\Request;
use App\Models\Ticket;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProjectController extends Controller
{

    public function addp()
    {
        return view('tickets.addp');
    }

    public function projectstore(Request $request)
    {
        $request->validate([
            'pname' => 'required',
            'plink' => 'required',
        ]);

        Project::create([
            'pname' => $request->input('pname'),
            'plink' => $request->input('plink'),
        ]);

        return redirect('/newadmin')->with('success', 'Project created successfully!');
    }
}
