@extends('frontend.frontend-master')

@section('content')
    @include('frontend.partials.navbar')
    <!--Main Slider-->
    <section class="main-slider"
        style="background-image:url({{ asset('assets/frontend/finano/images/background/1.png') }})">
        <div class="main-slider-carousel owl-carousel owl-theme">

            @foreach ($all_header_slider as $data)
                <div class="slide slide-one"
                    style="background-image:url({{ asset('assets/frontend/finano/images/main-slider/1.png') }})">
                    <div class="auto-container">
                        <div class="content">
                            <h1>
                                @php
                                    $title = str_replace('{color}', '<span class="base-color">', $data->title);
                                    $title = str_replace('{/color}', '</span>', $title);
                                @endphp
                                {!! $title !!}
                            </h1>
                            <div class="text">{{ $data->description }}
                            </div>
                            @if (!empty($data->btn_01_status))
                                <div class="link-box">
                                    <a href="{{ $data->btn_01_url }}" class="theme-btn btn-style-one">
                                        {{ $data->btn_01_text }}
                                        <span class="icon flaticon-link"></span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!--End Slide Info Boxed-->

    </section>
    <!--End Main Slider-->


    @if (!empty(get_static_option('home_page_key_feature_section_status')))
     <!-- Services Section -->
     <section class="services-section">
        <div class="auto-container">
            <div class="clearfix">

                @foreach ($all_key_features as $data)
                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon {{ $data->icon }}"></span>
                        </div>
                        <h5>
                            <a href="services-single.html">{{ $data->title }}</a>
                        </h5>
                        <div class="text">{{ $data->description }}
                        </div>
                        {{-- <a class="plus-box" href="services-single.html">View<span
                                class="plus flaticon-plus-symbol"></span>
                        </a> --}}
                    </div>
                </div>
            @endforeach


            </div>
        </div>
    </section>
    <!-- End Services Section -->
    @endif

    @if(!empty(get_static_option('home_page_build_dream_section_status')))
    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">about us</div>
                            <h2>{{get_static_option('home_page_01_'.get_user_lang().'_build_dream_title')}}
                            </h2>
                        </div>

                        <div class="text">
                            <p>{{get_static_option('home_page_01_'.get_user_lang().'_build_dream_description')}}</p>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                                @if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_build_dream_right_image')))
                                    <img src="{{asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_build_dream_right_image'))}}" alt="">
                                @endif
                            </figure>
                            {{-- <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box">
                                <span class="flaticon-play-button"></span>
                            </a> --}}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->
@endif

@if(!empty(get_static_option('home_page_service_section_status')))
<!-- Services Section Ten -->
<section class="services-section-ten">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Our dedicated services</div>
            <h2>{{get_static_option('home_page_01_'.get_user_lang().'_service_area_title')}}</h2>
        </div>
        <div class="row clearfix">

            @foreach($all_service as $data)
            <!-- Services Block Fourteen -->
            <div class="services-block-fourteen col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon {{$data->icon}}"></span>
                    </div>
                    <h6><a href="{{route('frontend.services.single',['id' => $data->id,'any' => Str::slug($data->title)])}}">{{$data->title}}</a></h6>
                    <div class="text">{{$data->excerpt}}</div>
                </div>
            </div>
            @endforeach
        
            
        </div>
    </div>
</section>
<!-- End Services Section Ten -->
@endif

@if(!empty(get_static_option('home_page_counterup_section_status')))

<!-- Counter Section -->
<section class="counter-section" 
@if(file_exists('assets/uploads/'.get_static_option('home_01_counterup_bg_image')))
    style="background-image: url({{asset('assets/uploads/'.get_static_option('home_01_counterup_bg_image'))}})"
@endif
>
    <div class="auto-container">
        <!-- Fact Counter -->
        <div class="fact-counter style-three">
            <div class="row clearfix">
                @foreach($all_counterup as $data)
                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon {{ $data->icon }}"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000ms" data-stop="1200">{{ $data->number }}</span>+
                            <div class="counter-title">{{ $data->title }}</div>
                        </div>
                    </div>
                </div>

                @endforeach
                
            </div>
        </div>
        
    </div>
</section>
<!-- Counter Section -->
@endif


