<!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="auto-container">
    
            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    @foreach($all_brand_logo as $data)
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