<section class="portfolio--highlights">
    <div class="inner">
        <x-titles.big-underlined
            title="{!! __($title) !!}"
            description="{!! __($subtitle) !!}"
        />
        
        <div class="grid--type-projects">
            @if(!empty($highlights))
                @foreach($highlights as $item)
                    <x-projects.gallery-item
                        link="projetos/{{ $item['slug'] }}"
                        imgUrl="{{asset($item['imgUrl'])}}"
                        class="portfolio__gallery__image--square dark"
                    />
                @endforeach
            @endif
        </div>
        
        @if(!empty($btn))
        <div class="portfolio--highlights__container-buttons">
            <a href="/projetos">
                <button>{!! __($btn) !!}</button>
            </a>
        </div>
        @endif
    </div>
</section>