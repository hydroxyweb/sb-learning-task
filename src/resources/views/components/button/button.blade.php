<button class="button--{{ $color ?? 'primary' }}" role="button" aria-label="{{ $title }}">
    <div class="row">
        @if (isset($icon))
            <div class="col-1 icon p-r-sm">
                {{ $icon }}
            </div>
        @endif

        <div class="col--row">
            @if (isset($title))
                <strong>
                    {{ $title }}
                </strong>
            @endif

            @if (isset($secondary))
                <p class="text-muted m-0">{{ $secondary }}</p>
            @endif
        </div>
    </div>
</button>
