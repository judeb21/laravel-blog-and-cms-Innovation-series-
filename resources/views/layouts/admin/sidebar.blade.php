<div class="app-body">
        <div class="left-sidebar">
            <nav class="sidebar-menu">
                <ul id="nav-accordion">
                    <li>
                        <a href="{{route('home')}}">
                            <i class="ti-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="{{ route('post.create')}}">
                            <i class="ti-plus"></i>
                            <span>New Post</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('post.index')}}">
                            <i class="ti-layout-tab"></i>
                            <span>All Posts</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="{{route('draft.index')}}">
                            <i class="ti-pencil-alt"></i>
                            <span>Drafts</span><span class="badge badge-primary ml-2">{{$counts}}</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class=" ti-unlock"></i><span> Logout</span></a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>    
                    </li>

                </ul>
            </nav>
        </div>
 </div>