@extends('layouts.app')
@section('head')
<title>Edit Player</title>
@endsection
@section('styles')
<style>
form {
    max-width: 400px;
    margin: auto;
    padding: 1em;
    border: 1px solid #ccc;
    border-radius: 1em;
}
label {
    margin-top: 1em;
    display: block;
}
input {
    width: 100%;
    padding: 0.5em;
    margin-top: 0.5em;
}
button {
    margin-top: 1em;
    padding: 0.7em;
    width: 100%;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 0.3em;
    cursor: pointer;
}
button:hover {
    background-color: #218838;
}
h2 {
    text-align: center;
    margin-bottom: 1em;
}

</style>
@endsection
@section('content')
<section>

<form action="{{url('/player/edit',$players->id)}}" method="POST">
    @csrf
    <h2>Update The Player</h2>
     <label for="name">Player Name:</label>
    <input type="text" id="name" name="name" value="{{ $players->name }}"><br>
     <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $players->email }}"><br>
     <label for="club">Club:</label>
    <input type="text" id="club" name="club" value="{{ $players->club }}"><br>
     <label for="country">Country:</label>
    <input type="text" id="country" name="country" value="{{ $players->country }}"><br>
    <button type="submit" onclick="return confirm('Are you sure to update the information of the player?')">Update Player</button>
</form>
</section>
@endsection
