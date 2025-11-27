@extends('layouts.app')
@section('head')
    <title>Students Page</title>
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
     <h1>Welcome to the Student Portal</h1>
    <form action="{{url('/student')}}" method="GET">
        <div class="search">
            <input type="text" placeholder="Search students..." id="search" name="search">
            <button type="submit">Search</button>   
            <a class="btn btn-primary" href="{{ url('/student/create') }}">Add Student</a>
        </div>
    </form>
    <table>
        <h2>Student List</h2>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Date_of_Birth</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->fullname }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->department }}</td>
                <td>
                    <a class="btn btn-primary" href="#">View</a>
                    <a class="btn btn-primary" href="{{url('/student/edit',$student->id)}}">Edit</a>
                    <a class="btn btn-primary" href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination" >
  {{$students->links('pagination::bootstrap-5')}}
    </div>
    </section>
    @endsection
