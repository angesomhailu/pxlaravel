@extends('layouts.app')
@section('head')
    <title>Teachers Page</title>
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
     <h1>Welcome to the Teacher Portal</h1>
    <form action="{{url('/teacher')}}" method="GET">
        <div class="search">
            <input type="text" placeholder="Search teachers..." id="search" name="search">
            <button type="submit">Search</button>
        </div>
    </form>
    <table>
        <h2>Teacher List</h2>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->subject }}</td>
                <td>
                    <button>View</button>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </section>
    @endsection
