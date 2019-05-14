@foreach($items as $menu_item)
    <li class="{{ Request::is($menu_item->url) ? 'active' : '' }}">
        <a class="text-center" href="{{ url($menu_item->url) }}">{{ $menu_item->title }}
        </a>
        @php
            $submenu = $menu_item->children;
        @endphp

        @if(isset($submenu))
            <ul class="">
                @foreach($submenu as $item)
                    <li class="{{ Request::is($item->url) ? 'active' : '' }}"><a href="{{ url($item->url)}}">{{$item->title}} </a></li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach