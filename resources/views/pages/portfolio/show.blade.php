@extends('template.index')

@section('content')
  <div class="ghost"></div>
  <section class="header-box">
    <x-portfolio.header :project="$project['head']" />
    <x-utils.breadcrumb :breads="$breads" />

    <x-portfolio.about :info="$project['head']" />

    @if(isset($project['body']['research']) && $project['body']['research'])
      <x-portfolio.research :project="$project" />
    @endif

    @if(isset($project['body']['layout']) && $project['body']['layout'])
      <x-portfolio.layout :layout="$project['body']['layout']" />
    @endif

    @if(isset($project['body']['result']) && $project['body']['result'])
      <x-portfolio.result :result="$project['body']['result']" />
    @endif

    @if(isset($project['body']['figmaPrototype']) && $project['body']['figmaPrototype'])
      <x-portfolio.figma link="{{$project['body']['figmaPrototype']}}" />
    @endif

    <x-portfolio.arrows next="{{ $next }}" last="{{ $last }}" />
  </section>
@endsection