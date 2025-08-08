<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universal World</title>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 flex-column d-flex align-items-center">
        <h1>Welcome to Universal World!</h1>
        <p class="fs-5">Here you find all kinds of info on the planets and solar systems in our universe!</p>
        <p class="fs-5">Choose one of the cards for more info!</p>
        <div class="row mt-4 justify-content-center">
                <div class="col-md-6 mb-4">
                    <div class="card text-center">
                        <img src="/assets/Earth.png" class="card-img-top " alt="planet image">
                        <div class="card-body">
                            <h1 class="card-title">Planets</h1>
                            <a href="{{ route('planets.index') }}" class="btn btn-primary btn-lg mt-3 mb-3">Show me!</a>
                        </div>
                    </div>
                </div>
                    <div class="col-md-6 mb-4">
                    <div class="card text-center d-flex">
                        <img src="/assets/solarsystem.png" class="card-img-top" alt="solarsystem image">
                        <div class="card-body">
                            <h1 class="card-title">Solar Systems</h1>
                            <a href="{{ route('solarsystems.index') }}" class="btn btn-primary btn-lg mt-3 mb-3">Show me!</a>
                        </div>
                    </div>
                </div>
        </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>