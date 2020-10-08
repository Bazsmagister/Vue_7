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
            height: 90vh;
            margin: 10px;
        }

        .full-height {
            height: 90vh;
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
            font-size: 30px;
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
                <navbar :title="'{{$title}}'"></navbar>
            </div>

            <hr>

            <div id="app-2">
                <span v-bind:title="message">
                    Hover your mouse over me for a few seconds
                    to see my dynamically bound title!
                </span>
            </div>
            <hr>

            <div id="app-3">
                <span v-if="seen">Now you see me, because this span has a seen v-if attribute</span>
            </div>

            <hr>

            <div id="app-4">
                <ol>
                    <li v-for="todo in todos">
                        @{{ todo.text }}
                    </li>
                </ol>
            </div>
            <hr>
            <div id="app-9">
                <ol>
                    <li v-for="todo in todos" v-text="todo.text">
                    </li>
                </ol>
            </div>


            <hr>
            <div id="app-5">
                <p>@{{ message }}</p>
                <button v-on:click="reverseMessage">Reverse Message</button>
            </div>

            <hr>

            <div id="app-6">
                <p>@{{ message }}</p>
                <input v-model="message">
            </div>

            <hr>

            <div id="app-7">
                <ul>
                    <li v-for="substance in substances">

                        @{{ substance }}
                        {{-- {{ substance}} --}}

                        {{-- @{{ substance.data.mechanism}} --}}
                    </li>

                </ul>
            </div>

            <hr>

            <div id="app-8">
                <ul>
                    <li v-for="substance in substances">

                        @{{ substance }}
                        {{-- {{ substance}} --}}

                        {{-- @{{ substance.data.mechanism}} --}}
                    </li>

                </ul>
            </div>

            <hr>

        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>