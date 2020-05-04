@extends('front.layouts.app')

{{-- JSON ld --}}
@section('about-json-ld')
<script type="application/ld+json">
{
	"@context": "https://schema.org/",
	"@type": "Person",
	"name": "Riski Web ID",
	"url": "https://riski.web.id",
	"image": "picurl.jpg",
	"sameAs": [
			"https://facebook.com",
			"https://twitter.com",
			"https://instagram.com",
			"https://youtube.com/riskiwebid",
			"https://github.com",
			"https://riski.web.id"
	]  
}
</script>
@endsection


@section('content')
<div class="Anh">
  <div class="__o__">
    <div class="__">
      @include('front.layouts.about')
    </div>
  </div>
</div>
@endsection