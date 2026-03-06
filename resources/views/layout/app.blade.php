<!DOCTYPE html>
<html>

<head>
    <title>Laravel Project</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f7fb;
            margin: 0;
        }

        .navbar {
            background: #1f2937;
            padding: 15px;
            text-align: center;
        }

        .navbar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            text-align: center;
            padding: 80px 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background: #2563eb;
            color: white;
            border-radius: 6px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>