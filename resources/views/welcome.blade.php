<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116416533-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-116416533-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kompot Rust</title>
    <link rel="shortcut icon" href="http://icons.iconarchive.com/icons/papirus-team/papirus-apps/128/rust-icon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://api.rust-servers.info/embed.js?id=389">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/8f466ad9bd.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-panelsnap@0.16.0/jquery.panelSnap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="js/welcome.blade.js"></script>
    <script src="js/particles.js"></script>

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
            height: 81vh;
            position: fixed;
            margin-top: 10vh;
            overflow-y: : scroll;
            overflow-x: hidden;
            background-color: rgba(0,0,0,0.6);
        }

        .title {
            font-size: 1.5em;
        }

        .logo{
            font-size: 4em;
            font-weight: bold;
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
            align-items: center;
            padding: 0px 5%;
            position: fixed;
            top: 0;
            left: 0;
        }

        .nav{
            height: 10vh;
            width: 100vw;
            background-color: black;
            position: fixed;

        }

        .footer{
            height: 10vh;
            width: 100vw;
            background-color: black;
            position: fixed;
            bottom: 0;
            left: 0;
            line-height: 10vh;
            color: white;
            font-size: 20px;
            padding-right: 15px;
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

        section{
            height: 81vh;
            padding-top: 5vw;
        }

        .links{
            height: 60vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .links > a {
            font-size: 40px;
            color: white;
        }

        .links > a:hover {
            color: rgb(66, 103, 178);
        }

        #particles-js{
            position: fixed;
            top: 0;
            left: 0;
            height: 200vh;
            width: 200vw;
            transition: top 2.5s;
        }

        .connect{
            height: 60%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .connect-link{
            background-color: #545454;
            color: white;
            font-weight: bold;
            padding: 10px 22px;
            border-radius: 2px;
            box-shadow: 0 0 0 2px #fafafa inset !important;
        }

        .connect-link:hover{
            box-shadow: 0 0 0 2px #ff5144 inset !important;
            color: #ff695e !important;
            text-decoration: none;
        }

        .col{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
        }

        .breadcrumb{
            background-color: transparent !important;
            font-size: 1.5em;
        }

    </style>
</head>

<body class="full-height">
    <video src="/bg.mp4" autoplay loop style="position: fixed; right: 0; bottom: 0;min-width: 100vw; min-height: 100vh; z-index:0; margin-top: 10vh;">
    </video>
    <div id="particles-js">
    </div>
    <header class="nav container">
        <div class="row">
           <div class="col col-md-6 col-sm-4 title logo">
             {{$server_name}}
           </div>
           <div class="col col-md-2 col-sm-3">
               <ol class="breadcrumb">
                 <li><a href="#">Home</a></li>
                 <li><a href="#">News</a></li>
                 <li><a href="#">VIP Kits</a></li>
                 <li><a href="#">Contact</a></li>
               </ol>
           </div>
           <div class="col col-md-4 col-sm-5">
               @if (!Auth::check())
               <a href="/signin"><div type="button" id=login  class="login-btn" style=""></div></a>
               @else
               <p class="username"><img src="{{$user->avatar}}" class="avatar">{{$user->username}}</p>
               @endif
           </div>
         </div>
    </header>
    <!-- <div class="navigation row">
        <div class="pull-left title col col-md-3">

        </div>
        <div class="nav-menu col com-md-7">

        </div>
        <div class="pull-rigth col com-md-2">



        </div>
    </div> -->
    <div class="content">
            <section id="server_info">
                <h1 class="title">Welcome to {{$server_name}}</h1>
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
                <div class="connect">
                    <a class="connect-link" href="steam://connect/kompotrust.eu:28015">PLAY NOW</a>
                </div>
            </section>
            <section id="social_info">
                <h1 class="title">Follow Us</h1>
                <div class="links">
                    <a href="" target="_blank" class="btn btn-outline-light"><i class="fa fa-facebook fa-fw fa-2x" aria-hidden="true"></i></a>
                    <a href="" target="_blank" class="btn btn-outline-light"><i class="fa fa-vk fa-fw fa-2x" aria-hidden="true"></i></a>
                    <a href="" target="_blank" class="btn btn-outline-light"><i class="fa fa-twitter fa-fw fa-2x" aria-hidden="true"></i></a>
                </div>
            </section>
            <section id="vip_kits">
                <h1 class="title">VIP kits</h1>
                <!-- @if (Auth::user()) -->
                    <a href="{{ route('paypal.express-checkout') }}" class='btn-info btn'>PayPal</a>
                <!-- @else -->
                    <!-- <a href="/signin" class="btn-info btn">Log in</a> -->
                <!-- @endif -->
            </section>
    </div>

    <!-- </video> -->
    <div class="footer">
        <p class="pull-rigth">&copy; 2018 KompotRust.eu<p>
    </div>
</body>

</html>
