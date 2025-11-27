<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Requests\TeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $teachers = Teacher::when($request->search, function ($query) use ($request) {
            return $query->whereAny(['name', 'email'], $request->search);
        })->paginate(10);
        return view('teachers.index')->with('teachers', $teachers);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(TeacherRequest $request)
    {
        //
        $item = new Teacher();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->subject = $request->subject;
        $item->save();
        return redirect('teacher');
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
        $teachers = Teacher::findOrFail($id);
        return view('teachers.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $teachers = Teacher::findOrFail($id);
        return view('teachers.edit')->with('teachers', $teachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $teachers = Teacher::findOrFail($id);
        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->subject = $request->subject;
        $teachers->update();
        return redirect('teacher');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $teachers = Teacher::findOrFail($id);
        $teachers->delete();
        return redirect('teacher');
    }
}
