<section class="content centered">
    <div class="forms__container">
        <div class="forms-button__container">
            @foreach($mock->form_upper_tabs->tabs as $item)
                <button class="my-button forms-button {{$item->active_class}}" data-wstabs-button="{{$item->id}}" data-wstabs-ns="group-b">
                    <svg>
                        <use xlink:href="{{$item->image_path}}"></use>
                    </svg>
                    <span class="forms-button__text">{{$item->name}}</span>
                </button>
            @endforeach
        </div>
        <div class="forms">
            @foreach($mock->inputs as $form_container)
            <div class="forms-form my-block {{$form_container->active_class}}"  data-wstabs-ns="group-b" data-wstabs-block="{{$form_container->target}}">
                <div class="forms-form__name">
                    {{$form_container->name}}
                </div>
                <div class="tabs-container">
                    @foreach($mock->form_upper_tabs->tab as $tab)
                        @if($tab->is_active === true)
                            <button data-wstabs-ns="{{$form_container->group}}" data-wstabs-button="{{$tab->ws_button}}" class="forms__tab my-button is-active">
                                {{$tab->title}}
                            </button>
                        @else
                            <button data-wstabs-ns="{{$form_container->group}}" data-wstabs-button="{{$tab->ws_button}}" class="forms__tab my-button">
                                {{$tab->title}}
                            </button>
                        @endif
                    @endforeach
                </div>
                <div class="forms-form__container">
                    @foreach($form_container->link_tab->forms as $form)
                        <form action="action.php" data-wstabs-ns="{{$form_container->group}}" data-wstabs-block="{{$form->id}}" class="my-block {{$form->class}}">
                            @foreach($form->form as $single)
                                @foreach($single->row as $row)
                                    <div class="form-input__row">
                                        @foreach($single->content as $content)
                                            @if($content =='')
                                                <div class="form-input__container--empty"></div>
                                            @elseif($content=='input_price')
                                                <div class="form-input__container--input-number">
                                                    <span class="form-input__container--input-number-text">
                                                        Цена
                                                    </span>
                                                    <div class="form-input--number__wrapper">
                                                        <input data-rule-min="50" data-msg-min="Мин. {0}" data-rule-max="250000" data-msg-max="Макс. {0}" type="number" placeholder="50" class="form-input--number">
                                                    </div>
                                                    <div class="form-input--number__wrapper">
                                                        <input data-rule-min="50" data-msg-min="Мин. {0}" data-rule-max="250000" data-msg-max="Макс. {0}" type="number" placeholder="250000" class="form-input--number">
                                                    </div>
                                                </div>
                                            @else
                                                <div class="form-input__container">
                                                    <select name="name" class="forms__select">
                                                        <option value="1">{{$content}}</option>
                                                        <option value="2">Test option</option>
                                                    </select>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach
                            @endforeach
                            <div class="form-button__container">
                                <button type="reset" class="button js-reset-forms button--red">
                                    <svg>
                                        <use xlink:href="sprite/sprite.svg#sprite-cross"></use>
                                    </svg>
                                    {{$mock->form_upper_tabs->clear_button}}
                                </button>
                                <button class="button button--orange-gradient">
                                    {{$mock->form_upper_tabs->apply_button}}
                                </button>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>