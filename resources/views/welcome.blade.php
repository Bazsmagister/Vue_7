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
            margin: 10px;
        }

        .full-height {
            height: 100vh;
            :
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
            margin-top: 50px;
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


        li {
            list-style-type: none;
            position: relative;
            margin: 2px;
            padding: 0.5em 0.5em 0.5em 2em;
            background: lightgrey;
            font-family: sans-serif;
        }

        li.done {
            background: #CCFF99;
        }

        li.done::before {
            content: '';
            position: absolute;
            border-color: #009933;
            border-style: solid;
            border-width: 0 0.3em 0.25em 0;
            height: 1em;
            top: 1.3em;
            left: 0.6em;
            margin-top: -1em;
            transform: rotate(45deg);
            width: 0.5em;
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
                <div>
                    This is a simple todolist from: https://developer.mozilla.org/en-US/docs/Web/CSS/::before
                </div>
                <ul>
                    <li>Buy milk - List from mozilla dev network</li>
                    <li>Take the dog for a walk</li>
                    <li>Exercise</li>
                    <li>Write code</li>
                    <li>Play music</li>
                    <li>Relax</li>
                </ul>
            </div>


            <hr>

        </div>
    </div>
    <script src="js/app.js"></script>
    <script>
        var list = document.querySelector('ul');
        list.addEventListener('click', function(ev) {
        if (ev.target.tagName === 'LI') {
        ev.target.classList.toggle('done');
        }
        }, false);
    </script>
</body>

</html>
