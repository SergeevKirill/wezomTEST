<div class="bread-crumbs__wrapper">
    <ul class="path-container">
        @foreach($mock->breadcrumbs->contacts as $item)
            @if($loop->last)
                <li class="flex-vertical-center no-underline">
                    <span class="path-link">{{$item}}</span>
                </li>
            @else
                <li class="flex-vertical-center">
                    <a href="#" class="path-link">{{$item}}</a>
                    <span class="path-divider"></span>
                </li>
            @endif
        @endforeach
    </ul>
</div>