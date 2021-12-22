@extends('frontend.frontend-page-master')
@section('site-title')
    {{__('Contact')}}
@endsection
@section('page-title')
    {{__('Contact')}}
@endsection
@section('content')
<section class="contact-page-section">
    <div class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas" data-zoom="12" data-lat="{{get_static_option('contact_page_map_section_latitude')}}" data-lng="{{get_static_option('contact_page_map_section_longitude')}}" data-type="roadmap" data-hue="#ffc400" data-title="Stork Solutions" data-icon-path="{{ asset('assets/frontend/finano/images/icons/map-marker.png') }}" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="inner-container">
            <h2>{{get_static_option('contact_page_'.get_user_lang().'_form_section_title')}}</h2>
            <div class="row clearfix">
                
                <!-- Info Column -->
                <div class="info-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">
                            @include('backend.partials.message')
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <ul class="list-style-five">
                            @foreach($all_contact_info as $data)
                            <li>
                                <div class="single-contact-info">
                                    <div class="icon">
                                        <span class="{{$data->icon}}"></span>
                                    </div>
                                    <div class="content">
                                        <b class="title">{{$data->title}}:</b>
                                        @php $desc = explode(';',$data->description) @endphp
                                        @foreach($desc as $item)
                                        <span class="details">{{$item}}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                <!-- Form Column -->
                <div class="form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="{{route('frontend.contact.message')}}" novalidate="novalidate">
                                @csrf
                                <input type="hidden" name="captcha_token" id="gcaptcha_token">

                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="{{__('Enter Your Name')}}">
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="{{__('Enter Your Email')}}">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="{{__('Enter Your Subject')}}">
                                </div>
                                <div class="form-group textarea">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="{{__('Enter Your Message')}}"></textarea>
                                </div>
                                <button class="theme-btn" type="submit">{{__('Send Message')}}</button>                                 
                                
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
    <script src="https://www.google.com/recaptcha/api.js?render={{get_static_option('site_google_captcha_v3_site_key')}}"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("{{get_static_option('site_google_captcha_v3_site_key')}}", {action: 'homepage'}).then(function(token) {
                document.getElementById('gcaptcha_token').value = token;
            });
        });
    </script>
@endsection