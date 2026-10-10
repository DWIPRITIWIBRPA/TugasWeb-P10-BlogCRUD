<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Blog CRUD')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f5f5f5;
        }

        nav {
            background: #333;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .container {
            width: 80%;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        .alert {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>
    <nav>
        <a href="{{ route('posts.index') }}">Blog</a>
        <a href="{{ route('posts.create') }}">Tambah Post</a>
    </nav>

    <div class="container">
        @yield('content')

    </div>

</body>
</html>