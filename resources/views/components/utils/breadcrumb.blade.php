@props(['breads' => []])
<div>
    @foreach($breads as $bread)
    <a href="{{ $bread['url'] }}">{{ $bread['name'] }}</a>
    @if(!$loop->last)
    /
    @endif
    @endforeach
</div>