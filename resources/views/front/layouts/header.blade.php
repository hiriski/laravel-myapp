<header>
	<div class="a">

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
                    </a>
                </li>
			</ul>
		</nav>

	</div>
</header>