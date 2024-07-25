@extends('template.index')

@section('content')
<div class="ghost"></div>
<section class="header-box">
  <div class="header-box__title">
    <h1>Portfolio</h1>
  </div>

  <div class="portfolio__gallery">
    @if($projects)
    @foreach($projects as $item)
    <x-portfolio.gallery-item
      link="{{ $item['type'] }}/{{ $item['slug'] }}"
      imgUrl="{{asset($item['imgUrl'])}}"
    />
    @endforeach
    @endif
  </div>
</section>
@endsection