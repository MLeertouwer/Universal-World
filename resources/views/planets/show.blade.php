<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $planet->name }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>{{ $planet->name }}</h1>
    <p><strong>Size in km:</strong> {{ $planet->size_in_km }} km</p>
    <p><strong>Description:</strong> {{ $planet->description }}</p>
    <p><strong>Solar System:</strong> <a href="{{ route('solarsystems.show', $planet->solarSystem->id) }}">{{ $planet->solarSystem->name }}</a></p>
    <a href="{{ route('planets.index') }}" class="btn btn-primary mt-3">Back to All Planets</a>
</body>
</html>