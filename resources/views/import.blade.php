<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Import of Users</title>

    <style type="text/css">
        main > .container {
          padding: 60px 15px 0;
        }
    </style>
</head>

<body>
    Importing
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/import.js') }}" type="module"></script>
</html>