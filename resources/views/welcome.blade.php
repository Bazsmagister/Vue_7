<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div id="app">
                <welcome></welcome>
            </div>

            <div id="app-2">
                <span v-bind:title="message">
                    Hover your mouse over me for a few seconds
                    to see my dynamically bound title!
                </span>
            </div>

            <div id="app-3">
                <span v-if="seen">Now you see me</span>
            </div>

            <div id="app-4">
                <ol>
                    <li v-for="todo in todos">
                        @{{ todo.text }}
                    </li>
                </ol>
            </div>
            /*
            <div id="app-4">
                <ol>
                    <li v-for="todo in todos" v-text="todo">

                    </li>
                </ol>
            </div>
            */
            <div id="app-5">
                <p>@{{ message }}</p>
                <button v-on:click="reverseMessage">Reverse Message</button>
            </div>

            <div id="app-6">
                <p>@{{ message }}</p>
                <input v-model="message">
            </div>


        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>
