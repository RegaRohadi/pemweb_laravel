<!DOCTYPE html>
<html>
<head>
    <title>Speedrunner Rankings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            background-color: #343a40;
            padding: 15px;
            width: 250px;
            color: white;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Praktikum Laravel</h2>
        <a href="{{ route('home') }}" class="btn btn-primary mb-3">Home</a>
        <a href="{{ route('rank') }}" class="btn btn-primary mb-3">Rankings</a>
        <a href="{{ route('create') }}" class="btn btn-primary mb-3">Add Playrun</a>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
