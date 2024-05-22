@extends('template.index')

@section('content')
<section class="container mt-10">
  <x-utils.breadcrumb :breads="$breads" />

  {{-- Header --}}
  <div class="portfolio__header-info">
    <div>
      <h2>{{ $project['name'] }}</h2>
      <b>Sobre o projeto:</b>
      <br>
      {{ $project['description'] }}
    </div>

    {{-- Cargo --}}
    @if(isset($project['workedAs']))
    <div>
      <b>Cargo:</b>
      <br>
      @foreach($project['workedAs'] as $role)
      <span>
        {{ $role }} @if(!$loop->last),@endif
      </span>
      @endforeach
    </div>
    @endif

    {{-- Tecnologias utilizadas --}}
    @if(isset($project['techs']))
    <div>
      <b>Tecnologias utilizadas:</b>
      <br>
      @foreach($project['techs'] as $tech)
      <span>
        {{ $tech }}@if(!$loop->last),@endif
      </span>
      @endforeach
    </div>
    @endif

    {{-- Links --}}
    @if(isset($project['links']))
    <div class="portfolio__links_box">

      @if(isset($project['links']['prod']) && $project['links']['prod'])
      <a href="{{ $project['links']['prod'] }}" target="_blank">
        <button class="btn__icon-text">
          <img src="{{ asset('icons/eye-white.svg') }}" alt="Ícone de olho aberto" width="30">
          Projeto em produção
        </button>
      </a>
      @endif

      @if(isset($project['links']['gitRepo']) && $project['links']['gitRepo'])
      <a href="{{ $project['links']['gitRepo'] }}" target="_blank">
        <button class="btn__icon-text">
          <img src="{{ asset('icons/git-white.svg') }}" alt="Logo Git" width="30">
          Repositório do projeto
        </button>
      </a>
      @endif


      @if(isset($project['links']['behance']) && $project['links']['behance'])
      <a href="{{ $project['links']['behance'] }}" target="_blank">
        <button class="btn__icon-text">
          <img src="{{ asset('icons/behance-white.svg') }}" alt="Logo Behance" width="30">
          Projeto no Behance
        </button>
      </a>
      @endif
    </div>
    @endif
  </div>
</section>
@endsection