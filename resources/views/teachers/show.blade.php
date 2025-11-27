@extends('layouts.app')
@section('head')
    <title>View Teacher</title>
@endsection
@section('styles')
    <style>
        section {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

    </style>
@endsection
@section('content')
<section>
    <h1>Teacher {{$teachers->id}} Information</h1>
   <div>
        <div>
            <label for="name">Name: {{$teachers->name}}</label>
        </div>
        <div>
            <label for="email">Email: {{$teachers->email}}</label>
        </div>
        <div>
            <label for="subject">Subject: {{$teachers->subject}}</label>
        </div>
   </div>
</section>
@endsection
