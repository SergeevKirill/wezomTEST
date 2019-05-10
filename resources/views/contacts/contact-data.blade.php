<div class="contacts-data__wrapper">
    @foreach($mock->contacts_data->contact_blocks as $block)
        <div class="contacts-data">
            <h2 class="contacts-data__title">
                {{$block->title}}
            </h2>
            <div class="contacts-data__content {{$block->type}}">
                @foreach($block->data as $block_data)
                    @if($block->type === "phone")
                        <span class="contacts-data__phone">
                            {{$block_data}}
                        </span>
                    @elseif($block->type === "address")
                        <span class="contacts-data__address">
                            {{$block_data}}
                        </span>
                    @elseif($block->type === "social-media")
                        <button type="button" class="social-media__button {{$block_data}}">
                            <svg>
                                <use xlink:href="sprite/sprite.svg#sprite-{{$block_data}}"></use>
                            </svg>
                        </button>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</div>