<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function () {
    $('.navbar-toggle-sidebar').click(function () {
      $('.navbar-nav').toggleClass('slide-in');
      $('.side-body').toggleClass('body-slide-in');
      $('#search').removeClass('in').addClass('collapse').slideUp(200);
    });

    $('#search-trigger').click(function () {
      $('.navbar-nav').removeClass('slide-in');
      $('.side-body').removeClass('body-slide-in');
      $('.search-input').focus();
    });
  });
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <style>
      .navbar .navbar-toggle .icon-bar {
                    background-color: black;
                }
      .navbar{
        background-color: white;
      }
    </style>
  </head><body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" rel="home" title="Logo">
        <img style="max-width:200px; margin-top: -7px;" src="{{url('assets/img/logohom-01.png')}}">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#proceso">Como funciona</a>
            </li>
            <li>
              <a href="#materias">Materias</a>
            </li>
            <!--<li>
              <a href="{{url('asesor/')}}">Asesores</a>
            </li>
            -->
            @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Ingresa</a></li>
                        <li><a href="{{ url('/registro') }}">Reg&iacute;strate</a></li>
            @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron text-center" style="border: 3px solid #e5e5e5;
              background-color:white;
              margin-left:30px;
              margin-right:30px;
              height:600px;">
          <h1 style="color: rgb(102, 51, 153);" class="text-center">Elije la materia, nosotros al experto</h1>
          <br>
          <h2 class="text-center text-muted">Asesorías particulares desde secundaria hasta universidad</h2>
          <br>
          <br>
          <br>
          <br>
          <a href="{{ url('/registro') }}" class="btn btn-info btn-lg" style="padding: 4px 14px;
                                font-size: 25px;
                                ">
                        Solicita tu asesoría</a>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="section" style="padding-bottom:0px;">
      <div class="container-fluid" id="proceso">
        <div class="row">
          <div class="col-md-6">
            <img src="{{url('assets/img/IMG1.png')}}" class="center-block img-responsive img-thumbnail" style="
                        width=:264; height:214;">
          </div>
          <div class="col-md-6">
            <h1 style="color:RebeccaPurple;" class="text-left text-primary" contenteditable="true">Solicita una asesoría</h1>
            <br>
            <h4 class="text-muted">Busca tu tema. fecha, lugar y hora - Puedes encontrar
              <br>
              <br>asesoría para cualquier tema o materia
              <br>
              <br>
              <a>En donde damos asesorías presenciales</a>
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img src="{{url('assets/img/homediracoff_Artboard 3.png')}}" class="center-block img-responsive" style="height: 114px;">
          </div>
        </div>
      </div>
    </div>
    <div class="section" style="padding-top: 0px;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <h1 style="color:RebeccaPurple;" class="text-primary text-right">Espera tu confirmación</h1>
            <br>
            <h4 class="text-muted text-right">En menos de 24 horas recibirás un correo con la confirmación y
              <br>
              <br>el perfil de un asesor, con lo cual podrás pagar para asegurar
              <br>
              <br>tu asesoría
              <br>
              <br>
              <a>Materias disponibles</a>
            </h4>
          </div>
          <div class="col-md-6">
            <img src="{{url('assets/img/IMG2.png')}}" class="center-block img-responsive img-rounded" style=" width:284; height:234px;">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img src="{{url('assets/img/homediracoff_Artboard 5.png')}}" class="center-block img-responsive" style="height: 114px;">
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container-fluid" style="border: 3px solid #e5e5e5;">
        <div class="row">
          <div class="col-md-6">
            <img src="{{url('assets/img/IMG3.png')}}" class="center-block img-circle img-responsive" width="264" height="264">
          </div>
          <div class="col-md-6">
            <h1 style="color:RebeccaPurple;" class="text-left text-primary" contenteditable="true">Aprende</h1>
            <h4 class="text-muted">El aprendizaje individual es la mejor forma de aprender, por
              <br>
              <br>ello asesorías Dirac te ofrece asesorías en línea, a domicilio o
              <br>
              <br>en un lugar publico de tu preferencia para que tengas la
              <br>
              <br>mejor experiencia aprendiendo.
              <br>
              <br>
              <a>Quiero saber más</a>
            </h4>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1 style="color:RebeccaPurple;" class="text-center text-primary">Con el apoyo de</h1>
            <div class="col-md-6">
              <img src="{{url('assets/img/Banorte_Logo.png')}}" class="center-block img-responsive">
            </div>
            <div class="col-md-6">
              <img src="{{url('assets/img/SUM_Logo.png')}}" class="center-block img-responsive">
            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1 style="color:RebeccaPurple;" class="text-center text-primary">¿Quién habla de nosotros?</h1>
            <img src="{{url('assets/img/ElFinanciero_Logo.png')}}" class="center-block img-responsive">
            <br>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1 style="color:RebeccaPurple;" class="text-center text-primary">¿Qué dicen de nosotros?</h1>
            <img src="{{url('assets/img/TEMP.png')}}" class="center-block img-responsive">
            <br>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="section">
        <div class="container-fluid" id="materias">
          <div class="row">
            <div class="col-md-3">
              <h1 class="text-center
                            text-primary">Matemáticas</h1>
              <br>
              <h4 class="text-center text-muted">Álgebra
                <br>
                <br>Matemáticas aplicadas
                <br>
                <br>Matemáticas básicas
                <br>
                <br>Estadísticas
                <br>
                <br>Trigonometría</h4>
              <br>
              <br>
            </div>
            <div class="col-md-3">
              <h1 class="text-center text-primary">Física</h1>
              <br>
              <h4 class="text-center text-muted">Álgebra
                <br>
                <br>Matemáticas aplicadas
                <br>
                <br>Matemáticas básicas
                <br>
                <br>Estadísticas
                <br>
                <br>Trigonometría</h4>
            </div>
            <div class="col-md-3">
              <h1 class="text-center text-primary">Química</h1>
              <br>
              <h4 class="text-center text-muted">Álgebra
                <br>
                <br>Matemáticas aplicadas
                <br>
                <br>Matemáticas básicas
                <br>
                <br>Estadísticas
                <br>
                <br>Trigonometría</h4>
            </div>
            <div class="col-md-3">
              <h1 class="text-center text-primary">Programación</h1>
              <br>
              <h4 class="text-center text-muted">Álgebra
                <br>
                <br>Matemáticas aplicadas
                <br>
                <br>Matemáticas básicas
                <br>
                <br>Estadísticas
                <br>
                <br>Trigonometría</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="section" style="background-color:#e6e6e6;">
        <div class="container-fluid" id="materias">
          <div class="row">
            <div class="col-md-3">
              <h1 class="text-center
                            text-primary">Contactanos</h1>
              <br>
              <h4 class="text-center text-muted">
                <br>
                <br>
                <br>
                <br>contacto@asesoriasdirac.com<!--Poner pop-up de mail-->
                <br>
                <br>
                <br>
              </h4>
              <br>
              <br>
            </div>
            <div class="col-md-3">
              <h1 class="text-center text-primary">Nosotros</h1>
              <br>
              <h4 class="text-center text-muted">¿Quienes somos?
                <br>
                <br>Ética profesional
                <br>
                <br>Politica de privacidad
                <br>
                <br><a  href="{{ url('/terminosycondiciones') }}">Términos y condiciones</a> 
                <br>
                </h4>
            </div>
            <div class="col-md-3">
              <h1 class="text-center text-primary">Servicio</h1>
              <br>
              <h4 class="text-center text-muted">Precios
                <br>
                <br>Preguntas frecuentes
                <br>
                <br>Políticas de cancelación
                <br>
                <br>Conviertete en asesor</h4>
            </div>
            <div class="col-md-3">
              <h1 class="text-center text-primary">Dónde estamos</h1>
              <br>
              <h4 class="text-center text-muted">CDMX
                <br>
                <br>Guadalajara(Próximamente)
                <br>
                <br>Monterrrey(Próximamente)
                <br>
                <br>En línea(Latinoamérica)
                <br>
              </h4>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h1 class="text-center text-primary">Siguenos en:</h1>
    </footer>
    <div class="section">
      <div class="container">
        <div class="row text-center">
          <div class="col-xs-3 text-center">
            <a title="5525726749" data-toggle ="popover" data-placement="top" data-trigger="hover" data-content="5529604853"><i class="fa fa-5x fa-fw fa-whatsapp text-success"></i></a>
          </div>
          <div class="col-xs-3">
            <a href="https://twitter.com/asesoriasdirac"><i class="fa fa-5x fa-fw fa-twitter text-info"></i></a>
          </div>
          <div class="col-xs-3">
            <a href="https://www.facebook.com/asesoriasdirac/"><i class="fa fa-5x fa-fw fa-facebook"></i></a>
          </div>
          <div class="col-xs-3 text-center">
            <a href="https://plus.google.com/+Asesor%C3%ADasdeF%C3%ADsicayMatemáticas"><i class="fa fa-5x fa-fw fa-google-plus hub text-danger"></i></a>
          </div>
        </div>
      </div>
    </div>
<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  });

</script>
  

</body></html>