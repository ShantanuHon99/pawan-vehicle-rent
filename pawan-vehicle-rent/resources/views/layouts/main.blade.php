<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <style>
        /* Full page overlay for the spinner */
        #loading-spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .spinner-border {
            width: 4rem;
            height: 4rem;
            border-width: 0.3rem;
        }
    </style>
</head>
<body>
<div id="loading-spinner">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
<script>
        // Wait for the page to load and hide the spinner after 2 seconds
        window.onload = function() {
            setTimeout(function() {
                document.getElementById("loading-spinner").style.display = "none";
            }, 1500); // 2000 milliseconds = 2 seconds
        }
    </script>
</html>
