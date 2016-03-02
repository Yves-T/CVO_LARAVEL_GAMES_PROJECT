<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | My gane collection</title>
    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Games collection</a>
        </div>
    </nav>

    @yield('content')
</div>
</body>
</html>
