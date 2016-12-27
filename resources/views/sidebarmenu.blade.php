      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        @if(Auth::user()->rol == 0)
            @include('vistasAlumnos.sidebarAlumno')
        @elseif(Auth::user()->rol==1)
            @include('vistasAsesor.sidebarAsesor')
        @elseif(Auth::user()->rol==2)
            @include('vistasAdmin.sidebarAdmin')
        @endif
      </ul>