@if(!empty(get_static_option('home_page_recent_work_section_status')))
<section class="services-section-ten sortable-masonry">
    <div class="auto-container">
        <div class="row">
            <div class="title-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <h2>{{get_static_option('home_page_01_'.get_user_lang().'_recent_work_title')}}</h2>
                    </div>
    
                    <div class="recent-work-nav-area">
                        <ul class="filter-btns">
                            <li class="active" data-filter="*">{{__('All work')}}</li>
                            @foreach($all_work_category as $data)
                            <li data-filter=".{{Str::slug($data->name)}}">{{$data->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="items-container">
                    @foreach($all_work as $data)
                    <div class="masonry-item col-lg-4 recent-work-item col-md-6 {{get_work_category_by_id($data->id,'slug')}}">
                        <div class="thumb">
                            @php $img_url = '';@endphp
                            @if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image))
                                <img src="{{asset('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                @php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image);@endphp
                            @endif
                            <div class="hover">
                                <ul>
                                    <li><a href="{{$img_url}}" class="lightbox-image" data-fancybox="recent-work-gallery" title="{{ $data->title }}"
                                        data-fancybox-group="recent-work-gallery"> <i class="flaticon-image"></i> </a></li>
                                    <li><a href="{{route('frontend.work.single',['id' => $data->id,'any' => Str::slug($data->title)])}}"> <i class="flaticon-link-symbol"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(!empty(get_static_option('home_page_latest_news_section_status')))
        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="title">The blog</div>
                    <h2>{{get_static_option('home_page_01_'.get_user_lang().'_latest_news_title')}}</h2>
                </div>
    
                <div class="row">
                    @foreach($all_blog as $data)
                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                @if(file_exists('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image))
                                    <img src="{{asset('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                @endif
                                <div class="overlay-box">
                                    <a href="{{asset('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)}}" data-fancybox="news" data-caption="{{$data->title}}"
                                        class="plus flaticon-plus-symbol"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <div class="post-date">{{ $data->created_at->format('F d, Y') }}</div>
                                <h5>
                                    <a href="{{route('frontend.blog.single',['id' => $data->id,'any' => Str::slug($data->title)])}}">{{$data->title}}</a>
                                </h5>
                                <div class="text">{{$data->excerpt}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
    
    
                </div>
    
                <!-- Button Box -->
                <div class="btn-box text-center">
                    <a href="{{ route('frontend.blog') }}" class="theme-btn btn-style-one">View more
                        <span class="icon flaticon-eye"></span>
                    </a>
                </div>
    
            </div>
        </section>
        <!-- End News Section -->
@endif

@if(!empty(get_static_option('home_page_brand_logo_section_status')))
    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="auto-container">
    
            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    @foreach($all_brand_logo as $data)
                            <div class="single-brand-item">
                            </div>
                            <li>
                                <div class="image-box">
                                    <a href="javascript:void(0)">
                                        @if(file_exists('assets/uploads/brands/brand-image-'.$data->id.'.'.$data->image))
                                            <img src="{{asset('assets/uploads/brands/brand-image-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                        @endif
                                    </a>
                                </div>
                            </li>
                        @endforeach
                </ul>
            </div>
    
        </div>
    </section>
    <!--End Sponsors Section-->
@endif



    <!--Map Info Section-->
    <section class="map-info-section">
        <div class="outer-container">
            <div class="clearfix">
                <!--Left Column-->
                <div class="left-column">
                    <!--Map Outer-->
                    <div class="map-outer">
                        <!--Map Canvas-->
                        <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631"
                            data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                            data-icon-path="{{ asset('assets/frontend/finano/images/icons/map-marker.png') }}"
                            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-column" style="background-image:url(images/resource/image-1.jpg)">
                    <div class="content">
                        <h2>Request for
                            <span>quote</span>
                        </h2>
                        <div class="text">The argument in favor of using filler text goes something like this: If
                            you use real content in the design process.</div>

                        <!-- Quote Form -->
                        <div class="quote-form">

                            <!--Contact Form-->
                            <form method="post" action="contact.html">
                                <div class="row clearfix">

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="username" placeholder="How to assist you:*" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="phone" placeholder="Phone number:*" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="text" placeholder="Your name:*" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-one">Submit request
                                            <span class="icon flaticon-share-option"></span>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Map Info Section-->
@endsection
