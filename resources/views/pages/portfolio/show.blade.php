@extends('template.index')

@section('content')
<div class="ghost"></div>
<section class="header-box">
  <div class="header-box__title">
    <h1>{{ $project['head']['name'] }}</h1>
    <p></p>
  </div>

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

  @if(isset($project['body']['figmaPrototype']) && $project['body']['figmaPrototype'])
    <x-portfolio.figma link="{{$project['body']['figmaPrototype']}}" />
  @endif

  <x-portfolio.arrows next="{{ $next }}" last="{{ $last }}" />
</section>
@endsection