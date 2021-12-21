 <!--Main Footer-->
 <footer class="main-footer">
     <div class="auto-container">
         <!--Widgets Section-->
         <div class="widgets-section">
             <div class="row clearfix">

                 <!--Column-->
                 <div class="big-column col-lg-6 col-md-12 col-sm-12">
                     <div class="row clearfix">

                         <!--Footer Column-->
                         <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                             <div class="footer-widget logo-widget">
                                 <div class="logo">
                                     <a href="{{ url('/') }}">
                                         @if (file_exists('assets/uploads/' . get_static_option('about_widget_logo')))
                                             <img src="{{ asset('assets/uploads/' . get_static_option('about_widget_logo')) }}"
                                                 alt="">
                                         @endif
                                     </a>
                                 </div>
                                 <div class="text">
                                     {{ get_static_option('about_widget_' . get_user_lang() . '_description') }}</div>
                                 <ul class="list-style-two">
                                     @foreach ($all_support_item as $data)
                                         <li><span class="icon {{ $data->icon }}"></span> {{ $data->details }}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>

                         <!--Footer Column-->
                         <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                             <div class="footer-widget links-widget">
                                 <h4>{{ get_static_option('useful_link_' . get_user_lang() . '_widget_title') }}</h4>
                                 <ul class="list-link">
                                     @php $useful_links_arr = json_decode($all_usefull_links->content); @endphp
                                     @foreach ($useful_links_arr as $data)
                                         @php $link = str_replace('[url]',url('/'),$data->menuUrl) @endphp
                                         <li><a href="{{ $link }}">- {{ __($data->menuTitle) }}</a></li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>

                     </div>
                 </div>

                 <!--Column-->
                 <div class="big-column col-lg-6 col-md-12 col-sm-12">
                     <div class="row clearfix">

                         <!--Footer Column-->
                         <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                             <div class="footer-widget links-widget">
                                 <h4>{{ get_static_option('important_link_' . get_user_lang() . '_widget_title') }}</h4>
                                 <ul class="list-link">
                                     @php $useful_links_arr = json_decode($all_usefull_links->content); @endphp
                                     @foreach ($useful_links_arr as $data)
                                         @php $link = str_replace('[url]',url('/'),$data->menuUrl) @endphp
                                         <li><a href="{{ $link }}">- {{ __($data->menuTitle) }}</a></li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>

                         <!--Footer Column-->
                         <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                             <div class="footer-widget gallery-widget">
                                 <h4>Gallery</h4>
                                 <div class="widget-content">
                                     <div class="images-outer clearfix">
                                         <!--Image Box-->
                                         <figure class="image-box">
                                             <a href="{{ asset('assets/frontend/finano/images/gallery/1.jpg') }}" class="lightbox-image"
                                                 data-fancybox="footer-gallery" title="Image Title Here"
                                                 data-fancybox-group="footer-gallery"><img
                                                     src="{{ asset('assets/frontend/finano/images/gallery/footer-gallery-thumb-1.jpg') }}" alt=""></a>
                                         </figure>
                                         <!--Image Box-->
                                         <figure class="image-box">
                                             <a href="{{ asset('assets/frontend/finano/images/gallery/2.jpg') }}" class="lightbox-image"
                                                 data-fancybox="footer-gallery" title="Image Title Here"
                                                 data-fancybox-group="footer-gallery"><img
                                                     src="{{ asset('assets/frontend/finano/images/gallery/footer-gallery-thumb-2.jpg') }}" alt=""></a>
                                         </figure>
                                         <!--Image Box-->
                                         <figure class="image-box">
                                             <a href="{{ asset('assets/frontend/finano/images/gallery/3.jpg') }}" class="lightbox-image"
                                                 data-fancybox="footer-gallery" title="Image Title Here"
                                                 data-fancybox-group="footer-gallery"><img
                                                     src="{{ asset('assets/frontend/finano/images/gallery/footer-gallery-thumb-3.jpg') }}" alt=""></a>
                                         </figure>
                                         <!--Image Box-->
                                         <figure class="image-box">
                                             <a href="{{ asset('assets/frontend/finano/images/gallery/4.jpg') }}" class="lightbox-image"
                                                 data-fancybox="footer-gallery" title="Image Title Here"
                                                 data-fancybox-group="footer-gallery"><img
                                                     src="{{ asset('assets/frontend/finano/images/gallery/footer-gallery-thumb-4.jpg') }}" alt=""></a>
                                         </figure>
                                         <!--Image Box-->
                                         <figure class="image-box">
                                             <a href="{{ asset('assets/frontend/finano/images/gallery/5.jpg') }}" class="lightbox-image"
                                                 data-fancybox="footer-gallery" title="Image Title Here"
                                                 data-fancybox-group="footer-gallery"><img
                                                     src="{{ asset('assets/frontend/finano/images/gallery/footer-gallery-thumb-5.jpg') }}" alt=""></a>
                                         </figure>
                                         <!--Image Box-->
                                         <figure class="image-box">
                                             <a href="{{ asset('assets/frontend/finano/images/gallery/6.jpg') }}" class="lightbox-image"
                                                 data-fancybox="footer-gallery" title="Image Title Here"
                                                 data-fancybox-group="footer-gallery"><img
                                                     src="{{ asset('assets/frontend/finano/images/gallery/footer-gallery-thumb-6.jpg') }}" alt=""></a>
                                         </figure>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>

             </div>
         </div>
     </div>
     <!-- Footer Bottom -->
     <div class="footer-bottom">
         <div class="auto-container">
             <div class="row clearfix">

                 <!-- Copyright Column -->
                 <div class="copyright-column col-lg-6 col-md-6 col-sm-12">
                     <div class="copyright">@php
                         $footer_text = get_static_option('site_footer_copyright');
                         $footer_text = str_replace('{copy}', '&copy;', $footer_text);
                         $footer_text = str_replace('{year}', date('Y'), $footer_text);
                     @endphp
                         {!! $footer_text !!}
                     </div>
                 </div>

                 <!-- Social Column -->
                 <div class="social-column col-lg-6 col-md-6 col-sm-12">
                     <ul>
                         <li class="follow">Follow us:</li>
                         @if (!empty(get_static_option('about_widget_social_icon_one')) && !empty(get_static_option('about_widget_social_icon_one_url')))
                             <li><a href="{{ get_static_option('about_widget_social_icon_one_url') }}"><span
                                         class="{{ get_static_option('about_widget_social_icon_one') }}"></span></a>
                             </li>
                         @endif
                         @if (!empty(get_static_option('about_widget_social_icon_two')) && !empty(get_static_option('about_widget_social_icon_two_url')))
                             <li><a href="{{ get_static_option('about_widget_social_icon_two_url') }}"><span
                                         class="{{ get_static_option('about_widget_social_icon_two') }}"></span></a>
                             </li>
                         @endif
                         @if (!empty(get_static_option('about_widget_social_icon_three')) && !empty(get_static_option('about_widget_social_icon_three_url')))
                             <li><a href="{{ get_static_option('about_widget_social_icon_three_url') }}"><span
                                         class="{{ get_static_option('about_widget_social_icon_three') }}"></span></a>
                             </li>
                         @endif
                         @if (!empty(get_static_option('about_widget_social_icon_four')) && !empty(get_static_option('about_widget_social_icon_four_url')))
                             <li><a href="{{ get_static_option('about_widget_social_icon_four_url') }}"><span
                                         class="{{ get_static_option('about_widget_social_icon_four') }}"></span></a>
                             </li>
                         @endif
                     </ul>
                 </div>

             </div>
         </div>
     </div>
 </footer>

 </div>
 <!--End pagewrapper-->

 <script src="{{ asset('assets/frontend/finano/js/jquery.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/popper.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/jquery.fancybox.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/appear.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/owl.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/wow.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/isotope.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/jquery-ui.js') }}"></script>
 <script src="{{ asset('assets/frontend/finano/js/main.js') }}"></script>
 <!--Google Map APi Key-->
 <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
 <script src="{{ asset('assets/frontend/finano/js/map-script.js') }}"></script>
 <!--End Google Map APi-->

 @yield('scripts')

 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
     var Tawk_API = Tawk_API || {},
         Tawk_LoadStart = new Date();
     (function() {
         var s1 = document.createElement("script"),
             s0 = document.getElementsByTagName("script")[0];
         s1.async = true;
         s1.src = "https://embed.tawk.to/{{ get_static_option('tawk_api_key') }}/default";
         s1.charset = 'UTF-8';
         s1.setAttribute('crossorigin', '*');
         s0.parentNode.insertBefore(s1, s0);
     })();
 </script>
 <!--End of Tawk.to Script-->

 </body>

 </html>