<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>登陆</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" action="{{route('admin_session_login')}}" method="post">
        {{csrf_field()}}
        @include('admin.layouts._alert_session')
        <h2 class="form-signin-heading">后台登录</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" value="{{old('email')}}" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        @if($errors->has('email'))
         @component('component._alert',['type'=>'danger'])
            {{$errors->first('email')}}
         @endcomponent
        @endif
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" value="{{old('password')}}" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        @if($errors->has('password'))
            @component('component._alert',['type'=>'danger'])
            {{$errors->first('password')}}
            @endcomponent
        @endif
        <div class="checkbox">
            <label>
                <input name="remember" type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div>
</body>
</html>
