<ul class="social-link">
    @if(!empty($profile->facebook_url))
    <li class="social-link-item">
        <a href="{{ $profile->facebook_url }}" target="_blank">
            <span class="icon">
                <img src="{{ asset('images/social-icons/facebook.svg') }}" alt="">
            </span>
        </a>
    </li>
    @endif
    @if(!empty($profile->twitter_url))
    <li class="social-link-item">
        <a href="{{ $profile->twitter_url }}" target="_blank">
            <span class="icon">
                <img src="{{ asset('images/social-icons/twitter.svg') }}" alt="">
            </span>
        </a>
    </li>
    @endif
    @if(!empty($profile->instagram_url))
    <li class="social-link-item">
        <a href="{{ $profile->instagram_url }}" target="_blank">
            <span class="icon">
                <img src="{{ asset('images/social-icons/instagram.svg') }}" alt="">
            </span>
        </a>
    </li>
    @endif
    @if(!empty($profile->github_url))
    <li class="social-link-item">
        <a href="{{ $profile->github_url }}" target="_blank">
            <span class="icon">
                <img src="{{ asset('images/social-icons/github.svg') }}" alt="">
            </span>
        </a>
    </li>
    @endif
    @if(!empty($profile->codepen_url))
    <li class="social-link-item">
        <a href="{{ $profile->codepen_url }}" target="_blank">
            <span class="icon">
                <img src="{{ asset('images/social-icons/codepen.svg') }}" alt="">
            </span>
        </a>
    </li>
    @endif
    @if(!empty($profile->linkedin_url))
    <li class="social-link-item">
        <a href="{{ $profile->linkedin_url }}" target="_blank">
            <span class="icon">
                <img src="{{ asset('images/social-icons/linkedin.svg') }}" alt="">
            </span>
        </a>
    </li>
    @endif
    @if(!empty($profile->whatsapp))
    <li class="social-link-item">
        <a href="{{ $profile->whatsapp }}" target="_blank">
            <span class="icon">
                <img src="{{ asset('images/social-icons/whatsapp.svg') }}" alt="">
            </span>
        </a>
    </li>
    @endif
</ul>