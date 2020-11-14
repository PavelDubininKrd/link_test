
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Links Test</title>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.16.0/d3.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/upload.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <form method="GET" id="link_add" action={{ action('App\Http\Controllers\LinkController@store') }}>
            @csrf
            <div class="col-md-4">
                <h3 class="text-center mt-2">Link test</h3>
                <div id="validation-errors"></div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Link input</label>
                    <input type="text" class="form-control" id="link_input" name="link" required placeholder="https://laravel.com">
                    <button type="submit" id="btn" class="btn btn-primary mt-2">Done</button>
                    <div class="mt-3">
                        <h5 id="link_text"></h5>
                        <a id="result_form"></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
