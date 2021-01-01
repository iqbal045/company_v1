@extends('frontend.layouts.website')

@section('content')
    <!-- page banner -->
    <section class="page-banner blog-banner d-flex align-items-center wow fadeIn">
        <div class="container">
            <div class="row">
                <!-- page banner content -->
                <div class="page-banner-content d-flex w-100">
                    <!-- page title -->
                    <h1>Blog Page</h1>
                    <!-- bread-crumb -->
                    <ul class="bread-crumb">
                        <li><i class="fas fa-home"></i><a href="#">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
                <!-- // end page banner content -->
            </div>
        </div>
    </section>
    <!-- // end page banner -->
    <!-- page -->
    <div class="page-area space-equal">
        <div class="container">
            <div class="row">
                <!-- blog posts -->
                <main class="main-layout col-12 col-lg-8">
                    <div class="page-body mr-lg-4">
                        <!-- single post -->
                        <article class="single-post">
                            <div class="post-image">
                                <img src="assets/img/posts/post-1.jpg" alt="post thumb">
                                <div class="post-date">
                                    <span>18 May</span>
                                    <span>2018</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h2><a href="blog-details.html">Designs covers for Specious Books and Others</a></h2>
                                <ul class="post-meta border-style">
                                    <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                    <li><i class="fas fa-comments"></i> <a href="#">17 Comments</a></li>
                                    <li><i class="fas fa-tags"></i> Tags <a href="#">Web</a>, <a href="#">Graphic</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, ex. Nisi saepe deserunt tenetur quo repudiandae nihil, provident doloribus esse quam cupiditate adipisci alias architecto delectus nam veniam optio minima quibusdam, dolor, quae eveniet ad voluptatibus itaque facere consequuntur odit?.</p>
                                <a href="blog-details.html" class="read-more color">Read More</a>
                            </div>
                        </article>
                        <!-- single post -->
                        <article class="single-post">
                            <!-- post image -->
                            <div class="post-image">
                                <img src="assets/img/posts/post-2.jpg" alt="post thumb">
                                <!-- post date -->
                                <div class="post-date">
                                    <span>14 Apr</span>
                                    <span>2018</span>
                                </div>
                            </div>
                            <!-- post content -->
                            <div class="post-content">
                                <h2><a href="blog-details.html">The dreaded phrase in design circles is.</a></h2>
                                <!-- post meta -->
                                <ul class="post-meta border-style">
                                    <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                    <li><i class="fas fa-comments"></i> <a href="#">12 Comments</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quae et consectetur asperiores, vero, ab quibusdam facere facilis nesciunt laboriosam harum voluptatem magnam recusandae adipisci ratione sed dicta earum perspiciatis.
                                </p>
                                <a href="blog-details.html" class="read-more color">Read More</a>
                            </div>
                        </article>
                        <!-- single post -->
                        <article class="single-post">
                            <!-- post image -->
                            <div class="post-image">
                                <img src="assets/img/posts/post-3.jpg" alt="post thumb">
                                <!-- post date -->
                                <div class="post-date">
                                    <span>10 Apr</span>
                                    <span>2018</span>
                                </div>
                            </div>
                            <!-- post content -->
                            <div class="post-content">
                                <h2><a href="blog-details.html">Recognizing the need is the primary condition.</a></h2>
                                <!-- post meta -->
                                <ul class="post-meta border-style">
                                    <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                    <li><i class="fas fa-comments"></i> <a href="#">9 Comments</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quae et consectetur asperiores, vero, ab quibusdam facere facilis nesciunt laboriosam harum voluptatem magnam recusandae adipisci ratione sed dicta earum perspiciatis.
                                </p>
                                <a href="blog-details.html" class="read-more color">Read More</a>
                            </div>
                        </article>
                        <!-- single post -->
                        <article class="single-post">
                            <!-- post image -->
                            <div class="post-image">
                                <img src="assets/img/posts/post-4.jpg" alt="post thumb">
                                <!-- post date -->
                                <div class="post-date">
                                    <span>13 May</span>
                                    <span>2018</span>
                                </div>
                            </div>
                            <!-- post content -->
                            <div class="post-content">
                                <h2><a href="blog-details.html">Everything is designed. Few things are.</a></h2>
                                <!-- post meta -->
                                <ul class="post-meta border-style">
                                    <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                    <li><i class="fas fa-comments"></i> <a href="#">07 Comments</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quae et consectetur asperiores, vero, ab quibusdam facere facilis nesciunt laboriosam harum voluptatem magnam recusandae adipisci ratione sed dicta earum perspiciatis.
                                </p>
                                <a href="blog-details.html" class="read-more color">Read More</a>
                            </div>
                        </article>
                        <!-- blog pagination -->
                        <div class="item-pagination wow fadeIn">
                            <div class="col-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- // end blog posts -->
                <!-- sidebar -->
                <aside class="sidebar col-12 col-lg-4">
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            <input type="search" name="s" placeholder="Search Here...">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <h2 class="border-style">About Us</h2>
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi non, officia enim cupiditate obcaecati ex rerum natus amet quibusdam, accusantium inventore, possimus esse quis, exercitationem!</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <h2 class="border-style">Recent Posts</h2>
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            <ul class="aside-post">
                                <!-- single post -->
                                <li>
                                    <a href="#"><img src="assets/img/posts/post-1.jpg" alt=""></a>
                                    <a href="#">
                                        <h2>Designs covers for Specious Books and Others</h2>
                                    </a>
                                    <!-- post meta -->
                                    <ul class="post-meta">
                                        <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                        <li><i class="fas fa-comments"></i> <a href="#">17 Comments</a></li>
                                    </ul>
                                </li>
                                <!-- single post -->
                                <li>
                                    <a href="#"><img src="assets/img/posts/post-2.jpg" alt=""></a>
                                    <a href="#">
                                        <h2>The dreaded phrase in design circles is.</h2>
                                    </a>
                                    <!-- post meta -->
                                    <ul class="post-meta">
                                        <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                        <li><i class="fas fa-comments"></i> <a href="#">09 Comments</a></li>
                                    </ul>
                                </li>
                                <!-- single post -->
                                <li>
                                    <a href="#"><img src="assets/img/posts/post-3.jpg" alt=""></a>
                                    <a href="#">
                                        <h2>Recognizing the need is the primary condition.</h2>
                                    </a>
                                    <!-- post meta -->
                                    <ul class="post-meta">
                                        <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                        <li><i class="fas fa-comments"></i> <a href="#">12 Comments</a></li>
                                    </ul>
                                </li>
                                <!-- single post -->
                                <li>
                                    <a href="#"><img src="assets/img/posts/post-4.jpg" alt=""></a>
                                    <a href="#">
                                        <h2>Everything is designed. Few things are.</h2>
                                    </a>
                                    <!-- post meta -->
                                    <ul class="post-meta">
                                        <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                        <li><i class="fas fa-comments"></i> <a href="#">07 Comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <h2 class="border-style">Categories</h2>
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            <ul class="aside-cat">
                                <li><a href="#">Onepage Fashion</a> <span class="float-right">15</span></li>
                                <li><a href="#">Home Page</a> <span class="float-right">13</span></li>
                                <li><a href="#">Functons</a> <span class="float-right">9</span></li>
                                <li><a href="#">Tutorials</a> <span class="float-right">14</span></li>
                                <li><a href="#">Post Options</a> <span class="float-right">17</span></li>
                                <li><a href="#">Laptop Pc</a> <span class="float-right">8</span></li>
                                <li><a href="#">Responsive</a> <span class="float-right">31</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <h2 class="border-style">Blog Tags</h2>
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            <ul class="aside-tags">
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Programing</a></li>
                                <li><a href="#">Font End</a></li>
                                <li><a href="#">Back End</a></li>
                                <li><a href="#">Responsive</a></li>
                                <li><a href="#">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <h2 class="border-style">Follow Us</h2>
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            <ul class="social aside-social">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- // end sidebar -->
            </div>
        </div>
    </div>
    <!-- // end page -->
@endsection
