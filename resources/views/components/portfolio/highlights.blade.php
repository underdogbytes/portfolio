<section class="header-box">
    <div class="header-box__title">
        <h1>Últimos trabalhos</h1>
        <p>Uma dose do que a casa oferece</p>
    </div>

    <div class="grid--type-projects">
        @if(!empty($highlights))
        @foreach($highlights as $item)
            <x-portfolio.gallery-item
                link="{{ $item['type'] }}/{{ $item['slug'] }}"
                imgUrl="{{asset($item['imgUrl'])}}"
                class="portfolio__gallery__image--square dark"
            />
        @endforeach
        @endif
    </div>

    <div style="width: 100%; display: flex; justify-content: center; margin: 4rem auto">
        <a href="/portfolio">
            <button>Veja todos os projetos</button>
        </a>
    </div>
</section>