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