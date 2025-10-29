<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
     @yield('head')
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
   
        @yield('content') 
</main>
</body>
 <footer>
    <p>&copy; 2024 Your Company. All rights reserved.</p>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About Us</a> |
        <a href="/services">Services</a>
        <a href="/contact">Contact</a>
    </nav>
 </footer>
  @yield('scripts')
</html>