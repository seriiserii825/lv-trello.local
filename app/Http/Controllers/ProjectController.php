<?php

namespace App\Http\Controllers;

use App\Models\Column;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $user_email = Auth::user() ? Auth::user()->email : '';
        $projects_list = Project::all();
        return view('projects.index', compact('user_email', 'projects_list'));
    }
    public function single(Request $request)
    {
        $project = Project::where('slug', $request->slug)->first();
        $cards = $project->cards;
        $columns = Column::all();
        return view('projects.single', compact('project', 'cards', 'columns'));
    }
}
