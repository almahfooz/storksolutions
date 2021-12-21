<ul class="navigation clearfix">
    @if (!empty($primary_menu->content))
        @php
            $cc = 0;
            $parent_item_count = 0;
            $menu_content = json_decode($primary_menu->content);
        @endphp
        @foreach ($menu_content as $data)
            @php
                $has_child = get_child_menu_count($menu_content, $data->id);

                if ($cc > 0 && $cc == $parent_item_count) {
                    print '</ul>';
                    $cc = 0;
                }
                if (!empty($data->parent_id) && $data->depth > 0) {
                    if ($cc == 0) {
                        print '<ul>';
                        $parent_item_count = get_child_menu_count($menu_content, $data->parent_id);
                    } else {
                        print '</li>';
                    }
                } else {
                    print '</li>';
                }
            @endphp
            <li class="@if (request()->path() == substr($data->menuUrl, 6)) current @elseif($has_child) dropdown @endif">
                @php $link = str_replace('[url]',url('/'),$data->menuUrl) @endphp
                <a href="{{ $link }}">{{ __($data->menuTitle) }}</a>
                @php
                    if (!empty($data->parent_id) && $data->depth > 0) {
                        $cc++;
                    }
                @endphp
        @endforeach
    @else
        <li class="@if (request()->path() == '/') current @endif">
            <a href="{{ url('/') }}">{{ __('Home') }}</a>
        </li>
    @endif
    @if (!empty(get_static_option('navbar_button')))
        <li class="navbar-btn-wrapper">
            <a class="boxed-btn"
                href="{{ route('frontend.request.quote') }}">{{ get_static_option('navbar_' . get_user_lang() . '_button_text') }}</a>
        </li>
    @endif
</ul>
