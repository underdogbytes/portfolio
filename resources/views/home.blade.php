@extends('template.index')

@section('content')

<x-home.hero />

<x-portfolio.highlights :highlights="$highlights" />

@endsection