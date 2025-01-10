@if(!empty($title))
<div class="titles--big-underlined__container">
  <div class="titles--big-underlined__title">
    <h1>{{ $title }}</h1>
    @if(!empty($description))
      <p>{{ $description }}</p>
    @endif
  </div>
</div>
@endif