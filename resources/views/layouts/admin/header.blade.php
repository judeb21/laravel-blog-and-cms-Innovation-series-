<header class="app-header navbar">
        <div class="navbar-brand">
            <a class="" href="/">
            <img src="{{ asset ('admin/assets/img/dodo-logo.png') }}" srcset="{{ asset('admin/assets/img/dodo-logo.png')}} 2x" alt="dodo logo">
            </a>
        </div>
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-leftside-toggler" type="button"><i class="ti-menu"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler left-sidebar-toggler" href="#"><i class=" ti-menu"></i></a>
            </li>

        </ul>
        <ul class="nav navbar-nav ml-auto" style="margin-right: 50px;">

            <!--Profile section-->
            <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="/admin/avatars/{{Auth::user()->image}}" alt="">
                    {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                    <div class="dropdown-header pb-3">
                        <div class="media d-user">
                            <img class="align-self-center mr-3" src="/admin/avatars/{{Auth::user()->image}}" alt="{{Auth::user()->name}}">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">{{Auth::user()->name}}</h5>
                                <span>{{Auth::user()->email}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class=" ti-unlock"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                </div>
            </li>
            <!--End of Profile section-->
        </ul>
    </header>