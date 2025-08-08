<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Planets</title>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>All Planets</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($planets as $planet)
            <tr>
                <td>{{ $planet->name }}</td>
                <td><a href="{{ route('planets.show', $planet->id) }}" class="btn btn-info btn-sm">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('solarsystems.index') }}" class="btn btn-secondary mt-3">Back to Solar Systems</a>
</body>
</html>