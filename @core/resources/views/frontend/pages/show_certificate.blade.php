@extends('frontend.frontend-page-master')

@section('og-meta')
    <meta property="og:url"  content="{{ route('students.certificates.show', $student->id) }}" />
    <meta property="og:type"  content="article" />
    <meta property="og:title"  content="{{$student->name}}" />
    @if ($student->hasCertificate())
    <meta property="og:image" content="{{$student->certificate_path}}" />
    @endif
@endsection
@section('site-title')
    Verfiy Certificate
@endsection
@section('page-title')
    {{__('Verify Certificate')}}
@endsection
@section('content')
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="content-side col-lg-8 col-md-12 col-sm-12 m-auto">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                @if($student->hasCertificate())
                                    <img  src="/{{ $student->certificate_path }}" alt="{{ $student->name }}">
                                @endif
                            </div>
                            <div class="lower-content">
                                <h4>{{$student->course->name}}</h4>
                                <div class="text">
                                    <b>{{ $student->name }}</b> <span>{{ $student->course->certificate_description }}</span> <b>{{ $student->course->name }}</b> <span> FROM </span> <b>{{ $student->course->from() }}</b> <span> TO </span> 
                                    <b>{{ $student->course->to() }}</b>
                                </div>
                            </div>
                        </div>
                        <div class="post-share-options">
							<div class="post-share-inner clearfix">
								<div class="pull-left post-tags"></div>
								<ul class="pull-right social-links clearfix">
                                    {!! single_post_share(route('students.certificates.show', $student->id),$student->name, $student->certificate_path) !!}
								</ul>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

