@extends('template.index')

@section('content')
  <x-home.hero />
  <x-home.about />
  <x-gallery.highlights
    title="gallery-highlights.home_title"
    subtitle="gallery-highlights.home_subtitle"
    btn="gallery-highlights.home_btn"
    :highlights="$highlights"
  />

  <x-certificados />
@endsection