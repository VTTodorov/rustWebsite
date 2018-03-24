<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://api.rust-servers.info/embed.js?id=389">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
            position: relative;
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
            margin: 0 auto;
            width: 100vw;
            font-size: 2em;
            color: white;
            height: 100vh;
            position: fixed;
            margin-top: 10vh;
            background-color: rgba(0,0,0,0.5);
        }

        .title {
            font-size: 2.5em;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .navigation{
            height: 10vh;
            width: 100vw;
            background-color: black;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 5%;
            position: fixed;
            top: 0;
            left: 0;
        }

        .footer{
            height: 10vh;
            width: 100vw;
            background-color: black;
            position: fixed;
            bottom: 0;
            left: 0;
        }

        .pull-left{
            float: left;
        }

        .pull-rigth{
            float: right;
        }

        .progress{
            width: 10%;
            margin: 0 auto;
        }

        .login-btn{
            background-image: url('http://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_02.png');
            width:100px;
            height:75px;
            cursor: pointer;
            background-size: 100% 100%;
        }

        .avatar{
            width: 75px;
            height: 75px;
            border-radius: 75px;
            margin-right: 10px;
        }

        .username{
            font-size: 1.25em;
            font-weight: bold;
        }

    </style>
</head>

<body class="full-height">
    <video src="/bg.mp4" autoplay loop poster="posterimage.jpg" style="position: fixed; right: 0; bottom: 0;min-width: 100vw; min-height: 100vh; z-index:0; margin-top: 10vh;"></video>

    <div class="navigation">
        <div class="pull-left title">
            Kompot Rust
        </div>
        <div class="pull-rigth">
            @if (!Auth::check())
            <a href="/signin"><div type="button" id=login  class="login-btn" style=""></div></a>
            @else

            <p class="username"><img src="{{$user->avatar}}" class="avatar">{{$user->username}}</p>
            @endif
        </div>
    </div>
    <div class="content">
        <h1 class="title">Welcome to Kompot Rust</h1>
        <div>
            <label>Status:</label>
            {{$server_status}}
        </div>
        <div>
        <label>Players: </label>{{$server_players}}/{{$server_max_players}}
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{$server_player_percentage}}%">

                </div>
            </div>
        </div>
    </div>

    </video>
    <div class="footer">

    </div>
</body>

</html>
