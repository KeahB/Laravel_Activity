<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Bootstrap CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Optional: Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav>
        <a href="{{ route('students.index') }}">Home</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>


</body>

</html>