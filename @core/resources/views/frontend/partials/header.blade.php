    <!DOCTYPE html>
    <html lang="{{ get_default_language() }}">

    <head>
        @if (!empty(get_static_option('site_google_analytics')))
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id={{ get_static_option('site_google_analytics') }}">
            </script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', "{{ get_static_option('site_google_analytics') }}");
            </script>
        @endif

        <meta charset="utf-8">

        <meta name="description" content="{{ get_static_option('site_meta_description') }}">
        <meta name="tags" content="{{ get_static_option('site_meta_tags') }}">
        <link rel="icon" href="{{ asset('assets/uploads/' . get_static_option('site_favicon')) }}" type="image/png">
        <link rel="shortcut icon" href="{{ asset('assets/uploads/' . get_static_option('site_favicon')) }}"
            type="image/x-icon">

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- load fonts dynamically -->
        {!! load_google_fonts() !!}

        <!-- Stylesheets -->
        <link href="{{ asset('assets/frontend/finano/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/frontend/finano/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/frontend/finano/css/responsive.css') }}" rel="stylesheet">

        <style>
            :root {
                --main-color-one: {{ get_static_option('site_color') }};
                --secondary-color: {{ get_static_option('site_main_color_two') }};
                --background-color: {{ get_static_option('site_background_color') }};
                @php 
                    $heading_font_family = !empty(get_static_option('heading_font')) ? get_static_option('heading_font_family') :  get_static_option('body_font_family') 
                @endphp 
                --heading-font: "{{ $heading_font_family }}", sans-serif;
                --body-font: "{{ get_static_option('body_font_family') }}", sans-serif;
            }

        </style>
        
        @yield('style')

        @if (request()->is('blog/*') || request()->is('work/*') || request()->is('service/*'))
            @yield('og-meta')
            <title>@yield('site-title')</title>
        @elseif(request()->is('about') || request()->is('service') || request()->is('work') || request()->is('team')
            ||
            request()->is('faq') || request()->is('blog') || request()->is('contact') || request()->is('p/*'))
            <title>@yield('site-title') - {{ get_static_option('site_title') }} </title>
        @else
            <title>{{ get_static_option('site_title') }} - {{ get_static_option('site_tag_line') }}</title>
        @endif

        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>

    <body>

        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>
