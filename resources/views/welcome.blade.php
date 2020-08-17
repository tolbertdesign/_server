<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body, html {
            /* background: url('/img/atlanta-bg.jpg'); */
            background: url('/img/over_canvas.jpg');
            /* background-color: #26241a; */
            background-repeat: no-repeat;
            /* background-size: 300px 200px; */
            background-size: cover;
            height: 100%;
            margin: 0;
        }

        .full-height {
            min-height: 100%;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
        }

        .flex-fill {
            flex: 1;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }


        .text-center {
            text-align: center;
        }

        .links {
            padding: 1em;
            text-align: right;
        }

        .links a {
            text-decoration: none;
        }

        .links button {
            background-color: #3097D1;
            border: 0;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;
            padding: 15px;
            text-transform: uppercase;
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="full-height flex-column">
        <nav class="links">
            <a href="/login" class="text-gray-300 border-b hover:border-blue-300 hover:text-white">
                {{__('Client Login')}}
            </a>

            {{-- <a href="/register">
                <button>
                    {{__('Register')}}
                </button>
            </a> --}}
        </nav>

        <div class="flex-fill flex-center">
            <h1 class="text-center">
                <img src="{{ asset('/img/logo-vt-on-dark.png') }}" alt="{{ __('Logo') }}" />
            </h1>
        </div>
    </div>
</body>
</html>
