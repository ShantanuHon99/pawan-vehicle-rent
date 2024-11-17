<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    
    <link rel="stylesheet" href={{asset('../css/header.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
<header>
<div class="div101">
        <a href="/"><img src="../assets/images/logo.png" alt="Logo" class="logo" href="/"></a>
        <div class="nav101" id="navbar">
            <div class="menu-toggle" id="menuToggle">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="navlink101" id="navLinks">
                <li><a href="/" >Home</a></li>
                <li><a href="/vehicles">Rent Vehicle</a></li>
                <li><a href="/packages">Travel Packages</a></li>
                <li><a href="/#about">About Us</a></li>
            </ul>
        </div>
    </div>



</header>

</body>
<script src="{{ asset('../js/header.js') }}"></script> 

</html>