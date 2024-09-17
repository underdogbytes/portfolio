<div class="m-5-auto">
    <h2>{!! __($result['title']) !!}</h2>

    <div class="portfolio__gallery" style="margin-top: 1rem; gap: 0">
        @foreach ($result['imgs'] as $img)
        <x-portfolio.gallery-item imgUrl="{{asset($img)}}" class="portfolio__gallery__image--square" />
        @endforeach
    </div>
</div>