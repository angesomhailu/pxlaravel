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
    <h1>Create a New Teacher</h1>
    <form action="{{url('/teacher/create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" >
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" >
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" >
        </div>  
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" >
        </div> 
        <button type="submit">Create Teacher</button>
    </form>
</section>
@endsection
