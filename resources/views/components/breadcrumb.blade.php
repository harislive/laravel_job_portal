<nav {{$attributes}}>
    <ul class="flex space-x-1 text-slate-400">
        <li><a href="">Home</a></li>
        @foreach ($links as $label => $link)
        <li>-></li>
        <li><a href="{{$link}}">
            {{$label}}
        </a>
    </li>
        @endforeach
    </ul>
</nav>
