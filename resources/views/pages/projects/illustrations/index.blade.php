@extends('template.index')

@section('content')
<div class="ghost"></div>
<section class="header-box">
  <div class="header-box__title">
    <h1>Ilustrações</h1>
    <p>Portfólio</p>
  </div>

  <div class="portfolio__gallery">
    @if($arts)
    @foreach($arts as $item)
      <x-projects.gallery-item
        link="{{ route('projects.arts.show', ['slug' => $item['name']]) }}"
        imgUrl="{{asset($item['imgUrl'])}}"
      />
    @endforeach
    @endif
  </div>
</section>
@endsection