@extends('frontend.layouts.website')

@section('content')
    <!-- page banner -->
    <section class="single-banner d-flex align-items-center wow fadeIn">
        <div class="container">
            <div class="row">
                <!-- page banner content -->
                <div class="page-banner-content d-flex w-100">
                    <!-- page title -->
                    <h1>Portfolio Details</h1>
                    <!-- bread-crumb -->
                    <ul class="bread-crumb">
                        <li><i class="fas fa-home"></i><a href="">Home</a></li>
                        <li><a href="">Portfolio</a></li>
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
                        <div class="content-details">
                            <img src="assets/img/portfolios/port-2.jpg" alt="portfolio">
                            <h2 class="border-style">Crazy Camera When Layla appears.</h2>
                            <p>Lowem ipssum dolor sit amet consectetur adipisicing elit. Saepe rerum in omnis dolsorem aut magni dolorum totam obcaecati expedita ut! Totam, repudiandae? Officia aliquid voluptate dolorwemque accusantium? In cupiditate sit obcaecati. Quae itaque perferendis, laboriosam debitis sed id ab similique incidunt mollitia numquam perspiciatis inventore dolor, rerum tempora quisquam.</p>
                            <p>Lortm ipwsum dolor sit, amet consectetur adipisicing elit. Voluptate quos dolorum dicta magni iste atque laborum eligendi! Iptsum voluptatibus obcaecati dicta ducimus accusamus ipsa, eaque voluptates aut. Hic repellat dolores voluptate excepturi officiis, veniam, placeat enim explicabo, a nisi aliquam? A magni quis quaerat vel illo dolor, maxime sequi magnam? Voluptate nam, iusto sed exercitationem eius, quam neque dolrremque delectus numquam molestias repellendus commodi adipisci quae amet molestiae velit perspiciatis sunt minus maxime atque reprehenderit soluta nobis. Recusandae, quas voluptatum.</p>
                        </div>
                    </div>
                </main>
                <!-- sidebar -->
                <aside class="sidebar col-12 col-lg-4">
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <h2 class="border-style">Project Details</h2>
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            <div class="project-info">
                                <span><strong>Client: </strong> Daniel Evans</span>
                                <span><strong>Delivery Date: </strong> 22 May 2018</span>
                                <span><strong>Location: </strong> 452 Holly Lane Hopewell, VA 23860</span>
                                <a href="" class="main-btn main-btn2">Live Preview</a>
                            </div>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <h2 class="border-style">Client Review</h2>
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            Lrrem, ipsjum dolor sit amet consectetur adipisicing elit. Quam iusto doloribus excepturi fuga obcaecati vero reprehenderit fugit, itaque dicta omnis voluptate accusantium assumenda repellendus facilis necessitatibus ducimus maxime eius ullam!
                            <div class="client">
                                <h3>Steven Collins</h3>
                                <span>CEO and Founder at <a class="color" href="" target="_blank">domain.com</a></span>
                            </div>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="single-sidebar">
                        <h2 class="border-style">Our Contact Address</h2>
                        <!-- sidebar box -->
                        <div class="sidebar-box">
                            <ul class="contact-info">
                                <li><i class="fas fa-map-marker"></i> No.400 A sample address database for Orlando, Florida</li>
                                <li><i class="fas fa-phone"></i> (+8801) 99997577</li>
                                <li><i class="fas fa-envelope"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="21484f474e61454e4c40484f0f424e4c">[email&#160;protected]</a></li>
                                <li><i class="far fa-calendar"></i> Tusday-Monday : 10:00am-7:00pm</li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- // end page -->
@endsection
