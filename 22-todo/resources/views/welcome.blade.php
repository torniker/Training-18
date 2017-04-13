<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script>
            window.Laravel = <?=json_encode(['csrfToken' => csrf_token()]);?>
        </script>
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/js/app.js"></script>
    </head>
    <body>
        <div id="app">
            <todo></todo>
        </div>
    </body>
</html>
