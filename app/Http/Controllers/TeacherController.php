<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return Teacher::all();
        $teachers = Teacher::when($request->search, function ($query) use ($request) {
            return $query->whereAny(['name', 'email'], $request->search);
        })->paginate(10);
        return view('teachers.index', compact('teachers'));
    }
    public function getData()
    {
        return Teacher::find(4);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $item = new Teacher();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->subject = $request->subject;
        $item->save();
        return redirect('/teacher');
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
        $item = Teacher::findOrFail($id);
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item = Teacher::findOrFail($id);
        $item->email = 'hailu1414@gmail.com';
        $item->update();
        return "Teacher updated successfully";
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
        $item = Teacher::findOrFail($id);
        $item->delete();
        return "Teacher deleted successfully";
    }
}
