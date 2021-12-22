@extends('frontend.frontend-page-master')
@section('site-title')
    {{$page_post->title}}
@endsection
@section('page-title')
    {{$page_post->title}}
@endsection
@section('content')
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 content-side">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="lower-content">
                                <div class="text">
                                    {!! $page_post->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
