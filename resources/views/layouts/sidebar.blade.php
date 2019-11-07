<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
           
            <li class="nav-item">
                <a class="nav-item-hold" href="{{route('home')}}">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('component1/*') ? 'active' : '' }}" data-item="component1">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Building"></i>
                    <span class="nav-text">Desarrollo Productivo</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('component2/*') ? 'active' : '' }}" data-item="component2">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Cloud-Sun"></i>
                    <span class="nav-text">Clima de negocios</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('component3/*') ? 'active' : '' }}" data-item="component3">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Network"></i>
                    <span class="nav-text">Desarrollo Social</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('component4/*') ? 'active' : '' }}" data-item="component4">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Column"></i>
                    <span class="nav-text">Ecosistema Interno</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('institucional/*') ? 'active' : '' }}" data-item="institucional">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Engineering"></i>
                    <span class="nav-text">Unidad Ejecutora</span>
                </a>
                <div class="triangle"></div>
            </li>

            @if( ((\App\Permiso::where('user_id','=',Auth::id())->get())[0]->rol_id == 1) || ((\App\Permiso::where('user_id','=',Auth::id())->get())[0]->rol_id == 2))

            <li class="nav-item {{ request()->is('admin/*') ? 'active' : '' }}" data-item="admin">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Gear-2"></i>
                    <span class="nav-text">Administración</span>
                </a>
                <div class="triangle"></div>
            </li>
            @endif
            <!--
            <li class="nav-item {{ request()->is('projects/*') ? 'active' : '' }}" data-item="projects">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">Gestión de Proyectos</span>
                </a>
                <div class="triangle"></div>
            </li>
            
            <li class="nav-item {{ request()->is('uikits/*') ? 'active' : '' }}" data-item="uikits">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">UI kits</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('extrakits/*') ? 'active' : '' }}" data-item="extrakits">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Suitcase"></i>
                    <span class="nav-text">Extra kits</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('apps/*') ? 'active' : '' }}" data-item="apps">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('forms/*') ? 'active' : '' }}" data-item="forms">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('widgets/*') ? 'active' : '' }}" data-item="widgets">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Windows-2"></i>
                    <span class="nav-text">widgets</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('charts/*') ? 'active' : '' }}" data-item="charts">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('datatables/*') ? 'active' : '' }}">
                <a class="nav-item-hold" href="{{route('basic-tables')}}">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="nav-text">Datatables</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('sessions/*') ? 'active' : '' }}" data-item="sessions">
                <a class="nav-item-hold" href="/test.html">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">Sessions</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('others/*') ? 'active' : '' }}" data-item="others">
                <a class="nav-item-hold" href="">
                    <i class="nav-icon i-Double-Tap"></i>
                    <span class="nav-text">Others</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank">
                    <i class="nav-icon i-Safe-Box1"></i>
                    <span class="nav-text">Doc</span>
                </a>
                <div class="triangle"></div>
            </li>-->
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        
        @if( ((\App\Permiso::where('user_id','=',Auth::id())->get())[0]->rol_id <= 2) )
        <ul class="childNav" data-parent="component1">
            <li class="nav-item" style="background: #eee">
            <a class="{{ Route::currentRouteName()=='projects' ? 'open' : '' }}" href="/projects/ci/1">
                    <i class="nav-icon i-Bell1"></i>
                    <span class="item-name">Gestión de proyectos</span>
                </a>
            </li>
        </ul>
        @endif
        @foreach( (\App\PermisoProject::join('projects','projects.id','=','project_id')->select('projects.*')->whereRaw("c_institutional_id=1 and permisos_projects.user_id=".Auth::id())->get()) as $projects)
        <ul class="childNav" data-parent="component1">
            <li class="nav-item" >
            <a class="{{ Route::currentRouteName()=='project' ? 'open' : '' }}" href="/project/{{$projects->id}}">
                    <span class="item-name">{{ $projects->name }}</span>
                </a>
            </li>
        </ul>
        @endforeach
        @if( ((\App\Permiso::where('user_id','=',Auth::id())->get())[0]->rol_id <= 2) )
        <ul class="childNav" data-parent="component2">
            <li class="nav-item" style="background: #eee">
                <a class="{{ Route::currentRouteName()=='projects' ? 'open' : '' }}" href="/projects/ci/2">
                    <i class="nav-icon i-Bell1"></i>
                    <span class="item-name">Gestión de proyectos</span>
                    
                </a>
            </li>
        </ul>
        @endif
        @foreach( (\App\PermisoProject::join('projects','projects.id','=','project_id')->select('projects.*')->whereRaw("c_institutional_id=2 and permisos_projects.user_id=".Auth::id())->get()) as $projects)
        <ul class="childNav" data-parent="component2">
            <li class="nav-item" >
                <a class="{{ Route::currentRouteName()=='project' ? 'open' : '' }}" href="/project/{{$projects->id}}">
                    <span class="item-name">{{ $projects->name }}</span>
                </a>
            </li>
        </ul>
        @endforeach
        @if( ((\App\Permiso::where('user_id','=',Auth::id())->get())[0]->rol_id <= 2) )
        <ul class="childNav" data-parent="component3">
            <li class="nav-item" style="background: #eee">
                <a class="{{ Route::currentRouteName()=='projects' ? 'open' : '' }}" href="/projects/ci/3">
                    <i class="nav-icon i-Bell1"></i>
                    <span class="item-name">Gestión de proyectos</span>
                    
                </a>
            </li>
        </ul>
        @endif
        @foreach( (\App\PermisoProject::join('projects','projects.id','=','project_id')->select('projects.*')->whereRaw("c_institutional_id=3 and permisos_projects.user_id=".Auth::id())->get()) as $projects)
        <ul class="childNav" data-parent="component3">
            <li class="nav-item" >
                <a class="{{ Route::currentRouteName()=='project' ? 'open' : '' }}" href="/project/{{$projects->id}}">
                    <span class="item-name">{{ $projects->name }}</span>
                </a>
            </li>
        </ul>
        @endforeach
        @if( ((\App\Permiso::where('user_id','=',Auth::id())->get())[0]->rol_id <= 2) )
        <ul class="childNav" data-parent="component4">
            <li class="nav-item" style="background: #eee">
                <a class="{{ Route::currentRouteName()=='projects' ? 'open' : '' }}" href="/projects/ci/4">
                    <i class="nav-icon i-Bell1"></i>
                    <span class="item-name">Gestión de proyectos</span>
                    
                </a>
            </li>
        </ul>
        @endif
        @foreach( (\App\PermisoProject::join('projects','projects.id','=','project_id')->select('projects.*')->whereRaw("c_institutional_id=4 and permisos_projects.user_id=".Auth::id())->get()) as $projects)
        <ul class="childNav" data-parent="component4">
            <li class="nav-item" >
                <a class="{{ Route::currentRouteName()=='project' ? 'open' : '' }}" href="/project/{{$projects->id}}">
                    <span class="item-name">{{ $projects->name }}</span>
                </a>
            </li>
        </ul>
        @endforeach
        @if( ((\App\Permiso::where('user_id','=',Auth::id())->get())[0]->rol_id <= 2) )
        <ul class="childNav" data-parent="institucional">
            <li class="nav-item" style="background: #eee">
                <a class="{{ Route::currentRouteName()=='projects' ? 'open' : '' }}" href="/projects/ci/5">
                    <i class="nav-icon i-Bell1"></i>
                    <span class="item-name">Gestión de proyectos</span>
                    
                </a>
            </li>
        </ul>
        @endif
        @foreach( (\App\PermisoProject::join('projects','projects.id','=','project_id')->select('projects.*')->whereRaw("c_institutional_id=5 and permisos_projects.user_id=".Auth::id())->get()) as $projects)
        <ul class="childNav" data-parent="institucional">
            <li class="nav-item" >
                <a class="{{ Route::currentRouteName()=='project' ? 'open' : '' }}" href="/project/{{$projects->id}}">
                    <span class="item-name">{{ $projects->name }}</span>
                </a>
            </li>
        </ul>
        @endforeach
        
        @if( (\App\Permiso::where('user_id','=',Auth::id())->get())[0]->rol_id == 1)

        <ul class="childNav" data-parent="admin">
            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='users_list' ? 'open' : '' }}" href="{{route('users.index')}}">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="item-name">usuarios</span>
                </a>
            </li>
            
        </ul>

        <ul class="childNav" data-parent="admin">
          <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='users_list' ? 'open' : '' }}" href="{{ url('roles')}}">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">roles</span>
                </a>
            </li>
        </ul>

        <ul class="childNav" data-parent="admin">
          <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='users_list' ? 'open' : '' }}" href="{{ url('permisos')}}">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">Permisos</span>
                </a>
            </li>
        </ul>

        <ul class="childNav" data-parent="admin">
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='projects' ? 'open' : '' }}" href="{{route('projects.index')}}">
                    <i class="nav-icon i-Bell1"></i>
                    <span class="item-name">Proyectos</span>
                </a>
            </li>
        </ul>

        <ul class="childNav" data-parent="admin">
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='ci' ? 'open' : '' }}" href="{{route('ci.index')}}">
                    <i class="nav-icon i-Book"></i>
                    <span class="item-name">Categorias Institucionales</span>
                </a>
            </li>
        </ul>
        
        <ul class="childNav" data-parent="admin">
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='ci' ? 'open' : '' }}" href="{{route('tipogestores.index')}}">
                    <i class="nav-icon i-Book"></i>
                    <span class="item-name">Grupos Gestores</span>
                </a>
            </li>
        </ul>
        
        @endif
    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->