@extends('frontend.frontend-page-master')
@section('page-title')
    {{__('Service Category: ').$category_name}}
@endsection
@section('content')
    <section class="services-section-ten style-two">
        <div class="auto-container">
            <div class="row">
                @if(empty($service_items))
                    <div class="col-lg-12">
                        <div class="alert alert-danger">{{__('No Post Available In This Category')}}</div>
                    </div>
                @endif
                @foreach($service_items as $data)
                    <!-- Services Block Fifteen -->
                    <div class="services-block-fifteen col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow bounceIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="image">
                                @if(file_exists('assets/uploads/services/service-grid-'.$data->id.'.'.$data->image))
                                    <img src="{{asset('assets/uploads/services/service-grid-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                    <div class="overlay-box">
                                        <a href="{{asset('assets/uploads/services/service-grid-'.$data->id.'.'.$data->image)}}" data-fancybox="service-2" data-caption="" class="plus flaticon-plus-symbol"></a>
                                    </div>
                                @endif
                            </div>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <div class="icon {{$data->icon}}"></div>
                                    <h5><a href="{{route('frontend.services.single',['id' => $data->id,'any' => Str::slug($data->title)])}}">{{$data->title}}</a></h5>
                                </div>
                                <div class="text">{!! Str::words($data->description,15) !!}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <nav class="pagination-wrapper" aria-label="Page navigation">
                    {{$service_items->links()}}
                </nav>
            </div>
        </div>
    </section>
@endsection
