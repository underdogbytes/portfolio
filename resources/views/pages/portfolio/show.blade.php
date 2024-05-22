@extends('template.index')

@section('content')
<section class="container mt-10">
  <x-utils.breadcrumb :breads="$breads" />
  <x-portfolio.head-item :info="$project['head']" />
</section>
@endsection