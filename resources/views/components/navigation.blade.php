<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <header><nav class="flex"><img src="{{ asset('/img/logo.svg') }}" /> Home | Movies | Games | News</nav></header>

    {{$slot}}

    <footer>Copyright</footer>
</body>
</html>
