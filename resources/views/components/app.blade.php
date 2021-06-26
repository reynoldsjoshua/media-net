<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('/css/custom.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/css/tailwindcss/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    
    <header>
        <nav class="flex justify-between nav-max-w mx-auto">
            <ul class="flex items-center space-x-4">
                <li class="">
                    <a href="#" >
                        <img src="{{ asset('/img/logo.svg') }}" />
                    </a>
                </li>
                <li class="li-nav-border-color text-white border-r-2 pr-2">
                    <a href="#">Home</a>
                </li>
                <li class="li-nav-border-color text-white border-r-2 pr-2">
                    <a href="#">Movies</a>
                </li>
                <li class="li-nav-border-color text-white border-r-2 pr-2">
                    <a href="#">Games</a>
                </li>
                <li class="li-nav-border-color text-white border-r-2 pr-2">
                    <a href="#">News</a>
                </li>
            </ul>
            
            <div class="flex">
                <input type="text">
                <ul class="flex items-center">
                    <li>
                        <a href="#" class="bg-red-400">
                            <img src="{{ asset('/img/person.svg') }}" class="inline-block"  alt="person icon"> Profile</li>
                        </a>
                    </ul>
            </div>
        </nav>
    </header>
    
    {{-- <header><nav class="flex"><img src="{{ asset('/img/logo.svg') }}" /> Home | Movies | Games | News</nav></header> --}}

    {{$slot}}

    {{-- <footer>Copyright</footer> --}}
</body>
</html>
