<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- importo le risorse di vite -->
    @vite('resources/js/app.js')

    
</head>
<body>
    <section id="movies">
        <div class="container">
            <div class="row">
                @forelse($movies as $movie)
                <div class="col">
                    <div class="card">
                        <h2>{{ $movie['title'] }}</h2>
                        <h3>{{ $movie['original_title'] }}</h3>
                        <h3>{{ $movie['nationality'] }}</h3>
                        <h3>{{ $movie['date'] }}</h3>
                        <h3>{{ $movie['vote'] }}</h3>
                    </div>
                </div>
                    @empty
                    <h1>Non ci sono film</h1>
                    @endforelse
            </div>
        </div>
    </section>
</body>
</html>