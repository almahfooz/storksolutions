@extends('frontend.frontend-page-master')
@section('site-title')
    {{__('Faq')}}
@endsection
@section('page-title')
    {{__('Faq')}}
@endsection
@section('content')
    {{-- <div class="faq-page-content-area">
        <div class="container">
            <div class="row">
                @foreach($all_faqs->chunk(5) as $chunked_faq)
                <div class="col-lg-6">
                    <div class="accordion-wrapper">
                        @php $rand_number = rand(9999,99999999); @endphp
                        <div id="accordion_{{$rand_number}}">
                            @foreach($chunked_faq as $key => $data)
                                @php
                                    $aria_expanded = 'false';
                                    if($data->is_open == 'on'){ $aria_expanded = 'true'; }
                                @endphp
                                <div class="card">
                                    <div class="card-header" id="headingOne_{{$key}}">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-target="#collapseOne_{{$key}}" role="button"
                                               aria-expanded="{{$aria_expanded}}" aria-controls="collapseOne_{{$key}}">
                                                {{$data->title}}
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne_{{$key}}" class="collapse @if($data->is_open == 'on') show @endif "
                                         aria-labelledby="headingOne_{{$key}}" data-parent="#accordion_{{$rand_number}}">
                                        <div class="card-body">
                                            {{$data->description}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <!-- Faq Section -->
	<section class="faq-section">
		<div class="auto-container">
			<div class="row clearfix">
				@foreach($all_faqs->chunk(5) as $chunked_faq)
				<!-- Faq Column -->
				<div class="faq-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!--Accordion Box-->
						<ul class="accordion-box">
                            @foreach($chunked_faq as $key => $data)

                                <!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-up-arrow-1"></span>{{$data->title}} <span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content">
									<div class="content">
										<p>{{$data->description}}</p>
									</div>
								</div>
							</li>

							@endforeach
						</ul>
						
					</div>
				</div>

                @endforeach
			</div>
		</div>
	</section>
	<!-- End Faq Section -->

    <section class="business-section full-width">
        <div class="contents-column">
            <!-- Testimonial Boxed -->
            <div class="testimonial-boxed" style="background-image:url({{ asset('assets/frontend/finano/images/resource/image-2.jpeg') }})">
                <div class="inner-boxed">
                    <div class="inner-content">
                        <h2>{{get_static_option('home_page_01_'.get_user_lang().'_testimonial_title')}}</h2>
                        <div class="single-item-carousel owl-carousel owl-theme">
        
                            @foreach($all_testimonial as $key => $data)
                                    <!-- Testimonial Block Two -->
                                    <div class="testimonial-block-two">
                                        <div class="inner-box">
                                            <div class="content-box">
                                                <div class="text">{{$data->description}}</div>
                                            </div>
                                            <div class="lower-box">
                                                <div class="lower-inner">
                                                    <div class="image">
                                                        @if(file_exists('assets/uploads/testimonial/testimonial-grid-'.$data->id.'.'.$data->image))
                                                            <img src="{{asset('assets/uploads/testimonial/testimonial-grid-'.$data->id.'.'.$data->image)}}" alt="{{__($data->name)}}">
                                                        @endif
                                                    </div>
                                                    <h3>{{ $data->name }}</h3>
                                                    <div class="designation">{{ $data->designation }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    @include('frontend.partials.brand_logos')
@endsection
