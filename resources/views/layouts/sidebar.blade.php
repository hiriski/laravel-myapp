<div id="sidebar" class="left">
    <div class="sidebar-inner">
        <div class="sidebar_menu">
            <div class="sidebar-header">
                <div class="sidebar-header-inner">
                    <div class="profile-pic">
                    @guest
                        <div class="profile-name">
                            <span>@greeting</span>
                            <h3>
                                Guest
                            </h3>
                            <div class="logout-btn">
                                <a class="btn btn-sm btn-primary" href="{{ route('login') }}">
                                    @lang('Login') <i class="material-icons material-icon-sm">exit_to_app</i>
                                </a>
                            </div>
                        </div>
                    @else
                        <img src="{{ getUserPic(Auth::user()->id, 'md') }}"
                                alt="{{ Auth::user()->name }}"
                                class="img-fluid rounded-circle">

                        <div class="profile-name">
                            <span>@greeting</span>
                            <h3>
                                @if(!empty(Auth::user()->profile->first_name))
                                    {{ Auth::user()->profile->first_name }}  {{ Auth::user()->profile->last_name }} 👋
                                @else
                                    {{ Auth::user()->name }}
                                @endif
                            </h3>
                            <div class="logout-btn">
                                <a class="btn btn-sm btn-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    @lang('Logout') <i class="material-icons material-icon-sm">exit_to_app</i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                <h6 class="sidebar-header">Learning</h6>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link" href="{{ route('learn.lang.phrase') }}">
                        <span class="sidebar-menu-icon">
                            <i class="material-icons">subject</i>
                        </span>
                        <span class="sidebar-menu-text">
                            @lang('app.phrase')
                        </span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link" href="{{ route('learn.lang.sentence') }}">
                        <span class="sidebar-menu-icon">
                            <i class="material-icons">input</i>
                        </span>
                        <span class="sidebar-menu-text">
                            @lang('app.sentence')
                        </span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link active" href="{{ route('learn.lang.sentence') }}">
                        <span class="sidebar-menu-icon">
                            <i class="material-icons">get_app</i>
                        </span>
                        <span class="sidebar-menu-text">
                            @lang('app.sentence')
                        </span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link" href="{{ route('learn.lang.sentence') }}">
                        <span class="sidebar-menu-icon">
                            <i class="material-icons">favorite</i>
                        </span>
                        <span class="sidebar-menu-text">
                            Update Profile
                        </span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link" href="{{ route('learn.lang.sentence') }}">
                        <span class="sidebar-menu-icon">
                            <i class="material-icons">build</i>
                        </span>
                        <span class="sidebar-menu-text">
                            Setting
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>