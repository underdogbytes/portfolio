@extends('template.index')

@section('content')

<x-portfolio.best-projects :projects="$projects" />

@endsection