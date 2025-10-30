@extends('layouts.app')
@section('head')
    <title>Create Car</title>
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
    <h1>Create a New Car</h1>
    <form action='{{URL('/cars/create')}}' method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" required>
        </div>
        <div>
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" required>
        </div>
         <div>
            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required>
        </div>
        <button type="submit">Create Student</button>
    </form>
</section>
@endsection
