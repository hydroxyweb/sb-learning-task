<section class="our-partners section">
    <div class="row row--fluid our-partners__row">
        <div class="text-center">
            <h3 class="section__title our-partners__title">Our partners</h3>
            <div class="row">
            @for($i = 0; $i < 6; $i++)
                <div class="col our-partners__item">
                    <img src="{{ asset('images/Frame 116' .$i. '.png') }}" alt="Our Partner {{ $i }}"/>
                </div>
            @endfor
            </div>
        </div>
    </div>
</section>

