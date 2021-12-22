<aside class="sidebar default-sidebar">
    
    <div class="sidebar-widget search-box">
        <form action="{{ route('frontend.blog.search') }}" method="get" class="search-form">
            <div class="form-group">
                <input type="search" class="search-field" name="search" placeholder="{{ __('Search') }}">
                <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <div class="sidebar-widget search-box">
        <div class="sidebar-title-two">
            <h4 class="widget-title">{{ get_static_option('blog_page_' . get_user_lang() . '_category_widget_title') }}
            </h4>
        </div>
        <ul class="blog-cat-two">
            @foreach ($all_categories as $data)
                <li><a
                        href="{{ route('frontend.blog.category', ['id' => $data->id, 'any' => Str::slug($data->name, '-')]) }}">{{ ucfirst($data->name) }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="sidebar-widget popular-posts">
        <!-- widget categories -->
        <div class="sidebar-title-two">
            <h4 class="widget-title">{{ get_static_option('blog_page_' . get_user_lang() . '_recent_post_widget_title') }}
            </h4>
        </div>
        @foreach ($all_recent_blogs as $data)
            <article class="post">
                <figure class="post-thumb">
                    @if (file_exists('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image))
                        <img src="{{ asset('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image) }}"
                            alt="{{ $data->title }}">
                    @endif
                    <a href="{{ route('frontend.blog.single', ['id' => $data->id, 'any' => Str::slug($data->title, '-')]) }}"
                        class="overlay-box">
                        <span class="icon fa fa-link"></span>
                    </a>
                </figure>
                <div class="text"><a
                        href="{{ route('frontend.blog.single', ['id' => $data->id, 'any' => Str::slug($data->title, '-')]) }}">{{ $data->title }}</a>
                </div>
                <div class="post-info">{{ $data->created_at->format('F d, Y') }}</div>
            </article>
        @endforeach
    </div>
</aside>