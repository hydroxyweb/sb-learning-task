@php
$dummy = [
    [
        'accommodationName' => 'The Oasis',
        'rating' => '4.8',
        'image' => 'Rectangle 6.png',
        'price' => '$10,000',
        'location' => 'Rio de Janeiro, Brazil',
    ],
    [
        'accommodationName' => 'The Sanctuary',
        'rating' => '4.7',
        'image' => 'Rectangle 6 (1).png',
        'price' => '$9,000',
        'location' => 'Bali, Indonesia',
    ],
    [
        'accommodationName' => 'The Infinity',
        'rating' => '4.6',
        'image' => 'Rectangle 6 (2).png',
        'price' => '$8,000',
        'location' => 'Sydney, Australia',
    ],
    [
        'accommodationName' => 'La Maison',
        'rating' => '4.8',
        'image' => 'Rectangle 6 (3).png',
        'price' => '$8,000',
        'location' => 'Barcelona, Spain',
    ],
    [
        'accommodationName' => 'Serenity Shores',
        'rating' => '4.9',
        'image' => 'Rectangle 6 (4).png',
        'price' => '$7,000',
        'location' => 'Sydney, Australia',
    ],
    [
        'accommodationName' => 'Azure Haven',
        'rating' => '4.7',
        'image' => 'Rectangle 6 (5).png',
        'price' => '$8,000',
        'location' => 'Barcelona, Spain',
    ],
    [
        'accommodationName' => 'Ocean Breeze',
        'rating' => '4.7',
        'image' => 'Rectangle 6 (6).png',
        'price' => '$7,000',
        'location' => 'Bali, Indonesia',
    ],
    [
        'accommodationName' => 'Palm Breeze',
        'rating' => '4.6',
        'image' => 'Rectangle 6 (7).png',
        'price' => '$6,000',
        'location' => 'Phuket, Thailand',
    ]
]

@endphp

<section class="top-book-now section">
    <div class="row row--fluid top-book-now__row">
        <h3 class="section__title top-book-now__title">Top Book Now</h3>
    </div>
    <div class="row top-book-now__row top-book-now__row--grid">

        @foreach($dummy as $data)
        <div class="col top-book-now__col">
            <div class="row top-book-now__image-container">
                <x-card.image-card image="images/{{ $data['image'] }}" title="{{ $data['accommodationName'] }}">
                    <x-slot name="content">
                        <x-top-book-now.rating score="{{ $data['rating'] }}"></x-top-book-now.rating>
                    </x-slot>
                </x-card.image-card>
            </div>
            <div class="row">
                <div class="col top-book-now__accommodation-name">
                    {{ $data['accommodationName'] }}
                </div>

                <div class="col top-book-now__price">
                    {{ $data['price'] }}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <span class="top-book-now__location">
                         <span class="icon-location"></span> {{ $data['location'] }}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

