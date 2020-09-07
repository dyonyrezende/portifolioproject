<nav class="navbar navbar-expand-md navbar-light bg-transparent">
    <div class="mx-auto d-md-flex d-block flex-md-nowrap">

        <div class="text-center">
            <ul class="navbar-nav mt-2">
                <li class="nav-item">
                    <a id="active" class="nav-item-new" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item-new" href="/crud">CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item-new" href="#formContact">Contato</a>
                </li>

                @guest

                    <li class="nav-item">
                        <a class="nav-item-auth" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-item-auth" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-item-auth dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>
