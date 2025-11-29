@extends('layouts.app')
@section('head')
<title>Show Player</title>
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
    
</style>
@endsection
@section('content')
<section>
    <h1>Player Details</h1>
    <table>
     <thead>
        <tr>
            <th>Player Name</th>
            <th>Player Email</th>
            <th>Player Club</th>
            <th>Player Country</th>
        </tr>
     </thead>
        <tbody>
            <tr>
                <td>{{ $players->name }}</td>
                <td>{{ $players->email }}</td>
                <td>{{ $players->club }}</td>
                <td>{{ $players->country }}</td>
            </tr>
        </tbody>
    </table>
    <br>
</section>
@endsection