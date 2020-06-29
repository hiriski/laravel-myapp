<header>
	<div class="a">
        <div class="b">

            <div id="logo">
                <div class="a">
                    <img src="{{ asset('old-logo.svg') }}" alt="RiskiWebiD">
                </div>
            </div>
    
            <nav>
                <ul>
                    <li data-route="index" class="{{ Route::currentRouteName() === "index" ? 'active' : '' }}">
                        <a href="{{ route('index') }}">
                            <span>Index</span>
                        </a>
                    </li>
                    <li data-route="blog" class="{{ Route::currentRouteName() === "blog" ? 'active' : '' }}">
                        <a href="{{ route('blog.index') }}">
                            <span>Blog</span>
                        </a>
                    </li>
                    <li data-route="work">
                        <a href="{{ route('work.index') }}">
                            <span>Works</span>
                        </a>
                    </li>
                    <li data-route="about">
                        <a href="{{ route('about') }}">
                            <span>About</span>
                        </a>
                    </li>
                </ul>
                <ul class='r'>
                    <li data-route="contact">
                        <a href="{{ route('contact.index') }}">
                            <span>Say hello</span>
                            <svg viewBox="0 0 25.995 11.574">
                                <defs>
                                </defs>
                                <path id="ic_arrow_back_24px" class="cls-1" d="M29.995,9.064H6.771L10.814,5.02,9.787,4,4,9.787l5.787,5.787,1.02-1.02L6.771,10.51H29.995Z" transform="translate(29.995 15.574) rotate(180)"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
            
        </div>
	</div>
</header>