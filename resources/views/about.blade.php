@extends('layouts.app')
@section('styles')
<style>
    /* Add your custom styles here */
    h1 {
        color: #333;
    }
    p {
        font-size: 16px;
    }
    .sidebar {
        background-color: #f4f4f4;
        padding: 15px;
        margin-top: 20px;
    }
    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }
    .sidebar ul li {
        margin-bottom: 10px;
    }
    .sidebar ul li a {
        text-decoration: none;
        color: #007BFF;
    }
    .sidebar ul li a:hover {
        text-decoration: underline;
    }
    nav {
        margin-top: 20px;
    }

    nav a {
        margin-right: 15px;
        text-decoration: none;
        color: #007BFF;
    }
    nav a:hover {
        text-decoration: underline;
    }


</style>
@endsection
@section('content')
<section>
    <h1>About Us</h1>
    <p>Learn more about our company and values.</p>
</section>
@endsection