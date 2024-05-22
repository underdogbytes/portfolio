@extends('template.index')

@section('content')

<div class="container mt-10">
  <div>
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
</div>
@endsection