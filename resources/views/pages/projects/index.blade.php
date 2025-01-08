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
    <x-projects.gallery-item
      link="projects/{{ $item['slug'] }}"
      imgUrl="{{asset($item['imgUrl'])}}"
      class="dark"
    />
    @endforeach
    @endif
  </div>
</section>
@endsection