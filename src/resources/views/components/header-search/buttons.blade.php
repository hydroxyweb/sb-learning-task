<div class="row">
    <div class="col header-search__buttons">
        <x-button.button color="outlined">
            <x-slot name="icon">
                <i class="icon-location"></i>
            </x-slot>
            <x-slot name="title">
                Location
            </x-slot>
            <x-slot name="secondary">
                Add destination
            </x-slot>
        </x-button.button>

        <x-button.button color="outlined">
            <x-slot name="icon">
                <i class="icon-calendar"></i>
            </x-slot>
            <x-slot name="title">
                Check in
            </x-slot>
            <x-slot name="secondary">
                Add dates
            </x-slot>
        </x-button.button>

        <x-button.button color="outlined">
            <x-slot name="icon">
                <i class="icon-calendar"></i>
            </x-slot>
            <x-slot name="title">
                Check out
            </x-slot>
            <x-slot name="secondary">
                Add dates
            </x-slot>
        </x-button.button>

        <x-button.button color="outlined">
            <x-slot name="icon">
                <i class="icon-users"></i>
            </x-slot>
            <x-slot name="title">
                Guests
            </x-slot>
            <x-slot name="secondary">
                Add guests
            </x-slot>
        </x-button.button>

        <x-button.button>
            <x-slot name="icon">
                <i class="icon-search"></i>
            </x-slot>
            <x-slot name="title">
                Search
            </x-slot>
        </x-button.button>
    </div>
</div>
