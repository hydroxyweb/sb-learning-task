<div class="row">
    <div class="col header-search__buttons">
        <x-header-search.button modifier="outlined">
            <x-slot name="icon">
                <i class="icon-location icon icon--muted icon--large"></i>
            </x-slot>
            <x-slot name="title">
                Location
            </x-slot>
            <x-slot name="secondary">
                Add destination
            </x-slot>
        </x-header-search.button>

        <div class="header-search__separator"></div>

        <x-header-search.button modifier="outlined">
            <x-slot name="icon">
                <i class="icon-calendar icon icon--muted icon--large header-search__icon"></i>
            </x-slot>
            <x-slot name="title">
                Check in
            </x-slot>
            <x-slot name="secondary">
                Add dates
            </x-slot>
        </x-header-search.button>

        <div class="header-search__separator"></div>

        <x-header-search.button modifier="outlined">
            <x-slot name="icon">
                <i class="icon-calendar icon icon--muted icon--large"></i>
            </x-slot>
            <x-slot name="title">
                Check out
            </x-slot>
            <x-slot name="secondary">
                Add dates
            </x-slot>
        </x-header-search.button>

        <div class="header-search__separator"></div>

        <x-header-search.button modifier="outlined">
            <x-slot name="icon">
                <i class="icon-users icon icon--muted icon--large"></i>
            </x-slot>
            <x-slot name="title">
                Guests
            </x-slot>
            <x-slot name="secondary">
                Add guests
            </x-slot>
        </x-header-search.button>

        <x-header-search.button modifier="search" reversed="1">
            <x-slot name="icon">
                <i class="icon-search icon icon--white icon--large"></i>
            </x-slot>
            <x-slot name="title">
                Search
            </x-slot>
        </x-header-search.button>
    </div>
</div>
