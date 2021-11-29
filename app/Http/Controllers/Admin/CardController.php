<?php

namespace App\Http\Controllers\Admin;

use App\Card;
use App\Http\Controllers\Controller;
use App\Models\Column;
use App\Models\Project;
use App\User;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $cards = Card::query()->orderByDesc('created_at')->get();
        return view('admin.card.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $projects = Project::all();
        $columns = Column::all();
        $users = User::all();
        return view('admin.card.create', compact('projects', 'columns', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        Card::create($request->all());
        return redirect()->route('cards.index')->with('Card was created');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $card = Card::find($id);
        $projects = Project::all();
        $columns = Column::all();
        $users = User::all();
        return view('admin.card.edit', compact('card', 'projects', 'columns', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        $card = Card::find($id);
        $card->update($request->all());
        return redirect()->route('cards.index')->with('Card was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $card = Card::find($id);
        $card->delete();
        return redirect()->route('cards.index')->with('success', 'Cards was deleted');
    }
}
