@extends('layouts.app')
@section('head')
<title>Create New Player</title>
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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<section>

<form action="{{url('/player/create')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Create New Player</h2>
     <label for="name">Player Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
     <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
     <label for="club">Club:</label>
    <input type="text" id="club" name="club" value="{{ old('club') }}"><br>
     <label for="country">Country:</label>
    <input type="text" id="country" name="country" value="{{ old('country') }}"><br>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image"  accept="image/*"><br>
    <button type="submit">Create Player</button>
</form>
</section>
@endsection
