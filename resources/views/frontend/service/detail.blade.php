@extends('frontend.layouts.website')

@section('content')
    <!-- page banner -->
    <section class="single-banner d-flex align-items-center wow fadeIn">
        <div class="container">
            <div class="row">
                <!-- page banner content -->
                <div class="page-banner-content d-flex w-100">
                    <!-- page title -->
                    <h1>Service Details</h1>
                    <!-- bread-crumb -->
                    <ul class="bread-crumb">
                        <li><i class="fas fa-home"></i><a href="#">Home</a></li>
                        <li><a href="#">Service</a></li>
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
                <!-- sidebar -->
                <aside class="sidebar col-12 col-lg-4 order-1 order-lg-0">
                    <div class="mr-lg-4">
                        <!-- single sidebar -->
                        <div class="single-sidebar">
                            <h2 class="border-style">Other Services</h2>
                            <!-- sidebar box -->
                            <div class="sidebar-box">
                                <ul class="service-menu">
                                    <li class="active"><a href="#">Web Development</a></li>
                                    <li><a href="#">App Development</a></li>
                                    <li><a href="#">Logo & Identity</a></li>
                                    <li><a href="#">Graphics Design</a></li>
                                    <li><a href="#">Online Marketing</a></li>
                                    <li><a href="#">Secure Web</a></li>
                                </ul>
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
                                    <li><i class="fas fa-envelope"></i> <a href="https://themes.crazyenter.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb5b2bab39cb8b3b1bdb5b2f2bfb3b1">[email&#160;protected]</a></li>
                                    <li><i class="far fa-calendar"></i> Tusday-Monday : 10:00am-7:00pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- // end sidebar -->
                <!-- main layout -->
                <main class="main-layout col-12 col-lg-8">
                    <div class="page-body">
                        <div class="content-details">
                            <img src="assets/img/services.jpg" alt="portfolio">
                            <h2 class="border-style">Crazy Camera When Layla appears.</h2>
                            <p>Eorem rpsum dolor sit amet consectetur adipisicing elit. Saepe rerum in omnis dolorem aut magni dolorum totam obcaecati expedita ut! Totam, repudiandae? Officia aliquid voluptate doloremque accusantium? In cupiditate sit ab obcaecati. Quae itaque perferendis, laboriosam debitis sed id ab similique incidunt mollitia numquam perspiciatis inventore dolor, rerum tempora quisquam.</p>
                            <p>Yorem prsum dolor sit, amet consectetur adipisicing elit. Voluptate quos dolorum dicta magni iste atque laborum eligendi! Dpsum voluptatibus obcaecati dicta ducimus accusamus ipsa, eaque voluptates aut. Hic repellat dolores voluptate excepturi officiis, veniam, placeat enim explicabo, a nisi aliquam? A magni quis quaerat vel illo dolor, maxime sequi magnam? Voluptate nam, iusto sed exercitationem eius, quam neque dosoremque delectus numquam molestias repellendus commodi adipisci quae amet molestiae velit perspiciatis sunt minus maxime atque reprehenderit soluta nobis. Recusandae, quas voluptatum.</p>
                            <!-- content list -->
                            <div class="content-list">
                                <h3 class="border-style">Some more information about our serviecs.</h3>
                                <ul class="content-group">
                                    <li>Sorem Epsum dolor sit amet consectetur.</li>
                                    <li>Rdipisicing elit. Dolorum, nesciunt!</li>
                                    <li>Rorem issum dolor sit amet, consectetur.</li>
                                    <li>Obcaecati. Sint fugit sunt repudiandae tempore?</li>
                                    <li>Kdipisicing elit. Impedit explicabo est unde aut</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- // end main layout -->
            </div>
        </div>
    </div>
    <!-- // end page -->
@endsection
