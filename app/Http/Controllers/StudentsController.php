<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Student::when($request->search, function ($query) use ($request) {
            return $query->whereAny(['id', 'name', 'email', 'age', 'gender'], $request->search);
        })->paginate(10);
        return view('students.index', compact('students'));
        //return Student::withTrashed()->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $item = new Student();
        $item->name = 'kebede asfaw';
        $item->email = 'kebede@example.com';
        $item->age = 24;
        $item->gender = 'male';
        $item->save();
        return "Student added successfully";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return view('students.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $item = Student::findOrFail($id);
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item = Student::findOrFail($id);
        $item->name = 'trhas kidu';
        $item->email = 'trhas@example.com';
        $item->age = 16;
        $item->gender = 'female';
        $item->update();
        return "Student updated successfully";
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
    public function destroy()
    {
        //
        $item = Student::findOrFail(1);
        $item->forceDelete();
        return "Student deleted successfully";
    }
}
