<div class="card card--image">
    <img src="{{ $image }}" alt="{{ $title }}">
    @if (isset($content))
        {{ $content }}
    @endif
</div>
