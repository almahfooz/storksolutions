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