@extends('template.index')

@section('content')

<x-home.hero />
<x-home.about />
<x-projects.highlights :highlights="$highlights" />
@endsection