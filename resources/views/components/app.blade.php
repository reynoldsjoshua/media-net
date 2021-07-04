<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/tailwindcss.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    
    <header class="navigation">
        <nav class="flex justify-between mx-auto">
            <ul class="flex items-center">
                <li class="logo_container">
                    <a href="#" >
                        <img class="logo" src="{{ asset('/img/logo.svg') }}" />
                    </a>
                </li>
                <li class="text-white pr-p18 nav_link">
                    <a href="#" class="active">Home</a>
                </li>
                <li class="text-white nav_link px-p18">
                    <a href="#">Movies</a>
                </li>
                <li class="text-white nav_link px-p18">
                    <a href="#">Games</a>
                </li>
                <li class="text-white nav_link px-p18">
                    <a href="#">News</a>
                </li>
            </ul>
            
            <div class="flex">
                <form action="" method="POST" class="flex justify-center items-center">
                    <div class="flex">
                        <input class="py-3" type="text" name="search">
                        <button type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
                <ul class="flex items-center profile_wrapper">
                    <li class="profile_container">
                        <a href="#" class="flex justify-center items-center">
                            <img src="{{ asset('/img/person.svg') }}" class="inline-block profile_icon"  alt="person icon"> Profile
                        </a>
                    </li>
                    <li class="menu_container hidden">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    {{$slot}}

    <footer class="footer">
        
    </footer>

</body>
</html>
