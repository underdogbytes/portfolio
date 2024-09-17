<div class="portfolio__header-info">
    {{-- Sobre o projeto --}}
    @if(isset($info['description']))
    <div>
        <h3>{!! __('projects.head_description') !!}</h3>
        {!! __($info['description']) !!}
    </div>
    @endif

    {{-- Tecnologias utilizadas --}}
    @if(isset($info['tools']))
    <div>
        <h3>{!! __('projects.head_tools_used') !!}</h3>
        @foreach($info['tools'] as $tool)
        <span>
            {!! __($tool) !!}@if(!$loop->last),@endif
        </span>
        @endforeach
    </div>
    @endif

    {{-- Links --}}
    @if(isset($info['links']))
    <div>
        <h3>{!! __('projects.head_links') !!}</h3>
        <ul>
            @foreach ($info['links'] as $item)
            <li>
                {!! __($item['name']) !!}:
                <a href="{{ $item['link'] }}" target="_blank">
                    {{ $item['link'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>