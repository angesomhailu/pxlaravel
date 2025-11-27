@extends('layouts.app')
@section('head')
    <title>Create Teacher</title>
@endsection
@section('styles')
    <style>
        form div {
            margin-bottom: 10px;
        }
        label {
            display: inline-block;
            width: 100px;
        }
        input, select {
            padding: 5px;
            width: 200px;
        }
        button {
            padding: 7px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }

    </style>
@endsection
@section('content')
<section>
    <h1>Edit Teacher</h1>
    <form action="{{url('/teacher/edit',$teachers->id)}}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required value='{{$teachers->name}}'>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value='{{$teachers->email}}'>
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required value='{{$teachers->subject}}'>
        </div>  
        <button type="submit" onclick="return confirm('The teacher updated successfully')">Update Teacher</button>
    </form>
</section>
@endsection
