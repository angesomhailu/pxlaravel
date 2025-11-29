@extends('layouts.app')
@section('head')
<title>Players List</title>
@endsection
@section('styles')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table,th, td {
        border: 1px solid black;
    }
    th,td {
        padding: 10px;
        text-align: left;
    }
    
    th {
        background-color: #4CAF50;
        color:rgb(255, 255, 255);
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .search {
        margin-bottom: 20px;
        display: flex;
        gap: 10px;
        
    }
    .search input {
        flex: 1;
        padding: 8px;
        font-size: 16px;
    }
    .search button {
        padding: 8px 16px;
        font-size: 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    .search button:hover {
        background-color: #45a049;
    }
    button {
        margin-right: 5px;
        padding: 5px 10px;
        font-size: 14px;
        cursor: pointer;
    }

</style>
@endsection
@section('content')
<section>
     <h1>Different Club's Players List</h1>
     
     <form action="{{url('/player')}}" method="GET">
        <div class="search">
            <input type="text" name="search" id="search" placeholder="Search players...">
            <button type="submit">Search</button>
            <a class="btn btn-primary" href="{{url('/player/create')}}">Add Player</a>    
        </div>
     </form>   
     <table>
        <thead>
            <tr>
                <th> ID</th>
                <th> Image</th>
                <th> Name</th>
                <th> Email</th>
                <th> Club</th>
                <th> Country</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{$player->id}}</td>
                    <td>
                        <img src='{{asset('storage/'.$player->image)}}' width="50" height="50" />
                    </td>
                    <td>{{$player->name}}</td>
                    <td>{{$player->email}}</td>
                    <td>{{$player->club}}</td>
                    <td>{{$player->country}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('/player/show',$player->id)}}">View</a>
                        <a class="btn btn-primary" href="{{url('/player/edit',$player->id)}}">Edit</a>
                        <form action="{{url('/player/delete',$player->id)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure to delete the player?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
     </table>

<div class="container">
    {{$players->links('pagination::bootstrap-5')}}
</div>
</section>
@endsection