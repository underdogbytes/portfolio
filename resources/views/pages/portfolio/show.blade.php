@extends('template.index')

@section('content')
<section class="container mt-10">
  <x-utils.breadcrumb :breads="$breads" />

  <div>
    <h2>{{ $project['name'] }}</h2>

    <div>
      <p>{{ $project['description'] }}</p>

      @if($project['links']['prod'])
      Em ambiente de produção: <a href="{{ $project['links']['prod'] }}" target="_blank">ver projeto</a>
      @endif

      @if($project['links']['behance'])
      Behance: <a href="{{ $project['links']['behance'] }}" target="_blank">ver projeto</a>
      @endif
    </div>
  </div>
</section>
@endsection