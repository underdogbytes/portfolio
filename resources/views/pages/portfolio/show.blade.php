@extends('template.index')

@section('content')
<section class="container mt-10">
  <x-utils.breadcrumb :breads="$breads" />

  <div>
    {{-- Header: name & description --}}
    <div>
      <h2>{{ $project['name'] }}</h2>
      <p>
        <b>Sobre o projeto:</b>
        <br>
        {{ $project['description'] }}
      </p>
    </div>

    {{-- projects links --}}
    <div class="portfolio__links_box">
      @if($project['links']['prod'])
      <a href="{{ $project['links']['prod'] }}" target="_blank">
        <button class="btn__icon-text">
          <img src="{{ asset('icons/eye-white.svg') }}" alt="Ícone de olho aberto" width="30">
          Projeto em produção
        </button>
      </a>
      @endif

      @if($project['links']['gitRepo'])
      <a href="{{ $project['links']['gitRepo'] }}" target="_blank">
        <button class="btn__icon-text">
          <img src="{{ asset('icons/git-white.svg') }}" alt="Logo Git" width="30">
          Repositório do projeto
        </button>
      </a>
      @endif


      @if($project['links']['behance'])
      <a href="{{ $project['links']['behance'] }}" target="_blank">
        <button class="btn__icon-text">
          <img src="{{ asset('icons/behance-white.svg') }}" alt="Logo Behance" width="30">
          Projeto no Behance
        </button>
      </a>
      @endif
    </div>
  </div>
</section>
@endsection