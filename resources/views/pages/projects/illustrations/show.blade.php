@extends('template.index')

@section('content')
<div class="ghost"></div>
<section class="header-box">
  <div class="header-box__title">
    <h1>{{ $item['name'] }}</h1>
    <p>{{ $item['category']  }}</p>
  </div>

  @if(isset($item['description']) && $item['description'])
    <div class="my-2">
      {!! $item['description'] !!}
    </div>
  @endif

  <div class="portfolio__gallery">
    @foreach($item['imgs'] as $img)
      <x-projects.gallery-item
        imgUrl="{{asset($img)}}"
        class="portfolio__gallery__image--square"
      />
    @endforeach
  </div>

  <x-projects.arrows next="{{ $next }}" last="{{ $last }}" />
</section>
@endsection
