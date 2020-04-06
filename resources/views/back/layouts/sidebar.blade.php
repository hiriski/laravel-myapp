<div id="sidebar" class="left">
    <div class="sidebar-inner">
        <div class="sidebar-box">
            <div class="sidebar-label text-center">
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

                    <span class="sidebar-header text-muted">Navigation</span>
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
                    
                {{-- Show menu for admin --}}
                @role('admin')
                    <li class="sidebar-menu-item {{ Route::getCurrentRoute()->uri === "admin/blog" ? 'active' : '' }}">
                        <a class="sidebar-menu-link" href="{{ route('admin.blog.index') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">subject</i>
                            </span>
                            <span class="sidebar-menu-text">
                                Blog
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ Route::getCurrentRoute()->uri === "admin/user" ? 'active' : '' }}">
                        <a class="sidebar-menu-link" href="{{ route('admin.user.index') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">person</i>
                            </span>
                            <span class="sidebar-menu-text">
                                Users
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ Route::getCurrentRoute()->uri === "admin/role" ? 'active' : '' }}">
                        <a class="sidebar-menu-link" href="{{ route('admin.role.index') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">get_app</i>
                            </span>
                            <span class="sidebar-menu-text">
                                Roles
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ Route::getCurrentRoute()->uri === "admin/user/role-permission" ? 'active' : '' }}">
                        <a class="sidebar-menu-link" href="{{ route('admin.user.roles_permission') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">supervisor_account</i>
                            </span>
                            <span class="sidebar-menu-text">
                                Role Permissions
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ Route::getCurrentRoute()->uri === "admin/settings" ? 'active' : '' }}">
                        <a class="sidebar-menu-link" href="{{ route('admin.settings') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">build</i>
                            </span>
                            <span class="sidebar-menu-text">
                                Settings
                            </span>
                        </a>
                    </li>
                @endrole
                
                {{-- Show menu for user --}}
                @role('user')
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-link" href="{{ route('api.learn.lang.phrase.index') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">bookmarks</i>
                            </span>
                            <span class="sidebar-menu-text">
                                Learn Phrase
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-link" href="{{ route('api.learn.lang.sentence.index') }}">
                            <span class="sidebar-menu-icon">
                                <i class="material-icons">description</i>
                            </span>
                            <span class="sidebar-menu-text">
                                Learn Sentence
                            </span>
                        </a>
                    </li>
                @endrole
                </ul>
            </div>
        </div>
    </div>
</div>