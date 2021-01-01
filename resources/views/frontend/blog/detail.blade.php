@extends('frontend.layouts.website')

@section('content')
    <!-- page banner -->
    <section class="single-banner d-flex align-items-center wow fadeIn">
        <div class="container">
            <div class="row">
                <!-- page banner content -->
                <div class="page-banner-content d-flex w-100">
                    <!-- page title -->
                    <h1>Post Details</h1>
                    <!-- bread-crumb -->
                    <ul class="bread-crumb">
                        <li><i class="fas fa-home"></i><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li>Details</li>
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
                        <article class="post-details">
                            <div class="post-image">
                                <img src="assets/img/posts/post-1.jpg" alt="post thumb">
                            </div>
                            <!-- post content -->
                            <div class="post-content">
                                <h2>Designs covers for Specious Books and Others</h2>
                                <ul class="post-meta border-style">
                                    <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                    <li><i class="fas fa-comments"></i> <a href="#">17 Comments</a></li>
                                    <li><i class="fas fa-tags"></i> Tags <a href="#">Web</a>, <a href="#">Graphic</a></li>
                                </ul>
                                <p>Hello world! This is new version of onepager theme. Tdolor ssit amet consectetur adipisicing elit. Aperiam rerum iepsum, sequi officia iste odit quae. Assumenda, nobis enim hic veniam consequatur recusandae consequuntur reprehenderit ducimus in, suscipit perspiciatis, rerum ad cupiditate corrupti aspernatur dolorum est unde architecto? Omnis, aliquid tempora! Eligendi itaque neque esse fuga, nulla nihil obcaecati, ullam voluptatibus atque modi consequuntur. Saepe soluta beatae, excepturi cum sapiente enim ratione delectus provident animi dolore totam in eligendi rpsum eum culpa repellendus quos! Quidem facere commodi sequi facilis maiores? Nobis aspernatur distinctio accusamus corrupti nam provident nisi inventore tempora ut! Unde tempora facere quasi provident! Animi expedita unde delectus.</p>
                                <blockquote class="grey-bgc border-color">
                                    Special offer eit asmet consectetur adipisicing selit. Temporibus masxime voluptate dolor, ipsa voluptates iure reiciendis deleniti quis reprehenderit facilis ratione pariatur amet tempora veritatis aut omniss, neque repellsat perferendis.
                                </blockquote>
                                <p>New blog post details page. Eipssum dolohr ssit amnet conssectetur adipisicing elit. Repellendus delectus doslorum ipadfsam quibusdam dolsdor molestias excepturi. Aut nihil vero nisi, eius optio cumque distinctio beatae in fugit, autem ulslam ducimus tempore fuga veritatis asperiores dolore voluptates error debitis, nemo ab doloribus. Officiis distinctio necessitatibus sit eos dolor debitis reiciendis sunt quae ipsam soluta quibusdam iusto, iure neque veritatis, in laudantium id consectetur. Praesentium cumque vel maisdfores incidunt non modi ducimus possimus epsum officiis suscipit, ea esse amet ipsam, aspernatur aperiam?</p>
                            </div>
                            <!-- // end post content -->
                            <!-- share post -->
                            <div class="share-post grey-bgc d-flex align-items-center justify-content-between mb-5 mt-5">
                                <h3 class="border-style">Social Share</h3>
                                <ul class="social-share">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <!-- // end share post -->
                            <!-- post author -->
                            <div class="post-author grey-bgc mb-5 wow fadeIn">
                                <img src="assets/img/avater/member-1.jpg" alt="author">
                                <h3><a href="#">Tomas Warner</a></h3>
                                <p>Udayon theme sdolor sirt aamet, consectetur adipisicing elit. Quis seqsui dignissimos, assumenda neque deleniti saepe, vero ad nisi soluta cum. consectetur adipisicing elit. Quis sequi dignissimos, assumenda neque deleniti saepe, vero ad nisi soluta cum.</p>
                            </div>
                            <!-- // end post author -->
                            <!-- single navigation -->
                            <div class="single-navigation grey-bgc mb-5">
                                <div class="single-prev">Previews Post
                                    <a href="#" rel="prev">
                                        <h4>The dreaded phrase in design </h4>
                                    </a>
                                </div>
                                <div class="single-next">Next Post
                                    <a href="#" rel="next">
                                        <h4>Recognizing the need is the primary </h4>
                                    </a>
                                </div>
                            </div>
                            <!-- // end single navigation -->
                            <!-- more post -->
                            <div class="more-posts mb-5">
                                <h3 class="details-title border-style">You may like also</h3>
                                <div class="row">
                                    <!-- single post -->
                                    <div class="col-12 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                                        <!-- post image -->
                                        <div class="post-image">
                                            <img src="assets/img/posts/post-2.jpg" alt="post thumb">
                                        </div>
                                        <!-- post content -->
                                        <div class="post-content">
                                            <h2><a href="#">The dreaded phrase in design circles is.</a></h2>
                                            <!-- post meta -->
                                            <ul class="post-meta">
                                                <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                                <li><i class="fas fa-comments"></i> <a href="#">12 Comments</a></li>
                                            </ul>
                                            <a href="#" class="read-more color">Read More</a>
                                        </div>
                                    </div>
                                    <!-- single post -->
                                    <div class="col-12 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                        <!-- post image -->
                                        <div class="post-image">
                                            <img src="assets/img/posts/post-3.jpg" alt="post thumb">
                                        </div>
                                        <!-- post content -->
                                        <div class="post-content">
                                            <h2><a href="#">Recognizing the need is the primary condition.</a></h2>
                                            <!-- post meta -->
                                            <ul class="post-meta">
                                                <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                                <li><i class="fas fa-comments"></i> <a href="#">9 Comments</a></li>
                                            </ul>
                                            <a href="#" class="read-more color">Read More</a>
                                        </div>
                                    </div>
                                    <!-- single post -->
                                    <div class="col-12 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                                        <!-- post image -->
                                        <div class="post-image">
                                            <img src="assets/img/posts/post-4.jpg" alt="post thumb">
                                        </div>
                                        <!-- post content -->
                                        <div class="post-content">
                                            <h2><a href="#">Everything is designed. Few things are.</a></h2>
                                            <!-- post meta -->
                                            <ul class="post-meta">
                                                <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                                <li><i class="fas fa-comments"></i> <a href="#">07 Comments</a></li>
                                            </ul>
                                            <a href="#" class="read-more color">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- comment list -->
                            <div class="comment-list mb-5">
                                <h3 class="details-title border-style">Write a comment</h3>
                                <ul>
                                    <!-- single comment -->
                                    <li class="single-comment">
                                        <img src="assets/img/avater/member-2.jpg" alt="comment author">
                                        <div class="commenter-text">
                                            <a href="#">
                                                <h3>Elizabeth Gonzalez</h3>
                                            </a>
                                            <span>22 May 2018</span>
                                            <p>Spsum dolor sit amet, <a href="#" class="color">Rorem iwsum</a> dolor sit amet, Worem iptum dolor sit amet, consectetur adipisicing elit. Cum enim quia vitae sapiente voluptate! Itaque. Sum enim quia vitae sapiente voluptate! Itaque.</p>
                                            <a href="#" class="comment-reply"><i class="fas fa-reply"></i> Reply</a>
                                        </div>
                                    </li>
                                    <!-- single comment -->
                                    <li class="single-comment">
                                        <img src="assets/img/avater/member-3.jpg" alt="comment author">
                                        <div class="commenter-text">
                                            <a href="#">
                                                <h3>Paul Phillips</h3>
                                            </a>
                                            <span>23 May 2018</span>
                                            <p>Spsum dolor sit amet, dolor sit amet, Horem epsum dolor sit amet, consectetur adipisicing elit. Cum enim quia vitae sapiente voluptate! Itaque.</p>
                                            <a href="#" class="comment-reply"><i class="fas fa-reply"></i> Reply</a>
                                        </div>
                                    </li>
                                    <!-- single comment -->
                                    <li class="single-comment">
                                        <ul class="comment-reply-box">
                                            <li class="single-comment">
                                                <img src="assets/img/avater/member-4.jpg" alt="comment author">
                                                <div class="commenter-text">
                                                    <a href="#">
                                                        <h3>Betty Collins</h3>
                                                    </a>
                                                    <span>23 May 2018</span>
                                                    <p>Spsum dolor sit amet, dolor sit amet, Torem tpsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <a href="#" class="comment-reply"><i class="fas fa-reply"></i> Reply</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- single comment -->
                                    <li class="single-comment">
                                        <img src="assets/img/avater/member-5.jpg" alt="comment author">
                                        <div class="commenter-text">
                                            <a href="#">
                                                <h3>Patricia Mitchell</h3>
                                            </a>
                                            <span>23 May 2018</span>
                                            <p>Spsum dolor sit amet, <a href="#" class="color">Norem iusum</a> dolor sit amet, Forem ipssum dolor sit amet, consectetur adipisicing elit. Cum enim quia vitae sapiente voluptate! Itaque. Sum enim</p>
                                            <a href="#" class="comment-reply"><i class="fas fa-reply"></i> Reply</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- // end comment list -->
                            <!-- comment box -->
                            <div class="comment-box wow fadeIn">
                                <h3 class="details-title border-style">Write a comment</h3>
                                <form class="row">
                                    <div class="form-group col-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group col-12 col-lg-6">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="url" class="form-control" placeholder="Website">
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea class="form-control" placeholder="Write Comment"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="main-btn main-btn2">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- // end comment box -->
                        </article>
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
                            <p>Eorem tpsum dolor sit amet, consectetur adipisicing elit. Quasi non, officia enim cupiditate obcaecati ex rerum natus amet quibusdam, accusantium inventore, possimus esse quis, exercitationem!</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <h2 class="border-style">Recent Posts</h2>
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            <ul class="aside-post">
                                <li>
                                    <a href="#"><img src="assets/img/posts/post-1.jpg" alt=""></a>
                                    <a href="#"><h2>Designs covers for Specious Books and Others</h2></a>
                                    <ul class="post-meta">
                                        <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                        <li><i class="fas fa-comments"></i> <a href="#">17 Comments</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/posts/post-2.jpg" alt=""></a>
                                    <a href="#"><h2>The dreaded phrase in design circles is.</h2></a>
                                    <ul class="post-meta">
                                        <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                        <li><i class="fas fa-comments"></i> <a href="#">09 Comments</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/posts/post-3.jpg" alt=""></a>
                                    <a href="#"><h2>Recognizing the need is the primary condition.</h2></a>
                                    <ul class="post-meta">
                                        <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
                                        <li><i class="fas fa-comments"></i> <a href="#">12 Comments</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/posts/post-4.jpg" alt=""></a>
                                    <a href="#"><h2>Everything is designed. Few things are.</h2></a>
                                    <ul class="post-meta">
                                        <li><i class="fas fa-user"></i> By <a href="#">admin</a></li>
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
