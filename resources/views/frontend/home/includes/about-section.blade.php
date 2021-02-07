<section class="about-section space-equal" id="about">
    <div class="container">
        <div class="row">
            <!-- heading -->
            <div class="col-12 wow fadeInDown">
                <div class="heading justify-content-center">
                    <h2>{{ $section_title->about_title }}</h2>
                    <p>{{ $section_title->about_desc }}</p>
                </div>
            </div>
            <!-- // end heading -->
            <!-- about content -->
            <div class="d-flex flex-wrap w-100">
                <div class="col-12 col-lg-6">
                    <!-- about slider -->
                    <div class="about-images owl-carousel">
                        @foreach($about->images as $aboutImg)
                        <img src="{{ $aboutImg->url }}" alt="about">
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- about text -->
                    <div class="about-text">
                        <h3 class="mb-2">{{ $about->title }}</h3>
                        <h4>{{ $about->subtitle }}</h4>
                        <p>{{ $about->desc }}</p>
                        <a href="" class="main-btn main-btn2">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- // end about content -->
        </div>
    </div>
</section>
