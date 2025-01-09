<a
  href="{{ $href ?? '#'}}"
  target="{{ $target ?? '_self' }}"
  rel="{{ $target === '_blank' ? 'noopener noreferrer' : '' }}"
  aria-label="{{ $ariaLabel ?? '' }}"
>
  <span class="icon--social-media {{ $class ?? '' }}"></span>
</a>