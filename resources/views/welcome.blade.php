<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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

        .links > a {
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
    </style>
</head>
<body>
<div class="container">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    @endauth
        </div>
    @endif
    <h1> <b>  Login To MayaApp</b></h1>
    <p><b>Login Without password</b></p>
        <form action="/login1" method="post" id="form">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="code" id="code" />
        </form>
    <div class="row">
        <div class="col-sm-5" style="background-color:lavender;">
            <ul class="list-group">
                <li class="list-group-item"><button type="submit" class="btn-primary btn btn-primary btn-block"><a style="color: white" href="{{url('login/facebook')}}">Login using Facebook</a></button></li>
                <li class="list-group-item"><button onclick="smsLogin()" type="submit" class="btn-success btn btn-primary btn-block">Login without password using Phone</button></li>
                <li class="list-group-item"><button onclick="emailLogin()" type="submit" class="btn-danger btn btn-primary btn-block">Login without password using Email </button></li>

               </ul>
        </div>
    </div>
</div>


<script src="js/ack.js"></script>
<script type="text/javascript" src="https://sdk.accountkit.com/en_US/sdk.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/index.js"></script>
{{--<script type="text/javascript" src="{{asset('js/ack.js')}}"></script>--}}
{{--<script>
    AccountKit_OnInteractive = function() {
        AccountKit.init({
            appId: '507412976293965',
            state: document.getElementById('_token').value,
            version: 'v1.0'
        });
    };

    function loginCallback(response) {
        console.log(response);

        if (response.status === "PARTIALLY_AUTHENTICATED") {
            document.getElementById('code').value = response.code;
            document.getElementById('_token').value = response.state;
            document.getElementById('form').submit();
        }

        else if (response.status === "NOT_AUTHENTICATED") {
            // handle authentication failure
            alert('You are not Authenticated');
        }
        else if (response.status === "BAD_PARAMS") {
            // handle bad parameters
            alert('wrong inputs');
        }
    }

    function smsLogin() {
        /*var countryCode = document.getElementById('country').value;
        var phoneNumber = document.getElementById('phone').value;*/
        var countryCode='880';
        var phoneNumber='1672708329';

        AccountKit.login(
            'PHONE',
            {countryCode: countryCode, phoneNumber: phoneNumber},
            loginCallback
        );
    }
    // email form submission handler
    function emailLogin() {
        var emailAddress = document.getElementById("email").value;
        AccountKit.login('EMAIL', {emailAddress: emailAddress}, loginCallback);
    }
</script>--}}
</body>
</html>
