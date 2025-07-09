<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1>Selamat Datang di Dashboard, {{ Auth::user()->username }}</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger mt-3">Logout</button>
        </form>
    </div>
</body>
</html>