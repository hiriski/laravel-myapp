<div id="hero_nav">
    <div class="_">
        <div class="_a">
            <ul>
                <li data-stand-alone="true">
                    <a href="#"><i class="material-icons">laptop_mac</i> <span>Hello World</span></a>
                </li>
                <li data-route-target="index" class="{{ Route::getCurrentRoute()->uri === "/" ? 'you_are_with_me' : '' }}">
                    <a href="{{ route('index') }}">
                        <i class="material-icons">menu_book</i>
                        <span>My Homepage</span>
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
                    <a href="{{ route('about') }}">
                        <i class="material-icons">account_circle</i>
                        <span>About me</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="hero_nav_toggler">
    <a href="#"><i class="material-icons">menu</i></a>
</div>