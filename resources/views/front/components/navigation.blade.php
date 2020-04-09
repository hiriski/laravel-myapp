<div id="_n_">
    <div class="_">
        <div class="_s">
            <div class="_a">
                <div id="_r_">
                    <div class="_z">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('old-logo.svg') }}" alt="Riski Web ID">
                        </a>
                    </div>
                    <span>Riski Web ID</span>
                </div>
                <ul>
                    <li data-route-target="index">
                        <a href="">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li data-route-target="blog" class="{{ Route::getCurrentRoute()->uri === "blog" ? 'you_are_with_me' : '' }}">
                        <a href="{{ route('blog.index') }}">
                            <i class="material-icons">notes</i>
                            <span>Blog</span>
                        </a>
                    </li>
                    <li data-route-target="portfolio">
                        <a href="">
                            <i class="material-icons">arrow_forward</i>
                            <span>Portfolio</span>
                        </a>
                    </li>
                    <li data-route-target="contact">
                        <a href="">
                            <i class="material-icons">send</i>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li data-route-target="about">
                        <a href="">
                            <i class="material-icons">person</i>
                            <span>About me</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>