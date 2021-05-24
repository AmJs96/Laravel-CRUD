<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats Details</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jqueryui.min.js"></script>

</head>

<body>
    <div class="container">
        @yield('main')
    </div>
    <script>
        $(function() {
            $(".datepicker").datepicker();
        });
    </script>

</body>

</html>