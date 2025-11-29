<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('head')
    @yield('styles')
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    nav {
        background-color: #333;
        color: white;
        padding: 10px;
        text-align: center;
    }
    nav a {
        color: white;
        margin: 0 15px;
        text-decoration: none;
    }
    nav a:hover {
        text-decoration: underline;
    }
    
    </style>
</head>
<body>
<main>
    <nav>
        <a href="/">Home</a> 
        <a href="/about">About Us</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact</a>
    </nav> 
        @yield('content') 
</main>
</body>
 
  @yield('scripts')
</html>