@extends('layouts.app')
@section('head')
    <title>Add Student</title>
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
@if ($errors->any())
   <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
   </div>
@endif 
<section>
     <h2>Please Add Student</h2>
    <form action="{{url('/student/create')}}" method="POST">
        @csrf
        <div>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" >
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
        </div>
        <div>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" >
        </div>
        <div>
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" >
        </div>
        <button type="submit">Add Student</button>
    </section>
    @endsection
