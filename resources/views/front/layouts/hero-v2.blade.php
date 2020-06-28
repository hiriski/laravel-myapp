<div id="hero" data-version="two">
  <div class="_z">
    <div class="_q">
      <div class="_y">
        <div class="_x">
          <div class="u">
            <div class="_r">
              <div class="_i">
                {{-- <h2><span>Hi, I am</span> Riski</h2> --}}
                <h2><span class="name">Riski</span><span id="typed"></span></h2>
                <span>@riskiwebid</span>
              </div>
              <div class="_o">
                <p>I am web designer and developer based in Bandung, Indonesia. I have a passion for backend engineer and love to create simple and cleand design.</p>
              </div>
              @include('front.components.social-links')

              <div class="_h_c_">
                <a href="{{ route('contact.index') }}"><i class="material-icons">send</i> <span>Send me message</span></a>
              </div>
            </div>
          </div>
          <div class="anh_">
            <div class="_h">
              <img src="{{ asset('rux-c@1x.jpg') }}" alt="Riski">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Hero Nav --}}
  @include('front.components.hero-nav')
</div>