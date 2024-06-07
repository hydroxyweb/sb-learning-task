<button class="button button--{{ $color ?? 'primary' }}" role="button" aria-label="{{ $title }}">
    <div class="row">
        @if (isset($icon))
            <div class="col col-1 button__icon button__icon--large p-r-sm">
                {{ $icon }}
            </div>
        @endif

        <div class="col col--row p-l-md">
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
