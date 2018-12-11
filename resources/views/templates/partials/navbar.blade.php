 			<nav>
                <ul class="main_menu">
                   	<li><a href="{{route('nueva.licencia')}}">Nueva Licencia</a></li>
                    <li><a href="{{route('renovacion')}}">Renovación</a></li>
                    <li><a href="{{route('pre.extravio')}}">Extravío</a></li>
                    <li><a href="{{route('pre.menoredad')}}">Menor de edad</a></li>
                </ul>
            </nav>
            <nav style="float: right;">
            <ul class="navbar-nav ml-auto main_menu">
                        <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color:white;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
            </nav><br><br>
