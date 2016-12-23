<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="{{url('assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  </head>




  <body class="hold-transition login-page">
    <div class="section" style="width: 100%; padding-top: 0px;">
      <div class="container" style="margin-bottom:0px;
                                margin-top:0px;  
                                margin-left:0px;  
                                margin-right:0px; 
                                width: 100%;
                                padding-top: 0px;
                                 ">
        <div class="row">
          <div class="col-md-6 hidden-sm hidden-xs" style="background-color: #35A4DD; ">
            <img src="{{url('assets/img/LogoAdrian.png')}}" class="center-block img-responsive" style="margin-top:100px; max-width:500px;
    ">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a href="https://www.facebook.com/login.php?skip_api_login=1&amp;api_key=345959722128319&amp;signed_next=1&amp;next=https%3A%2F%2Fwww.facebook.com%2Fv2.2%2Fdialog%2Foauth%3Fredirect_uri%3Dhttps%253A%252F%252Fgae-init.appspot.com%252Fapi%252Fauth%252Fcallback%252Ffacebook%252F%26scope%3Demail%26response_type%3Dcode%26client_id%3D345959722128319%26ret%3Dlogin%26logger_id%3D0ee2fe07-8b09-493a-a02e-fd9cb9453261&amp;cancel_url=https%3A%2F%2Fgae-init.appspot.com%2Fapi%2Fauth%2Fcallback%2Ffacebook%2F%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%23_%3D_&amp;display=page&amp;locale=es_ES&amp;logger_id=0ee2fe07-8b09-493a-a02e-fd9cb9453261" class="btn btn-facebook btn-block btn-primary btn-sm" style="padding: 20px 14px;font-size: 25px;margin-bottom:550px ">Continua con facebook</a>
          </div>
          <div class="col-md-6">
            <br>
            <ul class="nav nav-justified nav-pills">
              <li class="active">
                <a href="#">SOY MIEMBRO</a>
              </li>
              <li>
                <a href="{{url('/register')}}">SOY NUEVO AQUÍ</a>
              </li>
            </ul>
            <br>
            
      <div id="app">
        <div class="login-box"> 

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Hay algunos problemas<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
 <div class="login-box-body">
            <form class="form-horizontal" action="{{ url('/login') }}" role="form" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label"></label>
                </div>
                <div class="col-sm-10">
                  <input type="email" class="form-control input-lg"  placeholder="USUARIO/CORREO" name="email" required>
                </div>
              </div>
              <br>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label"></label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control input-lg"  placeholder="CONTRASEÑA" name="password" required>
                </div>
              </div>
              <br>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember">Recuerdame &nbsp; &nbsp; &nbsp;
                      <a href="{{ url('/password/reset') }}" data-toggle="tooltip" data-placement="right" title="Si olvidaste tu contraseña no te preocupes da click aquí">¿Olvidaste tu contraseña</a>
                    </label>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <br>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-block btn-info btn-lg" style="padding: 20px 14px;font-size: 25px;">Ingresa</button>
                </div>
                </div>
              </form>
              </div> <!-- /.login-box-body -->
             </div><!-- /.login-box -->
            </div>
          </div>
        </div>
      </div>
    </div>
  
 

</body></html>