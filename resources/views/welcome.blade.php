<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h5>Challenge 1: Its done in APIs</h5>
                <br />
                <h5>Challenge 2: Its done in Seprate folder (named challenge 2)</h5>
                <br />
                <h5>Challenge 3: Its done in Seprate folder (named challenge 3)</h5>
                <br />
                <h5>Challenge 4: <a href="{{ url('challenge4') }}" class="">Link</a></h5>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>
