<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mainwing Cars</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Mainwing Cars
                </div>
      <marquee>Welcome to MainWing Cars. Please register with us and enjoy a wide range of services at your disposal</marquee>

               </div>
        </div>
    </body>
    <marquee direction="right">Welcome to MainWing Cars. Please register with us and enjoy a wide range of services at your disposal</marquee>
</html>
