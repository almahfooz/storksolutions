@extends('frontend.frontend-page-master')
@php $img_url = '';@endphp
@if(file_exists('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image))
    @php $img_url = asset('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image);@endphp
@endif
@section('og-meta')
    <meta property="og:url"  content="{{route('frontend.work.single',['id' => $work_item->id,'any' => Str::slug($work_item->title)])}}" />
    <meta property="og:type"  content="article" />
    <meta property="og:title"  content="{{$work_item->title}}" />
    <meta property="og:image" content="{{$img_url}}" />
@endsection
@section('site-title')
    {{$work_item->title}}
@endsection
@section('page-title')
    {{__('Work Single')}}
@endsection
@section('content')
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                @php $img_url = '';@endphp
                                @if(file_exists('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image))
                                    <img  src="{{asset('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image)}}" alt="{{$work_item->title}}">
                                    @php $img_url = asset('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image);@endphp
                                @endif
                            </div>
                            <div class="lower-content">
                                <h4>{{$work_item->title}}</h4>
                                <div class="text">
                                    {!! $work_item->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="post-share-options">
							<div class="post-share-inner clearfix">
								<div class="pull-left post-tags"></div>
								<ul class="pull-right social-links clearfix">
                                    {!! single_post_share(route('frontend.work.single',['id' => $work_item->id,'any' => Str::slug($work_item->title)]),$work_item->title,$img_url) !!}
								</ul>
							</div>
						</div>
                    </div>
                </div>
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <div class="sidebar-widget sidebar-blog-category">
                        <ul class="blog-cat-two">
                            <li><a>{{__('Start Date:')}} <span>{{$work_item->start_date}} </span></a></li>
                            <li><a>{{__('End Date:')}} <span> {{$work_item->end_date}}</span></a></li>
                            <li><a>{{__('Location:')}} <span> {{$work_item->location}}</span></a></li>
                            <li><a>{{__('Clients:')}} <span> {{$work_item->clients}}</span></a></li>
                            <li><a>{{__('Category:')}} <span> {{get_work_category_by_id($work_item->id,'string')}}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

