<header>
	<div class="a">
        <div class="b">

            <div id="logo">
                <div class="a">
                    <a href="{{ route('index') }}" title="Riski Web ID">
                        <svg xmlns="http://www.w3.org/2000/svg" width="512.01" height="512.01" viewBox="0 0 13546.66 13546.66" shape-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd"><defs><mask id="A"><linearGradient id="B" gradientUnits="userSpaceOnUse" x1="7724.39" y1="8348.49" x2="7724.49" y2="8348.39"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-opacity="0" stop-color="#fff"/></linearGradient><path d="M7687 2407.78h2867.36v3241.9H7687z" fill="url(#B)"/></mask></defs><g fill="#3974f5"><path d="M2274.57 1927.2L5366.1 697c60.47-24.65 107.05-31.27 151.6 12.75l2088.77 2358-4406.76 9777.83c-66.36 119.14-85.64 158.73-132.07 223.56-113.44 158.3-260.15 183.9-306.3-52.82-14.02-71.78-25.2-178.2-33.14-301.05L2106.85 2254.23c-17.47-188.23-10.4-227.6 167.72-327.03z"/><path d="M4005.34 8916.83L9614.4 3611.15l1603.74 3749.5z"/><path d="M11202.8 7364.4L822.98 3026.2c-69.1-36.02-72.06-112.67 3.3-144.68L8112.47 555.66c172.24-64.1 290.32-125 418.6 50.84l1888.4 1895.8c93.46 98.56 102.87 123.84 129.5 237l725.6 4519.97c8.52 50.6-15.3 95.3-71.77 105.1z"/></g><path d="M8000.8 8054.8L6057.13 6972.8 7514.37 8164.8z" fill-opacity=".1"/><path d="M7754.4 5619.35l2799.96-2988.44c-59.3-133.53-356.92-181.14-511.44-223.13L7687 5649.7l67.4-30.34z" mask="url(#A)"/><path d="M6338.23 5869.35L2192.28 3580.1l4348.1 1840.77z" fill-opacity=".1"/><path d="M4683.66 9553c-202.6-49.42-663.07-306-865.7-355.43-32.3 38.78-45.62 211.86 67.57 285.08l709.5 267.02 88.64-196.67z" fill-opacity=".18"/><path d="M3817.96 9197.6l2239.18-2224.8 4210.15 3429.78c19.18 26.7 33.86 51.06 44.53 73.17 94.65 195.93-120.9 218.22-242.8 193.14L3952.06 9462.37c-123.2-18.02-212.57-113.32-134.1-264.77z" fill="#0049e6"/><path d="M7460.35 5800.25L10502.4 2609.5c-77.28-112.44-248.37-305.05-342.16-438l-2699.9 3628.76z" fill-opacity=".1"/><path d="M2119.68 2469.93l-8.63-145.1L5983.6 1235.7z" fill-opacity=".15"/></svg>
                    </a>
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