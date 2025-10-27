<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student</title>
    @yield('styles')
</head>
<body>
<main>
        <nav>
        <a href="/">Home</a> 
        <a href="/about">About Us</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact</a>
    </nav>
    <div class="sidebar">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>   
        </div>
        @yield('content') 
</main>
</body>
 <footer>
    <p>&copy; 2024 Your Company. All rights reserved.</p>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About Us</a> |
        <a href="/services">Services</a>
    </nav>
 </footer>
  @yield('scripts')
</html>