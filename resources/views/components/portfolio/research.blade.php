@if(isset($project['body']['research']) && $project['body']['research'])
<div class="m-5-auto">
    <h2>{!! __($project['body']['research']['title']) !!}</h2>
    {!! __($project['body']['research']['text']) !!}
</div>
@endif