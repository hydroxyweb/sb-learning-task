<button class="button button--{{ $color ?? 'primary' }}" role="button" aria-label="{{ $title }}">
    <div class="row">
        @if (isset($icon))
            <div class="col button__icon button__icon--large {{ !isset($color) ? 'button__icon--centered' : '' }}">
                {{ $icon }}
            </div>
        @endif

        <div class="col">
            @if (isset($title))
                <span class="button__title">
                    {{ $title }}
                </span>
            @endif

            @if (isset($secondary))
                <p class="text-muted m-0">{{ $secondary }}</p>
            @endif
        </div>
    </div>
</button>
