<div>
    <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcrumb-bg.png') }}">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $blog->title }}</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space-top space-extra-bottom">
        <div class="container page-layout right-sidebar">
            <div class="row gx-40 blog-page-with-sidebar">
                <div class="col-xxl-8 col-lg-7">
                    <div class="row gy-4 all-posts-wrapper">
                        <div class="col-12 single-post-item">
                            <article class="post-details blog-single">
                                <div class="post-img blog-img">
                                    <img class="w-100" src="{{ asset('assets/img/blog/blog_s1_1.png') }}" alt="blog image">
                                </div>
                                <div class="post-contents with-thum-img blog-content">
                                    <div class="post-meta-item blog-meta">
                                        <a href="blog.html">15 JAN, 2023</a>
                                        <a href="blog.html">BY HARSH ARKA</a>
                                    </div>
                                    <h3 class="post-title blog-title">Praesent sapien massa convallis a pellentesque</h3>
                                    <div class="post-content blog-text">
                                        <p>In a world where beauty products are abundant, it's refreshing to come across a cosmetics brand that not only enhances your natural beauty but also nurtures the planet. Enter EcoGlam Beauty, a brand that's redefining the beauty industry by prioritizing sustainability without compromising on quality and style. At the heart of EcoGlam Beauty's product line lies a commitment to clean, safe, and non-toxic beauty.</p>
                                    </div>
                                    <div class="post-content blog-text">
                                        <p>Their team of experts meticulously curates formulas that are free from harmful chemicals, ensuring that every product is gentle on your skin.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="thumb mb-sm-0 mb-30">
                                            <img src="{{ asset('assets/img/blog/blog_details1_2.png') }}" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/img/blog/blog_details1_3.png') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <blockquote class="wp-block-quote">
                                    <p>"Celebrate your beauty, embrace the planet. With Eco Glam Beauty, sustainability and glamour unite, proving that the earth
                                        can shine...</p>
                                    <div class="hash-tag">
                                        <a href="blog.html">#EcoGlamBeauty</a>
                                        <a href="blog.html">#SustainableBeauty</a>
                                    </div>
                                    <div class="blockquote-author">
                                        <div class="thumb"><img src="{{ asset('assets/img/blog/blog_details-author.png') }}" alt="img"></div>
                                        <div class="media-left">
                                            <cite>David Walton</cite>
                                            <span class="desig">Content Writer</span>
                                        </div>
                                    </div>
                                </blockquote>
                                <div class="post-content blog-text mt-n2">
                                    <p>IVestibulum ante ipsum primis in faucibus orci luctus  ultrices poere cubilia Curae; Donec velit neque, auctor sit amet aliquam ullamcorper sit amet ligula. Quisque velit , pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi,</p>
                                </div>
                                <div class="post-content-tags">
                                    <div class="post-tag-social">
                                        <div class="post-tag flex-grow-1">
                                            <div class="tagcloud">
                                                <a href="blog.html">DREAM</a>
                                                <a href="blog.html">RINGS</a>
                                                <a href="blog.html">BIRTHDAY</a>
                                            </div>
                                        </div>
                                        <div class="post-share">
                                            <label>Social Icon</label>
                                            <div class="share-this-post">
                                                <div class="social-btn style3">
                                                    <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                    <a href="https://www.dribbble.com/"><i class="fab fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="blog-author">
                                <div class="auhtor-img">
                                    <img src="{{ asset('assets/img/blog/blog_details-author2.png') }}" alt="Blog Author Image">
                                </div>
                                <div class="media-body">
                                    <h3 class="author-name">David Walton</h3>
                                    <span class="author-desig">Content Writer</span>
                                    <p class="author-text">Donec sollicitudin molestie malesuada. Pellentesque inm id orci porta dapibus ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                                    <div class="social-btn">
                                        <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-wrap">
                                <h2 class="blog-inner-title">03 Comments</h2>
                                <ul class="comment-list">
                                    <li class="comment-item">
                                        <div class="post-comment">
                                            <div class="comment-avater">
                                                <img src="{{ asset('assets/img/blog/blog_comment1.png') }}" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <span class="commented-on">Sep 25, 2023</span>
                                                <h3 class="name">David Manthon</h3>
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed convallis at tellus ivamus suscipit tortor</p>
                                                <div class="reply_and_edit">
                                                    <a href="blog-details.html" class="reply-btn">Reply <i class="far fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment-item">
                                                <div class="post-comment">
                                                    <div class="comment-avater">
                                                        <img src="{{ asset('assets/img/blog/blog_comment2.png') }}" alt="Comment Author">
                                                    </div>
                                                    <div class="comment-content">
                                                        <span class="commented-on">Sep 25, 2023</span>
                                                        <h3 class="name">Amalia Genner</h3>
                                                        <p class="text">Lorem ipsum dolor amet, consectetur adipiscing elivamus magna justo</p>
                                                        <div class="reply_and_edit">
                                                            <a href="blog-details.html" class="reply-btn">Reply <i class="far fa-reply"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="comment-item">
                                        <div class="post-comment">
                                            <div class="comment-avater">
                                                <img src="{{ asset('assets/img/blog/blog_comment3.png') }}" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <span class="commented-on">Sep 25, 2023</span>
                                                <h3 class="name">John Smith</h3>
                                                <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug-and-play markets whereas synergistic scenarios.</p>
                                                <div class="reply_and_edit">
                                                    <a href="blog-details.html" class="reply-btn">Reply <i class="far fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Comment Form -->
                                <div class="comment-form mb-30">
                                    <div class="form-title">
                                        <h3 class="blog-inner-title mb-2"> Add a Review</h3>
                                        <span>Your email address will not be published. Required fields are marked*</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" placeholder="Your Name*" class="form-control style-white">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" placeholder="Email Address*" class="form-control style-white">
                                        </div>
                                        <div class="col-12 form-group">
                                            <textarea placeholder="Your Reviews*" class="form-control style-white"></textarea>
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button class="btn">SUBMIT NOW </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5 sidebar-widget-area">
                    <aside class="sidebar-sticky-area sidebar-area">
                        <div class="widget widget-author">
                            <div class="widget-author-thumb">
                                <img src="{{ asset('assets/img/blog/blog-author.png') }}" alt="img">
                            </div>
                            <h3 class="widget_title">Marks Daniel</h3>
                            <span class="widget-author-desig">Writer, Photographer, Manager</span>
                            <div class="social-btn">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.html">Latest News</a>
                                </li>
                                <li>
                                    <a href="blog.html">Today Best Posts</a>
                                </li>
                                <li>
                                    <a href="blog.html">Design Trend</a>
                                </li>
                                <li>
                                    <a href="blog.html">UI/UX Tips</a>
                                </li>
                                <li>
                                    <a href="blog.html">Brand Design</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Latest Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('assets/img/blog/recent-post1.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-clock"></i> SEP 25, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Glamour Guide: Beauty Tips and Trends"</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('assets/img/blog/recent-post2.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-clock"></i> SEP 25, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Glamour Guide: Beauty Tips and Trends"</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('assets/img/blog/recent-post3.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-clock"></i> SEP 25, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Glamour Guide: Beauty Tips and Trends"</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">DREAM</a>
                                <a href="blog.html">RINGS</a>
                                <a href="blog.html">BIRTHDAY</a>
                                <a href="blog.html">NEAKLACE</a>
                                <a href="blog.html">CHAIN</a>
                                <a href="blog.html">BRACLET</a>
                            </div>
                        </div>

                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>
