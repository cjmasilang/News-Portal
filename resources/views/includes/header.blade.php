<head>
    <meta charset="utf-8">
    <title>News Portal</title>
    <!-- Stylesheets -->
    <link href="{{ asset('public/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Color Themes-->
    <link id="theme-color-file" href="{{ asset('public/assets/css/color-themes/default-theme.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('public/assets/images/vbi-icon.ico') }}"rel="icon">
    <link href="{{ asset('public/assets/images/logo.png') }}"rel="vbi logo">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header -->
    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left col-md-4 col-sm-12 col-xs-12">
                        <div class="trend">Trending: </div>
                        <div class="single-item-carousel owl-carousel owl-theme">
                            <div class="slide">
                                <div class="text">Croatia shocks Euro champion Spain Oops! _</div>
                            </div>
                            <div class="slide">
                                <div class="text">Croatia champion Spain Oops! _</div>
                            </div>
                            <div class="slide">
                                <div class="text">Croatia shocks Euro champion.</div>
                            </div>
                        </div>
                    </div>
                    <!--Top Right-->
                    <div class="top-right pull-right col-md-8 col-sm-12 col-xs-12">
                        <ul class="top-nav">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    <br>
                    <div class="pull-right logo-outer">
                        <div class="logo"><a href="index-1.html"></a></div>
                    </div>

                    <div class="pull-left upper-left clearfix">
                        <div class="add-image">
                            <a href="#"><img src="public/assets/images/logo.png" alt="" /></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="bs-example-navbar-collapse-1">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('index')}}">Home</a></li>

                                <li class="dropdown"><a href="#">Headers</a>
                                    <ul>
                                        <li><a href="header-1.html">Header 01</a></li>
                                        <li><a href="header-2.html">Header 02</a></li>
                                        <li><a href="header-3.html">Header 03</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="mega-menu"><a href="#">Mega Menu</a>
                                    <div class="mega-menu-bar">

                                        <!--Tab Section-->
                                        <div class="tab-section">
                                            <!--Product Tabs-->
                                            <div class="info-tabs tabs-box">
                                                <div class="row clearfix">

                                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                                        <!--Tab Btns-->
                                                        <ul class="tab-btns tab-buttons clearfix">
                                                            <li data-tab="#prod-travel" class="tab-btn active-btn">Travel</li>
                                                            <li data-tab="#prod-media" class="tab-btn">Media</li>
                                                            <li data-tab="#prod-finaces" class="tab-btn">Finaces</li>
                                                            <li data-tab="#prod-media-2" class="tab-btn">Media</li>
                                                            <li data-tab="#prod-finaces-2" class="tab-btn">Finaces</li>
                                                        </ul>
                                                        <a href="#" class="all-cat">All</a>
                                                    </div>
                                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                                        <!--Tabs Container-->
                                                        <div class="tabs-content">

                                                            <!--Tab / Active Tab-->
                                                            <div class="tab active-tab" id="prod-travel">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-40.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-41.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-42.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--Tab-->
                                                            <div class="tab" id="prod-media">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-40.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-42.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-41.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--Tab-->
                                                            <div class="tab" id="prod-finaces">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-42.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-40.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-41.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--Tab-->
                                                            <div class="tab" id="prod-media-2">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-40.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-41.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-42.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--Tab-->
                                                            <div class="tab" id="prod-finaces-2">
                                                                <div class="content">

                                                                    <div class="row clearfix">

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-40.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-42.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--News Block Nine-->
                                                                        <div class="news-block-nine col-md-4 col-sm-6 col-xs-12">
                                                                            <div class="inner-box">
                                                                                <div class="image">
                                                                                    <a href="#"><img src="public/assets/images/resource/news-41.jpg" alt="" /></a>
                                                                                    <div class="category"><a href="#">Travel</a></div>
                                                                                </div>
                                                                                <div class="lower-box">
                                                                                    <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                                                    <div class="post-date">March 16, 2016</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="mega-menu"><a href="gallery.html">gallery</a>
                                    <div class="mega-menu-bar">

                                        <div class="mega-menu-carousel owl-carousel owl-theme">

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="public/assets/images/resource/news-43.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                        <div class="post-date">March 16, 2016</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="public/assets/images/resource/news-44.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                        <div class="post-date">March 16, 2016</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="public/assets/images/resource/news-45.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                        <div class="post-date">March 16, 2016</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="public/assets/images/resource/news-46.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                        <div class="post-date">March 16, 2016</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="public/assets/images/resource/news-43.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                        <div class="post-date">March 16, 2016</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="public/assets/images/resource/news-44.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                        <div class="post-date">March 16, 2016</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="public/assets/images/resource/news-45.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                        <div class="post-date">March 16, 2016</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--News Block Nine-->
                                            <div class="news-block-nine">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <a href="#"><img src="public/assets/images/resource/news-46.jpg" alt="" /></a>
                                                        <div class="category"><a href="#">Travel</a></div>
                                                    </div>
                                                    <div class="lower-box">
                                                        <h3><a href="#">Selena Gomez and Lady Gaga join Billboard campaign to stop violence</a></h3>
                                                        <div class="post-date">March 16, 2016</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-single.html">blog Single One</a></li>
                                        <li><a href="blog-single-2.html">Blog Single Two</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Our Shop</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box">

                        <!--Cart Box-->
                        <div class="cart-box">
                            <div class="dropdown">
                                <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-shopping-cart"></span></button>
                                <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

                                    <div class="cart-product">
                                        <div class="inner">
                                            <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                            <div class="image"><img src="public/assets/images/resource/post-thumb-3.jpg" alt="" /></div>
                                            <h3><a href="#">Woolen T-shirt</a></h3>
                                            <div class="quantity-text">Quantity 1</div>
                                            <div class="price">$99.00</div>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="inner">
                                            <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                            <div class="image"><img src="public/assets/images/resource/post-thumb-4.jpg" alt="" /></div>
                                            <h3><a href="#">Woolen T-shirt</a></h3>
                                            <div class="quantity-text">Quantity 1</div>
                                            <div class="price">$99.00</div>
                                        </div>
                                    </div>
                                    <div class="cart-total">Sub Total: <span>$198</span></div>
                                    <ul class="btns-boxed">
                                        <li><a href="#">View Cart</a></li>
                                        <li><a href="#">CheckOut</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu1">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- Hidden Nav Toggler -->
                     <div class="nav-toggler">
                         <button class="hidden-bar-opener"><span class="icon qb-menu1"></span></button>
                     </div>

                </div>

            </div>
        </div>
        <!--End Header Lower-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index-1.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                        <li><a href="index-5.html">Home 05</a></li>
                                        <li><a href="index-6.html">Home 06</a></li>
                                        <li><a href="index-7.html">Home 07</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Headers</a>
                                    <ul>
                                        <li><a href="header-1.html">Header 01</a></li>
                                        <li><a href="header-2.html">Header 02</a></li>
                                        <li><a href="header-3.html">Header 03</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="gallery.html">gallery</a></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-single.html">blog Single One</a></li>
                                        <li><a href="blog-single-2.html">Blog Single Two</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Our Shop</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Header Style Two -->

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar left-align">

        <div class="hidden-bar-closer">
            <button><span class="qb-close-button"></span></button>
        </div>

        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            <div class="logo">
                <a href="index.html"></a>
            </div>
            <!-- .Side-menu -->
            <div class="side-menu">
                <!--navigation-->
                <ul class="navigation clearfix">
                    <li class="current dropdown"><a href="#">Home</a>
                        <ul>
                            <li><a href="index-1.html">Home 01</a></li>
                            <li><a href="index-2.html">Home 02</a></li>
                            <li><a href="index-3.html">Home 03</a></li>
                            <li><a href="index-4.html">Home 04</a></li>
                            <li><a href="index-5.html">Home 05</a></li>
                            <li><a href="index-6.html">Home 06</a></li>
                            <li><a href="index-7.html">Home 07</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li class="dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog-single.html">blog Single One</a></li>
                            <li><a href="blog-single-2.html">Blog Single Two</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Shop</a>
                        <ul>
                            <li><a href="shop.html">Our Shop</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                 </ul>
            </div>
            <!-- /.Side-menu -->

            <!--Options Box-->
            <div class="options-box">
                <!--Sidebar Search-->
                <div class="sidebar-search">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="search" name="text" value="" placeholder="Search ..." required="">
                            <button type="submit" class="theme-btn"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>

                <!--Mobile Cart-->
                <div class="mobile-cart">
                    <a href="shop-single.html" class="clearfix">
                        <div class="pull-left">
                            <div class="text">0 items 0.00$</div>
                        </div>
                        <div class="pull-right">
                            <span class="icon fa fa-shopping-cart"></span>
                        </div>
                    </a>
                </div>

                <!--Language Dropdown-->
                <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"> English <span class="icon fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="#">English</a></li>
                        <li><a href="#">German</a></li>
                        <li><a href="#">Arabic</a></li>
                        <li><a href="#">Hindi</a></li>
                    </ul>
                </div>

                <!--Social Links-->
                <ul class="social-links clearfix">
                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                </ul>

            </div>

        </div><!-- / Hidden Bar Wrapper -->

    </section>
    <!-- End / Hidden Bar -->
