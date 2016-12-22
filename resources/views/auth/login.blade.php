<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Asesor&iacute;asDirac</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <form action="{{url('/login')}}" method="post">
        {{csrf_field()}}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        
        <label for="email">Correo</label>
        <input type="email" name="email" value="{{old('email')}}" required autofocus>

        <label for="password">Contrase&ntilde;a</label>
        <input type="password" name="password" required>

        <button type="submit">
            Entrar
        </button>

        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>
    </form>
    
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>