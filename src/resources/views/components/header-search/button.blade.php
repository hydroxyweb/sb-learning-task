<button class="button header-search-button {{ isset($modifier) ? 'header-search-button--'.$modifier : '' }}" role="button" aria-label="{{ $title }}">
    <div class="row {{ isset($reversed) ? 'row--reverse' : '' }}">
        <div class="col button__icon button__icon--large header-search-button__icon {{ isset($modifier) ? 'header-search_icon--'.$modifier : '' }}">
            {{ $icon }}
        </div>

        <div class="col">
            <span class="header-search-button__primary-title {{ isset($modifier) ? 'header-search-button__primary-title--'.$modifier : '' }}">
                {{ $title }}
            </span>

            @if (isset($secondary))
                <p class="text-muted m-0 header-search-button__secondary-title {{ isset($modifier) ? 'header-search-button__secondary-title--'.$modifier : '' }}">{{ $secondary }}</p>
            @endif
        </div>
    </div>
</button>
