<section>
    <div class="inner">
        <x-titles.big-underlined title="Portfolio" />

        <div class="portfolio__gallery">
            @if(!empty($projects))
            @foreach($projects as $item)
            <div>
                <x-projects.gallery-item
                    link="{{ route('projects.show', ['slug' => $item['link']]) }}"
                    imgUrl="{{ asset($item['imgUrl']) }}"
                />
                <p>
                    <b>Sobre o que é o projeto?</b>
                    <br>
                    {{ $item['description'] }}
                </p>
            </div>
            @endforeach
            @endif
        </div>

        <div style="width: 100%; display: flex; justify-content: center; margin: 4rem auto">
            <a href="/projetos">
                <button>Ver todos os projetos</button>
            </a>
        </div>
    </div>
</section>