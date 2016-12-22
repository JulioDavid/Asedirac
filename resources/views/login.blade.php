<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
</body>
</html>