<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Systems</title>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Solar Systems</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Age in years</th>
                <th>Number of Planets</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solarSystems as $solarSystem)
            <tr>
                <td>{{ $solarSystem->name }}</td>
                <td>{{ $solarSystem->age_in_years }} years</td>
                <td>{{ $solarSystem->planets_count }}</td>
                <td><a href="{{ route('solarsystems.show', $solarSystem->id) }}" class="btn btn-info btn-sm">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('planets.index') }}" class="btn btn-secondary mt-3">View All Planets</a>
</body>
</html>