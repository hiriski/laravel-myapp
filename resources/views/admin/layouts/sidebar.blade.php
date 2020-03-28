<div id="sidebar" class="left">
    <div class="sidebar-inner">
        <div class="sidebar-box">
            <div class="sidebar-label w-100 text-center">
                <h6 class="mb-0 p-2">Admin Area</h6>
            </div>
            <div class="sidebar_menu">
                <div class="sidebar-header">
                    <div class="sidebar-header-inner">
                        <div class="profile-pic">
                        <img src="{{ getUserPic(Auth::user()->id, 'md') }}"
                                alt="{{ Auth::user()->name }}"
                                class="img-fluid rounded-circle">
                        </div>
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
                    </div>
                </div>
                <ul class="sidebar-menu">
                    {{-- <h6 class="sidebar-header">Navigation</h6> --}}
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-link" href="{{ route('admin.index') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">home</i>
                            </span>
                            <span class="sidebar-menu-text">
                                Admin
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-link" href="{{ route('admin.blog.index') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">subject</i>
                            </span>
                            <span class="sidebar-menu-text">
                                Blog
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-link" href="{{ route('learn.lang.phrase') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">input</i>
                            </span>
                            <span class="sidebar-menu-text">
                                @lang('app.phrase')
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
</div>