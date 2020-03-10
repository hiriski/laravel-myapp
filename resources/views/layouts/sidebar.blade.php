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
                        <span>@lang('app.hello') 👋</span>
                        <h3>
                            {{ Auth::user()->profile->first_name }}  {{ Auth::user()->profile->last_name }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
            <h6 class="sidebar-header">Learning :)</h6>
            <a class="sidebar-menu-item" href="{{ route('sentence.index') }}">Sentence</a>
            <a class="sidebar-menu-item" href="">Phrases</a>
            </div>
        </div>
    </div>
</div>