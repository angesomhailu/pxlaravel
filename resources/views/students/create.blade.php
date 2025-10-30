@extends('layouts.app')
@section('head')
    <title>Create Student</title>
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
    <h1>Create a New Student</h1>
    <form>
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>
        <div>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>  
        <button type="submit">Create Student</button>
    </form>
</section>
@endsection
