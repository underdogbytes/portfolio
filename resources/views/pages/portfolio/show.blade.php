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

    {{-- PESQUISA: --}}
    @if(isset($project['body']['research']) && $project['body']['research'])
    <div class="m-5-auto">
      <h2>{!! $project['body']['research']['title'] !!}</h2>
      {!! $project['body']['research']['text'] !!}
    </div>
    @endif

    {{-- ESCOLHA DO LAYOUT: --}}
    @if(isset($project['body']['layout']) && $project['body']['layout'])
    <div class="m-5-auto">
      <h2>{!! $project['body']['layout']['title'] !!}</h2>
      {!! $project['body']['layout']['text'] !!}
    </div>
    @endif

    {{-- RESULTADO FINAL --}}
    @if(isset($project['body']['result']) && $project['body']['result'])
    <div class="m-5-auto">
      <h2>{{ $project['body']['result']['title'] }}</h2>
      @foreach ($project['body']['result']['imgs'] as $img)
       <img src={{ asset($img) }} width="250" />   
      @endforeach
    </div>
    @endif

    {{-- FIGMA --}}
    @if(isset($project['body']['figmaPrototype']) && $project['body']['figmaPrototype'])
    <div class="m-5-auto">
      <h2>Figma</h2>
    
      <iframe class="portfolio__proto_figma" src="{{ $project['body']['figmaPrototype']}}" allowfullscreen></iframe>
    </div>
    @endif

    {{-- LAST AND NEXT PROJECTS --}}
    <div style="display: flex; justify-content: center; gap: 2rem;">
      <a href="{{ $lastProject }}"><< Projeto anterior</a>
      <a href="{{ $nextProject }}">Próximo projeto >></a>
    </div>
  </div>
  
</section>
@endsection