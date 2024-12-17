<section class="portfolio--highlights">
    <div class="inner">
        <div class="header-box">
            <div class="header-box__title">
                <h1>Últimos trabalhos</h1>
                <p>Um ticado do que já produzi :)</p>
            </div>
        </div>
        
        <div class="grid--type-projects">
            @if(!empty($highlights))
            @foreach($highlights as $item)
            <x-portfolio.gallery-item link="{{ $item['type'] }}/{{ $item['slug'] }}" imgUrl="{{asset($item['imgUrl'])}}"
                class="portfolio__gallery__image--square dark" />
            @endforeach
            @endif
        </div>
        
        <div class="portfolio--highlights__container-buttons">
            <a href="/portfolio">
                <button>Veja todos os projetos</button>
            </a>
        </div>
    </div>
</section>