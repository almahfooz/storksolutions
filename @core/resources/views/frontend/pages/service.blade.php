@extends('frontend.frontend-page-master')
@section('site-title')
    {{ __('Service') }}
@endsection
@section('page-title')
    {{ __('Service') }}
@endsection
@section('content')

    <!-- Services Section Ten -->
    <section class="services-section-ten style-two">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($all_services as $data)
                    <!-- Services Block Fourteen -->
                    <div class="services-block-fourteen style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon {{ $data->icon }}"></span>
                            </div>
                            <h6><a
                                    href="{{ route('frontend.services.single', ['id' => $data->id, 'any' => Str::slug($data->title)]) }}">{{ $data->title }}</a>
                            </h6>
                            <div class="text">{{ $data->excerpt }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Services Section Ten -->

    <!-- Pricing Section -->
	<section class="pricing-section alternate bg-light">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>{{ get_static_option('service_page_' . get_user_lang() . '_price_plan_section_title') }}</h2>
			</div>
			
			<!--Pricing Info Tabs-->
			<div class="pricing-info-tabs">
				<!--Pricing Tabs-->
				<div class="pricing-tabs tabs-box">
				
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<div id="package-monthly">
							<div class="content">
								<div class="row clearfix">	
                                    @foreach ($all_price_plan as $data)
                                        <!-- Price Block -->
                                        <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <!-- Title Box -->
                                                <div class="title-box">
                                                    <h5>{{ $data->title }}</h5>
                                                </div>
                                                <div class="price">{{ $data->price }}</div>
                                                <div class="lower-box">
                                                    <ul class="price-list">
                                                        @php
                                                        $features = explode(';', $data->features);
                                                    @endphp
                                                    @foreach ($features as $feat)
                                                        <li>{{ $feat }}</li>
                                                    @endforeach
                                                    </ul>
                                                    @php $button_url = !empty($data->url_status) ? route('frontend.plan.order',$data->id) : $data->btn_url ;  @endphp
                                                    <a href="{{ $button_url }}" class="theme-btn btn-style-eight">{{ $data->btn_text }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Pricing Section -->


    {{-- <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-one">
                        <div class="left-content-area">
                            <h3 class="title">
                                {{ get_static_option('service_page_' . get_user_lang() . '_cta_title') }}</h3>
                            <p>{{ get_static_option('service_page_' . get_user_lang() . '_cta_description') }}</p>
                        </div>
                        @if(!empty(get_static_option('service_page_'.get_user_lang().'_cta_button_status')))
                        <div class="right-content-area">
                            <div class="btn-wrapper">
                                <a href="{{ url('/contact') }}"
                                    class="boxed-btn">{{ get_static_option('service_page_' . get_user_lang() . '_cta_button_text') }}</a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="call-to-action-two">
		<div class="auto-container">
			<div class="clearfix">
				
				<div class="pull-left">
					<h2>{{ get_static_option('service_page_' . get_user_lang() . '_cta_title') }}</h2>
				</div>

                @if(!empty(get_static_option('service_page_'.get_user_lang().'_cta_button_status')))
                        <div class="pull-right">
                            <a href="{{ url('/contact') }}" class="theme-btn btn-style-five">{{ get_static_option('service_page_' . get_user_lang() . '_cta_button_text') }} <span class="icon fa fa-arrow-right"></span></a>
                        </div>
                @endif
				
			</div>
		</div>
	</section>
@endsection
