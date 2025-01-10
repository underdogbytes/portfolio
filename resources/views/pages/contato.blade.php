@extends('template.index')

@section('content')
<div class="ghost"></div>
<section>
  <div class="inner">
    <x-titles.big-underlined
      title="{!! __('contact.title') !!}"
    />
    <div>
      <p>Para trabalho ou dizer um oi, me manda um e-mail:</p>
      <a href="mailto:underdogbytes@gmail.com">📧 underdogbytes@gmail.com</a>
    </div>
  </div>
</section>
@endsection