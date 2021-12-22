@extends('frontend.frontend-page-master')
@section('page-title')
    {{ get_static_option('quote_page_' . get_user_lang() . '_page_title') }}
@endsection
@section('content')
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="inner-container">
                <h2>{{ get_static_option('quote_page_' . get_user_lang() . '_form_title') }}</h2>

                <div class="row">
                    <div class="info-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="text">
                                <ul class="list-style-five">
                                    @foreach ($all_contact_info as $data)
                                        <li>
                                            <div class="single-contact-info">
                                                <div class="icon">
                                                    <span class="{{ $data->icon }}"></span>
                                                </div>
                                                <div class="content">
                                                    <b class="title">{{ $data->title }}:</b>
                                                    @php $desc = explode(';',$data->description) @endphp
                                                    @foreach ($desc as $item)
                                                        <span class="details">{{ $item }}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="contact-form">
                                <form action="{{ route('frontend.quote.message') }}" method="post"
                                    enctype="multipart/form-data" class="contact-form quote-form">
                                    @csrf
                                    <input type="hidden" name="captcha_token" id="gcaptcha_token">

                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="{{ __('Enter Your Name') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="{{ __('Enter Your Email') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="subject" name="subject" class="form-control"
                                            placeholder="{{ __('Enter Your Subject') }}">
                                    </div>
                                    <div class="form-group textarea">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="5"
                                            placeholder="{{ __('Enter Your Message') }}"></textarea>
                                    </div>
                                    <div class="btn-wrapper text-center">
                                        <button class="theme-btn" type="submit">{{ __('Send Quote') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script
        src="https://www.google.com/recaptcha/api.js?render={{ get_static_option('site_google_captcha_v3_site_key') }}">
    </script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("{{ get_static_option('site_google_captcha_v3_site_key') }}", {
                action: 'homepage'
            }).then(function(token) {
                document.getElementById('gcaptcha_token').value = token;
            });
        });
    </script>
@endsection
