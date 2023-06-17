@props(['active' => '', 'text' => '', 'hide' => false, 'icon' => false,  'rightIcon' => false, 'permission' => false])

@if ($permission)
    @if ($logged_in_user->can($permission))
        @if (!$hide)
            <a {{ $attributes->merge(['href' => '#', 'class' => $active]) }}>
              @if ($icon)<i class="{{ $icon }}"></i> @endif
              <p>
                {{ strlen($text) ? $text : $slot }}
                @if ($rightIcon)<i class="{{ $rightIcon }}"></i> @endif
              </p>
            </a>
        @endif
    @endif
@else
    @if (!$hide)
        <a {{ $attributes->merge(['href' => '#', 'class' => $active]) }}>
          @if ($icon)<i class="{{ $icon }}"></i> @endif
          <p>
            {{ strlen($text) ? $text : $slot }}
            @if ($rightIcon)<i class="{{ $rightIcon }}"></i> @endif
          </p>
        </a>
    @endif
@endif
