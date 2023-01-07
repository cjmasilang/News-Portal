@extends('includes.mainHome')

@section('content')

     <!--Blog Single Gallery-->
     <div class="blog-single-gallery grey-bg">
    	<div class="auto-container">
            <div class="image">
            	<img src="{{ asset('public/uploads/news/'.$news_detail->image) }}" alt="" />
            </div>
        </div>
    </div>
    <!--End Single Gallery-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="content">
                    	<div class="blog-single">
                        	<div class="inner-box">
                            	<div class="upper-box">
                                    <ul class="breadcrumb-bar">
                                        <li><a href="{{ route('index')}}">Home</a></li>
                                        <li>{{ $news_detail->category->category_name }}</li>
                                        <li>{{ $news_detail->news_title }}</li>
                                    </ul>

                                    <h2>{{ $news_detail->news_title }}</h2>
                                    <ul class="post-meta">
                                        <li><span class="icon qb-clock"></span>{{ $news_detail->created_at->diffForHumans()}}</li>
                                        <li><span class="icon qb-user2"></span>by {{ $news_detail->admin->name }}</li>
                                        <li><span class="icon qb-eye"></span>{{ $news_detail->view_count}} Views</li>
                                    </ul>
                                </div>

                                {!! $news_detail->news_content !!}

                                <!--New Article-->
                                <ul class="new-article clearfix">
                                	<li><a href="#"><span class="fa fa-angle-left"></span> &ensp; &ensp; &ensp; &ensp; Previous Article</a></li>
                                    <li><a href="#">Next Article &ensp; &ensp; &ensp; &ensp; <span class="fa fa-angle-right"></span></a></li>
                                </ul>
                            </div>


                            <!--Related Posts-->
                            <div class="related-posts">
                            	<div class="sec-title">
                                	<h2>Related Articles</h2>
                                </div>
                                <div class="related-item-carousel owl-carousel owl-theme">

                                    @foreach ($related_news as $data)
                                    <!--News Block Two-->
                                    <div class="news-block-two small-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="#"><img src="{{ asset('public/uploads/news/'. $data->image)}}" alt="" /></a>
                                                <div class="category"><a href="#">{{ $data->category->category_name }}</a></div>
                                            </div>
                                            <div class="lower-box">
                                                <h3><a href="#">"{{ route('newsSingle', $data->slug) }}">{{ $data->news_title }}</a></h3>
                                                <ul class="post-meta">
                                                    <li><span class="icon fa fa-clock-o"></span>{{ $data->created_at->diffForHumans()}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                            <!--Comments Area-->
                            <div class="comments-area">
                                <div class="sec-title"><h2>Comments</h2></div>

                            </div>
                            <div id="disqus_thread"></div>
                        <script>
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://ehssportal.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar right-sidebar">

                    	<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>

                        <!--Recent News Widget-->
                        <div class="sidebar-widget recent-news-widget">
                        	<div class="sec-title">
                            	<h2>Recent Reviews</h2>
                            </div>
                        	<!--News Block Five-->
                            <div class="news-block-five">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="#"><img src="images/resource/news-39.jpg" alt="" /></a>
                                        <div class="category"><a href="#">Travel</a></div>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">Casto dog meat festival begins in China amid widespread criticism</a></h3>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star light"></span>
                                            <span class="total-rating">9.3</span>
                                        </div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec quam…</div>
                                    </div>
                                </div>
                            </div>

                        	<!--Widget Post Two-->
                            <article class="widget-post-two">
                                <div class="inner">
                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-5.jpg" alt=""></a></figure>
                                    <div class="text"><a href="blog-single.html">A young woman holding a beautiful umbrella in the rain</a></div>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                        <span class="total-rating">7.2</span>
                                    </div>
                                </div>
                            </article>

                        	<!--Widget Post Two-->
                            <article class="widget-post-two">
                                <div class="inner">
                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                    <div class="text"><a href="blog-single.html">Fix an Exchange Rate now with a Forward Contract</a></div>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="total-rating">9.0</span>
                                    </div>
                                </div>
                            </article>

                        	<!--Widget Post Two-->
                            <article class="widget-post-two">
                                <div class="inner">
                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                    <div class="text"><a href="blog-single.html">Study the New Digital Course Developed with Google</a></div>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                        <span class="total-rating">5.3</span>
                                    </div>
                                </div>
                            </article>

                        </div>

                        <!--Social Widget-->
                        <div class="sidebar-widget sidebar-social-widget">
                            <div class="sidebar-title">
                                <h2>Follow Us</h2>
                            </div>
                            <ul class="social-icon-one alternate">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li class="g_plus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li class="linkedin"><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                <li class="pinteret"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                <li class="android"><a href="#"><span class="fa fa-android"></span></a></li>
                                <li class="instagram"><a href="#"><span class="fa fa-instagram"></span></a></li>
                                <li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
                            </ul>
						</div>
                    	<!--End Social Widget-->

                        <!--Adds Widget-->
                        <div class="sidebar-widget sidebar-adds-widget">
                        	<div class="adds-block" style="background-image:url(images/resource/add-image-3.jpg);">
                            	<div class="inner-box">
                                	<div class="text">Advertisement <span> 340 x 283</span></div>
                                    <a href="#" class="theme-btn btn-style-two">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                        <!--Ends Adds Widget-->

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
                                        <li data-tab="#prod-comment" class="tab-btn">Comments</li>
                                    </ul>

                                    <!--Tabs Container-->
                                    <div class="tabs-content">

                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="prod-popular">
                                            <div class="content">

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">Priyanka Chopra got her what photoshopped?</a></div>
                                                    <div class="post-info">April 01, 2016</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">Jerry Seinfeld grabs coffee with Margaret Cho and it gets</a></div>
                                                    <div class="post-info">April 02, 2016</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">American Black Film Festival New projects from film TV</a></div>
                                                    <div class="post-info">April 03, 2016</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">Amy Schumer swaps lives with Anna Wintour</a></div>
                                                    <div class="post-info">April 04, 2016</div>
                                                </article>

                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="prod-recent">
                    						<div class="content">

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">Jerry Seinfeld grabs coffee with Margaret Cho and it gets</a></div>
                                                    <div class="post-info">April 02, 2016</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">American Black Film Festival New projects from film TV</a></div>
                                                    <div class="post-info">April 03, 2016</div>
                                                </article>

                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="prod-comment">
                                            <div class="content">

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">American Black Film Festival New projects from film TV</a></div>
                                                    <div class="post-info">April 03, 2016</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">Amy Schumer swaps lives with Anna Wintour</a></div>
                                                    <div class="post-info">April 04, 2016</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">Priyanka Chopra got her what photoshopped?</a></div>
                                                    <div class="post-info">April 01, 2016</div>
                                                </article>

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
                            	<li class="clearfix"><a href="#">Travel <span>(30)</span></a></li>
                                <li class="clearfix"><a href="#">Entertainment<span>(9)</span></a></li>
                                <li class="clearfix"><a href="#">Sport<span>(13)</span></a></li>
                                <li class="clearfix"><a href="#">Life Style<span>(70)</span></a></li>
                                <li class="clearfix"><a href="#">Tech<span>(11)</span></a></li>
                                <li class="clearfix"><a href="#">Money<span>(5)</span></a></li>
                                <li class="clearfix"><a href="#">Photo<span>(14)</span></a></li>
                            </ul>
                        </div>
                        <!--End Category Widget-->

                    </aside>
               	</div>

            </div>

        </div>
    </div>
    <!--End Sidebar Page Container-->


    <!--Main Footer-->
<footer class="main-footer">
@include('includes.footer')

@endsection
