@extends('includes.mainHome')


@section('content')


           <!--Main Slider-->
           <section class="main-slider">
            <div class="auto-container">
                <div class="single-item-carousel owl-carousel owl-theme">


                    @foreach($latest_news as $news)
                    <!--Slide-->
                    <div class="slide">
                        <figure class="image">
                            <a href="{{ route('newsSingle', $news->slug) }}"><img src="{{ asset('public/uploads/news/'.$news->image) }}" alt="" /></a>
                        </figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="category"><a href="{{route ('newsSingle', $news->slug) }}">{{ $news->category->category_name }}</a></div>
                                    <h2><a href="{{ route('newsSingle', $news->slug)}}">
                                            {{ $news->news_title }}
                                        </a></h2>
                                    <ul class="post-meta">
                                        <li><span class="icon qb-clock"></span>
                                           {{ $news->created_at->diffForHumans() }}
                                        </li>
                                        <li><span class="icon qb-eye"></span>{{ $news->view_count }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </section>
        <!--End Main Slider-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!--Sec Title-->
                    <div class="sec-title">
                        <h2>Latest News</h2>
                    </div>

                    <div class="content-blocks">
                        @foreach($news_latest as $data)
                        <!--News Block Four-->
                        <div class="news-block-four">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="image">
                                            <a href="{{ route('newsSingle', $news->slug) }}"><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="{{ asset('public/uploads/news/'.$data->image) }}" alt="" /></a>
                                        </div>
                                    </div>
                                    <div class="content-box col-md-6 col-sm-6 col-xs-12">
                                        <div class="content-inner">
                                            <div class="category"><a href="{{ route('newsSingle', $news->slug) }}">
                                                {{ $data->category->category_name }}
                                            </a></div>
                                            <h3><a href="{{ route('newsSingle', $news->slug) }} ">
                                                {{ $data->news_title }}
                                            </a></h3>
                                            <ul class="post-meta">
                                                <li><span class="icon fa fa-clock-o"></span> {{ $data->created_at->diffForHumans() }}</li>
                                                <li><span class="icon fa fa-comment-o"></span>{{ $data->view_count }}</li>
                                            </ul>
                                            <div class="text">
                                                {{ Str::limit(strip_tags($data->news_content), 200, '...') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                     <!-- Styled Pagination -->
                    <div class="styled-pagination">
                        <ul class="clearfix">
                          {{ $news_latest->links() }}
                        </ul>
                    </div>

                </div>


                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar right-sidebar">


                        <!--News Post Widget-->
                        <div class="sidebar-widget posts-widget">

                            <!--Product widget Tabs-->
                            <div class="product-widget-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">

                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-popular" class="tab-btn active-btn">Popular</li>
                                        <li data-tab="#prod-recent" class="tab-btn">Recent</li>
                                    </ul>

                                    <!--Tabs Container-->
                                    <div class="tabs-content">

                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="prod-popular">
                                            <div class="content">
                                                @foreach($popular_posts as $post)
                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="{{ route('newsSingle', $post->slug) }}"><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="{{ asset('public/uploads/news/'.$post->image) }}" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="{{ route('newsSingle', $post->slug) }}">{{ $post->news_title}}</a></div>
                                                    <div class="post-info">{{ $post->created_at->diffForHumans() }}</div>
                                                </article>
                                                @endforeach

                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="prod-recent">
                    						<div class="content">
                                                @foreach($recent_posts as $post)
                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="{{ route('newsSingle', $post->slug) }}"><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="{{ asset('public/uploads/news/'.$post->image) }}" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="{{ route('newsSingle', $post->slug) }}">{{ $post->news_title}}</a></div>
                                                    <div class="post-info">{{ $post->created_at->diffForHumans() }}</div>
                                                </article>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!--End Product Info Tabs-->

                        </div>
                        <!--End Post Widget-->

                        <!--Category Widget-->
                        <div class="sidebar-widget categories-widget">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="cat-list">
                                @php $categories = \App\Models\Category::where('parent_id', 0)->get(); @endphp
                                @foreach ($categories as $category)
                            	<li class="clearfix"><a href="#">{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End Category Widget-->

                    </aside>
               	</div>

            </div>

            <!--Fullwidth Add-->
            <div class="fullwidth-add text-center">
            	<div class="image">
                	<a href="#"><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/add-1.jpg" alt="" /></a>
                </div>
            </div>

        </div>
    </div>
    <!--End Sidebar Page Container-->



    <!--Main Footer-->
    <footer class="main-footer">

    @include('includes.footer')

</div>
<!--End pagewrapper-->

@endsection
