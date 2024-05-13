@extends('template.index')

@section('content')

<div class="container mt-10">
  <div>
    <h1>Portfolio</h1>
  </div>

  <div class="portfolio__gallery">

    <x-portfolio.gallery-item link="https://www.behance.net/gallery/191362951/-Website-UI-SorlaDB"
      imgUrl="{{asset('assets/projects/sorla-db/square.png')}}" />
    <x-portfolio.gallery-item link="https://www.behance.net/gallery/169279411/-social-media-post-Autismo-em-mulheres"
      imgUrl="{{asset('assets/projects/autismo-em-mulheres/square.png')}}" />
    <x-portfolio.gallery-item link="https://www.behance.net/gallery/135370153/-App-UI-Mais-Futuro-(private-pension)"
      imgUrl="{{asset('assets/projects/mais-futuro/square.png')}}" />
    <x-portfolio.gallery-item link="" imgUrl="{{asset('assets/projects/pantera-motors/square.png')}}" />
    <x-portfolio.gallery-item link="" imgUrl="{{asset('assets/projects/escola-renovacao/square.png')}}" />
    <x-portfolio.gallery-item link="" imgUrl="{{asset('assets/projects/colecoes-fauna-do-brasil/square.png')}}" />
    <x-portfolio.gallery-item link="" imgUrl="{{asset('assets/projects/show-gospel/square.png')}}" />
  </div>
</div>
@endsection