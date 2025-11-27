@extends('layouts.app')
@section('head')
    <title>Edit Student</title>
@endsection
@section('styles')
<style>
    div {
        margin-bottom: 10px;
    }
    label {
        display: inline-block;
        width: 120px;
    }
    input {
        padding: 5px;
        width: 250px;
    }
    button {
        padding: 8px 16px;
        font-size: 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }

</style>
@endsection
@section('content')
<section>
     <h2>Please Edit Student</h2>
    <form action="{{url('/student/edit',$students->id)}}" method="POST">
        @csrf
        <div>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required value="{{$students->$fullname}}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="{{$students->email}}">
        </div>
        <div>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required value="{{$students->date_of_birth}}">
        </div>
        <div>
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required value="{{$students->department}}">
        </div>
        <button type="submit">Update Student</button>
    </section>
    @endsection
