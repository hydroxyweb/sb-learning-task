@foreach($menuList as $name => $url)
    <ul>
        <a href="{{ $url }}">{{ $name }} </a>
    </ul>
@endforeach
