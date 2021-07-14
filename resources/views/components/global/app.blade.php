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
    <div class="background">

        <header class="navigation">
            <nav class="flex justify-between mx-auto">
                <ul class="flex items-center">
                    <li class="logo_container">
                        <a href="/" >
                            <img class="logo" src="{{ asset('/img/logo.svg') }}" />
                        </a>
                    </li>
                    <li class="text-white pr-p18 nav_link">
                        <a href="/" class="active">Home</a>
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

        <main>
            {{$slot}}
        </main>

        <div class="footer_background">
            <footer class="footer flex flex-col items-end justify-end">
                <div class="block_wrapper mx-auto">
                    <div class="footer_block flex justify-start items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="130.808" height="93.206"><g fill="#fff"><text transform="translate(73.808 38.75)" font-size="18" font-family="HelveticaNeue-Bold, Helvetica Neue" font-weight="700"><tspan x="0" y="0">Follow</tspan><tspan x="0" y="22">Us</tspan></text><path class="social_links facebook" d="M58.925 26.75h-24.75a3.375 3.375 0 00-3.375 3.375v24.75a3.375 3.375 0 003.375 3.375h9.65V47.541H39.4V42.5h4.43v-3.842c0-4.37 2.6-6.784 6.586-6.784a26.836 26.836 0 013.9.34V36.5h-2.2a2.521 2.521 0 00-2.842 2.723V42.5h4.836l-.773 5.041h-4.062V58.25h9.65a3.375 3.375 0 003.375-3.375v-24.75a3.375 3.375 0 00-3.375-3.375z"/><path class="social_links twitter" d="M33.705 0H4.045A4.046 4.046 0 000 4.045v29.66a4.046 4.046 0 004.045 4.045h29.66a4.046 4.046 0 004.045-4.045V4.045A4.046 4.046 0 0033.705 0zm-4.12 13.381c.017.236.017.48.017.716a15.616 15.616 0 01-15.724 15.724 15.651 15.651 0 01-8.485-2.477 11.643 11.643 0 001.331.067 11.08 11.08 0 006.859-2.361 5.534 5.534 0 01-5.165-3.834 5.956 5.956 0 002.494-.1 5.527 5.527 0 01-4.424-5.426v-.067a5.523 5.523 0 002.494.7 5.515 5.515 0 01-2.46-4.6 5.457 5.457 0 01.75-2.789 15.692 15.692 0 0011.392 5.78 5.538 5.538 0 019.429-5.047A10.829 10.829 0 0031.6 8.334a5.512 5.512 0 01-2.427 3.042 11 11 0 003.185-.859 11.632 11.632 0 01-2.773 2.864z"/><path class="social_links snapchat" d="M31.669 59.25H9.3a3.051 3.051 0 00-3.05 3.05v22.369a3.051 3.051 0 003.05 3.05h22.369a3.051 3.051 0 003.05-3.05V62.3a3.051 3.051 0 00-3.05-3.05zm-.413 20.011c-.222.515-1.15.89-2.847 1.157a7.809 7.809 0 00-.273 1.01.49.49 0 01-.515.375h-.013c-.394 0-.813-.184-1.64-.184a3.34 3.34 0 00-2.377.871 4.741 4.741 0 01-3.127 1.157 4.848 4.848 0 01-3.082-1.157 3.351 3.351 0 00-2.377-.871 16.2 16.2 0 00-1.64.2.5.5 0 01-.527-.381 7.978 7.978 0 00-.273-1.017c-.877-.133-2.847-.477-2.891-1.36a.45.45 0 01.375-.47c2.942-.483 4.264-3.5 4.321-3.629 0-.006.006-.013.013-.019a.95.95 0 00.1-.794c-.216-.5-1.138-.68-1.525-.839-1-.394-1.144-.852-1.08-1.163a1.087 1.087 0 011.392-.655 2.394 2.394 0 001 .267.891.891 0 00.419-.089c-.089-1.519-.3-3.686.241-4.9a5.771 5.771 0 015.344-3.451l.426-.006a5.72 5.72 0 015.357 3.451c.54 1.214.33 3.374.241 4.9a.8.8 0 00.362.089 2.507 2.507 0 00.934-.267 1.161 1.161 0 01.864 0 .884.884 0 01.661.756c.006.413-.362.769-1.093 1.055-.089.038-.2.07-.311.108-.413.133-1.042.33-1.207.731a.975.975 0 00.1.794c.006.006.006.013.013.019.057.127 1.379 3.146 4.321 3.629a.488.488 0 01.311.686z"/><path class="social_links linkedin" d="M72.045 65.75h-23.54a1.97 1.97 0 00-1.955 1.98v23.5a1.97 1.97 0 001.955 1.98h23.54a1.975 1.975 0 001.961-1.98v-23.5a1.975 1.975 0 00-1.961-1.98zM54.85 89.284h-4.071v-13.1h4.071v13.1zm-2.037-14.893a2.359 2.359 0 112.359-2.359 2.361 2.361 0 01-2.359 2.359zm17.289 14.893h-4.069V82.91c0-1.52-.031-3.475-2.114-3.475-2.12 0-2.445 1.655-2.445 3.365v6.484h-4.07v-13.1h3.9v1.79h.055a4.286 4.286 0 013.855-2.114c4.118 0 4.884 2.715 4.884 6.245z"/></g></svg>
                    </div>
                    <div class="footer_block flex justify-center items-center">
                        <img class="logo" src="{{ asset('/img/footer logo.svg') }}" />
                    </div>
                    <div class="footer_block flex justify-end items-center">
                        <p>
                            Contact Us<br>
                            123 Washington St,<br>
                            Seattle, WA,<br>
                            12345<br>
                        </p>
                    </div>
                </div>
                <div class="copyright">
                    <p>© 2021 NEDIANET. All rights reserved.</p>
                </div>
            </footer>
        </div>

    </div>
</body>
</html>
