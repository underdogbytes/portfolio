@extends('template.index')

@section('content')
<div class="ghost"></div>
<section>
  <div class="inner">
    <x-titles.big-underlined
      title="{!! __('projects.title') !!}"
    />

    <div class="portfolio__gallery">
      @if($projects)
      @foreach($projects as $item)
      <x-projects.gallery-item
        link="projetos/{{ $item['slug'] }}"
        imgUrl="{{asset($item['imgUrl'])}}"
        class="dark"
      />
      @endforeach
      @endif
    </div>
  </div>
</section>
@endsection