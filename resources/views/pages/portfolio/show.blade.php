@extends('template.without-navbar')

@section('content')
<section>
  @if(isset($project['body']['mainBanner']) && $project['body']['mainBanner'])
  <div class="portfolio__banner" style="background-image: url('{{ asset($project['body']['mainBanner']) }}')">
  </div>
  @else
  <div style="height: 10rem"></div>
  @endif

  <div class="container">
    <x-utils.breadcrumb :breads="$breads" />
    <x-portfolio.head-item :info="$project['head']" />

    @if(isset($project['body']['figmaPrototype']) && $project['body']['figmaPrototype'])
    <div class="m-5-auto">
      <h2>Protótipo Figma</h2>

      <iframe class="portfolio__proto_figma" src="{{ $project['body']['figmaPrototype']}}" allowfullscreen></iframe>
    </div>
    @endif
  </div>
</section>
@endsection