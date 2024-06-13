@extends('template.index')

@section('content')
<section class="header-box">
  <div class="header-box__title">
    <h1>Portfolio</h1>
  </div>

  <div class="portfolio__gallery">
    @if($projects)
    @foreach($projects as $project)
    <x-portfolio.gallery-item link="{{ url('/')}}/portfolio/{{$project['link']}}"
      imgUrl="{{asset($project['imgUrl'])}}" />
    @endforeach
    @endif
  </div>
</section>
@endsection