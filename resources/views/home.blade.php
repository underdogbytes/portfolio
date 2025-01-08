@extends('template.index')

@section('content')

<x-home.hero />
<x-home.about />
<x-portfolio.highlights :highlights="$highlights" />
@endsection