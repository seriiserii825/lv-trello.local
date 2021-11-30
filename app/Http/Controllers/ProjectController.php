<?php

namespace App\Http\Controllers;

use App\Card;
use App\Models\Column;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $projects_list = Project::all();
        return view('projects.index', compact('projects_list'));
    }

    public function single(Request $request)
    {
        $project = Project::where('slug', $request->slug)->first();
        $cards = $project->cards;
        $user_name = Auth::user()->name;
        $user_cards = [];
        foreach ($cards as $card) {
            if ($card->user_id === Auth::user()->id) {
                $user_cards[] = $card;
            }
        }
        $cards = $user_cards;

        $columns = Column::all();
        return view('projects.single', compact('project', 'cards', 'columns', 'user_name'));
    }

    public function update(Request $request, $id)
    {
        $card = Card::find($id);
        $card->update($request->all());
        $slug = $request->slug;
        return redirect()->route('project.single', ['slug' => $slug])->with('Card was updated');
    }

    public function delete(Request $request, $id)
    {
        $card = Card::find($id);
        $card->delete();
        return redirect()->route('project.index')->with('success', 'Cards was deleted');
    }
}
