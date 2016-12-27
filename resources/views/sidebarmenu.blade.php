      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
        @if(Auth::user()->rol == 0)
            @include('vistasAlumnos.sidebarAlumno')
        @elseif(Auth::user()->rol==1)
            @include('vistasAsesor.sidebarAsesor')
        @elseif(Auth::user()->rol==2)
            @include('vistasAdmin.sidebarAdmin')
        @endif
      </ul>