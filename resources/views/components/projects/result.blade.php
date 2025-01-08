<div class="m-5-auto">
    <h2>{!! __($result['title']) !!}</h2>

    @isset($result['banner'])
        <img src="{{asset($result['banner'])}}" style="width: 100%; height: auto;" />
    @endisset

    <div class="portfolio__gallery" style="margin-top: 1rem; gap: 0">
        @foreach ($result['imgs'] as $img)
        <x-projects.gallery-item imgUrl="{{asset($img)}}" class="{{$result['galleryType']}}" />
        @endforeach
    </div>
</div>