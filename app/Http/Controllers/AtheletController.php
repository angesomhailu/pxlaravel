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
