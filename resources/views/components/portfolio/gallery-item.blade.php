@if($link)
<a class="portfolio__gallery__link" href="{{ $link }}">
    @endif
    <img class="portfolio__gallery__image" src="{{ $imgUrl }}" alt="">
    @if($link)
</a>
@endif