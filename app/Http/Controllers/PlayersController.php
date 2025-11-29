<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayersRequest;
use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $players = Players::when($request->search, function ($query) use ($request) {
            $query->where('email', $request->search);
        })->paginate(10);
        return view('players.index')->with('players', $players);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(PlayersRequest $request)
    {
        //
        $imagePath = '';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('photos', 'public');
        }

        $players = new Players();
        $players->name = $request->name;
        $players->email = $request->email;
        $players->club = $request->club;
        $players->country = $request->country;
        $players->image = $imagePath;
        $players->save();
        return redirect('player');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $players = Players::findOrFail($id);
        return view('players.show', compact('players'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $players = Players::findOrFail($id);
        return view('players.edit', compact('players'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $players = Players::findOrFail($id);
        $players->name = $request->name;
        $players->email = $request->email;
        $players->club = $request->club;
        $players->country = $request->country;
        $players->update();
        return redirect('player');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $players = Players::findOrFail($id);
        $players->delete();
        return redirect('player');
    }
}
