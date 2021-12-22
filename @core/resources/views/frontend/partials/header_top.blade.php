<!--Header Top-->
<div class="header-top">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="top-left">
                <ul class="contact-list clearfix">
                    @foreach ($all_support_item as $data)
                        <li><i class="{{ $data->icon }}"></i> {{ $data->details }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="top-right">

                <!--Language-->
                <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span
                            class="flag-icon"><img src="{{ asset('assets/frontend/finano/images/icons/flag-icon.png') }}" alt="" /></span>{{ session()->get('lang') }}</a>
                    <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                        @foreach ($all_language as $lang)
                            <li @if (session()->get('lang') == $lang->slug) selected @endif value="{{ $lang->slug }}">
                                <a href="javascript:void(0)">{{ $lang->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->
