<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Статті бюджетів</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>

        form.search
        {

            float: right;

        }
        form.search input
        {
            display: inline;
            width: 150px;
        }
        form.search button
        {
            display: inline;

        }
    </style>
</head>
<body>


<div class="container my-content">
    @include('flash::message')

    @yield('content')
</div>
</body>
</html>