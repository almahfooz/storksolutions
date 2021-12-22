@extends('frontend.frontend-page-master')
@section('page-title')
    {{__('Search For: ').$search_term}}
@endsection
@section('content')

    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @if(count($all_blogs) < 1)
                            <div class="col-lg-12">
                                <div class="alert alert-danger">
                                    {{__('Nothing found related to ').$search_term}}
                                </div>
                            </div>
                        @endif
                            @foreach($all_blogs as $data)
                            <div class="news-block-three col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                    data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <div class="image">
                                        @if (file_exists('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image))
                                            <img src="{{ asset('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image) }}"
                                                alt="{{ $data->title }}">
                                            <a href="{{ asset('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image) }}"
                                                class="lightbox-image overlay-box"><span
                                                    class="flaticon-play-button"></span></a>
                                        @endif
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="fa fa-calendar"></span>{{ $data->created_at->format('F d, Y') }}
                                            </li>
                                            <li><span class="fa fa-user"></span>{{ $data->user->username }}
                                            </li>
                                        </ul>
                                        <h4><a
                                                href="{{ route('frontend.blog.single', ['id' => $data->id, 'any' => Str::slug($data->title)]) }}">{{ $data->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <div class="col-lg-12">
                        <nav class="pagination-wrapper" aria-label="Page navigation ">
                           {{$all_blogs->links()}}
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-side">
                   @include('frontend.partials.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
