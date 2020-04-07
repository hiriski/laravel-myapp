<div id="_n_">
    <div class="_">
        <div class="_s">
            <div class="_a">
                <div id="_r_">
                    <div class="_z">
                        <img src="{{ asset('old-logo.svg') }}" alt="Riski Web ID">
                    </div>
                    <span>Riski Web ID</span>
                </div>
                <ul>
                    <li data-page="index">
                        <a href="">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li data-page="blog" class="{{ Route::getCurrentRoute()->uri === "blog" ? 'you_are_with_me' : '' }}">
                        <a href="{{ route('blog.index') }}">
                            <i class="material-icons">notes</i>
                            <span>Blog</span>
                        </a>
                    </li>
                    <li data-page="portfolio">
                        <a href="">
                            <i class="material-icons">arrow_forward</i>
                            <span>Portfolio</span>
                        </a>
                    </li>
                    <li data-page="contact">
                        <a href="">
                            <i class="material-icons">send</i>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li data-page="about">
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