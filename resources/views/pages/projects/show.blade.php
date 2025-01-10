@extends('template.index')

@section('content')
  <div class="ghost"></div>
  <section>
    <div class="inner">
      <x-titles.big-underlined title="{!! __($project['head']['name']) !!}" />
      <x-utils.breadcrumb :breads="$breads" />
      
      <x-projects.about :info="$project['head']" />
      
      @if(isset($project['body']['research']) && $project['body']['research'])
      <x-projects.research :project="$project" />
      @endif
      
      @if(isset($project['body']['layout']) && $project['body']['layout'])
      <x-projects.layout :layout="$project['body']['layout']" />
      @endif
      
      @if(isset($project['body']['result']) && $project['body']['result'])
      <x-projects.result :result="$project['body']['result']" />
      @endif
      
      @if(isset($project['body']['figmaPrototype']) && $project['body']['figmaPrototype'])
      <x-projects.figma link="{{$project['body']['figmaPrototype']}}" />
      @endif
      
      <x-projects.arrows next="{{ $next }}" last="{{ $last }}" />
    </div>
  </section>
@endsection