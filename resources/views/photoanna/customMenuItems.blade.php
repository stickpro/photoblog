@foreach($items as $item)
    <li  ><a href="{{ $item->url() }}" {{ (URL::current() == $item->url()) ? "class=act-link" : "" }} >{{$item->title }}</a></li>
    @if ($item->hasChildren())
        <ul>
            @include(env('THEME'.'.customMenuItems', ['items'=>$item->children()] ))
        </ul>
    @endif
@endforeach