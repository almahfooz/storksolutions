@extends('frontend.frontend-page-master')
@section('site-title')
    {{__('Team')}}
@endsection
@section('page-title')
    {{__('Team')}}
@endsection
@section('content')
    <section class="about-section-four bg-light">
        <div class="auto-container">
            <div class="row reorder-xs justify-content-between ">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <h2>{{get_static_option('team_page_'.get_user_lang().'_about_section_title')}}</h2>
                    </div>
                    <div class="text">
                        {!! get_static_option('team_page_'.get_user_lang().'_about_section_description') !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="right-content-area">
                        <div class="img-wrapper">
                            @if(file_exists('assets/uploads/'.get_static_option('team_page_'.get_user_lang().'_about_section_image')))
                                <img src="{{asset('assets/uploads/'.get_static_option('team_page_'.get_user_lang().'_about_section_image'))}}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Page Section -->
	<section class="team-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>{{get_static_option('about_page_'.get_user_lang().'_team_section_title')}}</h2>
			</div>
			
			<div class="row clearfix">

                @foreach($all_team_members as $data)
				<!--Team Block-->
				<div class="team-block-two style-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="javascript:void(0)">
                                @if(file_exists('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image))
                                    <img src="{{asset('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)}}" alt="{{__($data->name)}}">
                                @endif
                            </a>
							<ul class="social-box">
								@if(!empty($data->icon_one) && !empty($data->icon_one_url))
                                    <li><a href="{{$data->icon_one_url}}"><i class="{{$data->icon_one}}"></i></a></li>
                                @endif
                                @if(!empty($data->icon_two) && !empty($data->icon_two_url))
                                    <li><a href="{{$data->icon_two_url}}"><i class="{{$data->icon_two}}"></i></a></li>
                                @endif
                                @if(!empty($data->icon_three) && !empty($data->icon_three_url))
                                    <li><a href="{{$data->icon_three_url}}"><i class="{{$data->icon_three}}"></i></a></li>
                                @endif
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="javascript:void(0)">{{$data->name}}</a></h5>
							<div class="designation">{{$data->designation}}</div>
						</div>
					</div>
				</div>
                @endforeach
				
			</div>
			
		</div>
	</section>
	<!-- End Team Page Section -->
@endsection
