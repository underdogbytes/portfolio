@props(['breads' => []])
<div class="breadcrumb">
    @foreach($breads as $bread)
    <a href="{{ $bread['url'] }}">{{ $bread['name'] }}</a>
    @if(!$loop->last)
    /
    @endif
    @endforeach
</div>