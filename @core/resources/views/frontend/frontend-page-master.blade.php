
@include('frontend.partials.header')
@include('frontend.partials.navbar', ['secondary' => true])
<!--Page Title-->
<section class="page-title"
@if(file_exists('assets/uploads/'.get_static_option('site_breadcrumb_bg')))
         style="background-image: url({{asset('assets/uploads/'.get_static_option('site_breadcrumb_bg'))}});"
         @endif
>
    <div class="auto-container">
        <div class="content">
            <h1>@yield('page-title')</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}"><span>{{__('Home')}}</span></a></li>
                <li>@yield('page-title')</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
@yield('content')

@include('frontend.partials.footer')