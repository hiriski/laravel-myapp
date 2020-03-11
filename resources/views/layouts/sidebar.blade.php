<div id="sidebar" class="left">
    <div class="sidebar-inner">
        <div class="sidebar_menu">
            <div class="sidebar-header">
                <div class="sidebar-header-inner">
                    <div class="profile-pic">
                    @guest
                        <img src="Nothing" alt="">
                    @else
                        <img src="{{ url('') }}/{{ Auth::user()->profile->image_url }}"
                                alt="{{ Auth::user()->profile->first_name }}"
                                class="img-fluid rounded-circle">
                    @endguest                
                    </div>
                    <div class="profile-name">
                        <span>@greeting</span>
                        <h3>
                            {{ Auth::user()->profile->first_name }}  {{ Auth::user()->profile->last_name }} 👋
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
                <h6 class="sidebar-header">Learning</h6>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link" href="{{ route('phrase.index') }}">
                        <span class="sidebar-menu-icon">
                            <i class="material-icons">subject</i>
                        </span>
                        <span class="sidebar-menu-text">
                            @lang('app.phrase')
                        </span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link" href="{{ route('sentence.index') }}">
                        <span class="sidebar-menu-icon">
                            <i class="material-icons">bookmarks</i>
                        </span>
                        <span class="sidebar-menu-text">
                            @lang('app.sentence')
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>