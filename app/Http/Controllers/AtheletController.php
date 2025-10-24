<?php

namespace App\Http\Controllers;

use App\Models\Athelet;
use Illuminate\Http\Request;

class AtheletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Athelet::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $item = new Athelet();
        $item->name = 'hagos aregay';
        $item->age = 11;
        $item->sport = 'football';
        $item->team = 'liverpool';
        $item->save();
        return "Athelet created successfully!";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        // $item = Athelet::where('sport', 'football')->where(function ($query) {
        //     $query->where('age', '>', 15)->orWhere('age', '<', 20);
        // })->get();
        //$item = Athelet::where('sport', 'basketball')->whereBetween('age', [20, 30])->get();
        // $item = Athelet::where('sport', 'basketball')->whereNotBetween('age', [20, 30])->get();
        //$item = Athelet::whereIn('id', [1, 2, 6])->get();
        //$item = Athelet::whereNotIn('id', [1, 2, 6])->get();
        //$item = Athelet::whereAny(['age', 'id'], 23)->get();
        $item = Athelet::whereAll(['age', 'id'], 10)->get();
        return $item;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $item = Athelet::findOrFail($id);
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item = Athelet::findOrFail($id);
        $item->name = 'gemechusa';
        $item->age = 33;
        $item->sport = 'gymnastics';
        $item->team = 'ferrari';
        $item->update();
        return "Athelet updated successfully!";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = Athelet::findOrFail($id);
        $item->delete();
        return "Athelet deleted successfully!";
    }
}
