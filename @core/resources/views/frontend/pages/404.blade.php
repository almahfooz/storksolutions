@extends('frontend.frontend-page-master')
@section('page-title')
    {{__('404')}}
@endsection
@section('content')

    <section class="error-section">
		<div class="auto-container">
			<div class="inner-section">
				<div class="left-error">404</div>
				<div class="right-error">404</div>
				<div class="title">opps! We are sorry</div>
				<h1>{{__('It looks like nothing was found at this location.')}}</h1>
				<a href="{{url('/')}}" class="theme-btn btn-style-sixteen">{{__('Back To Home')}} <span class="fa fa-angle-right"></span></a>
			</div>
		</div>
	</section>

@endsection
