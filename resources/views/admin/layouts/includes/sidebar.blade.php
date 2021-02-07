<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">{{ config('app.name', 'Company_v1.0') }}</h1>
            <p>{{ Auth::user()->name }}</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus-->
    <ul class="list-unstyled">
        <!-- Dashboard -->
        <li class="active">
            <a href="{{ route('dashboard') }}">
                <i class="icon-dashboard"></i>Dashboard
            </a>
        </li>
        <!-- Service -->
        <li class="">
            <a href="index.html">
                <i class="icon-controls"></i>Service
            </a>
        </li>
        <!-- Portfolio -->
        <li class="">
            <a href="index.html">
                <i class="icon-presentation"></i>Portfolio
            </a>
        </li>
        <!-- Team -->
        <li class="">
            <a href="index.html">
                <i class="icon-list"></i>Team
            </a>
        </li>
        <!-- Testimonial -->
        <li class="">
            <a href="index.html">
                <i class="icon-light-bulb"></i>Testimonial
            </a>
        </li>
        <!-- Blog -->
        <li class="">
            <a href="index.html">
                <i class="icon-paper-and-pencil"></i>Blog
            </a>
        </li>
        <!-- Front Page -->
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-picture"></i>Front Page </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Banner</a></li>
                <li><a href="{{ route('abouts.index') }}">About</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Text</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </li>
    </ul>
</nav>
