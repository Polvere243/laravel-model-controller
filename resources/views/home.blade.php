<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- importo le risorse di vite -->
    @vite('rescources/js/app.js')

    <style>
        body{
            display: none;
        }
    </style>
</head>
<body>
    <section id="movies">
        <div class="container">
            <div class="row">
                <div class="col">
                    @forelse($movies as $movie)
                    <div class="card">
                        <h2></h2>
                        <h3></h3>
                        <h3></h3>
                        <h3></h3>
                        <h3></h3>
                    </div>
                    @empty
                    <h1>Non ci sono film</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</body>
</html>