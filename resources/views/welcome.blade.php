<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/welcome.js'])
</head>

<body>
    <div
        class="welcome-div container-fluid bg-corpa-primary vh-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-white">¿Qué cocino hoy?</h1>
        <form method="GET" action="{{ route('home') }}" role="search">
            <div class="container mb-3">
                <div class="row">
                    <div class="col-md-auto d-flex flex-column">
                        <div class="input-group">
                            <input name="ingredients"
                                class="ingredientQuery border-0 rounded-start border-end-0 p-1 mb-2" type="text"
                                placeholder="Si tengo..." aria-describedby="basic-addon2">
                            <button type="button"
                                class="input-group-text bg-white border-0 rounded-end border-start-0 p-1 mb-2"
                                id="basic-addon2" data-bs-toggle="popover"
                                data-bs-title="¿Cómo escribo los ingredientes?"
                                data-bs-content="Escribelos juntando una coma: papa,arroz,camote,..."><i
                                    class="bi bi-info-circle d-flex justify-self-center align-self-center"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- todo aprender vite --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>
