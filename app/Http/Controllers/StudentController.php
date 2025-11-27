<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $students = Student::when($request->search, function ($query) use ($request) {
            return $query->whereAny(['fullname', 'email'], $request->search);
        })->paginate(10);
        return view('students.index', compact('students'));
    }



    public function create(Request $request)
    {
        $item = new Student();
        $item->fullname = $request->fullname;
        $item->email = $request->email;
        $item->date_of_birth = $request->date_of_birth;
        $item->department = $request->department;
        $item->save();
        return redirect('student');
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $students = Student::findOrFail($id);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $students = Student::findOrFail($id);
        $students->fullname = $request->fullname;
        $students->email = $request->email;
        $students->date_of_birth = $request->date_of_birth;
        $students->department = $request->department;
        $students->update();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
