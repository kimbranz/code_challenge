<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Code Challenge
    </title>
    <style>
        html, body, div, h1, table, tbody, thead, tr, th, td{
            margin: 0;
            padding: 0;
            border: 0
        }
        body{
            background: #35517d;
            margin:0;
            padding:0;
        }
        hr{
            margin: 20px 0 20px 0;
            border: solid 3px #1c4263;
        }
        .top{
            padding-top: 16px;
            background: whitesmoke
        }
    </style>
    @yield('style')
</head>

<body class="">
    <div class="">
        <div class="top">
            <center><h1>Code Challenge</h1></center>
            <hr>
        </div>
            @yield('content')  
            @yield('scripts')
    </div>
</body>
</html>