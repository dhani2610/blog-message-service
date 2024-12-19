<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
               
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('home/img/logo/logo-new.png') }}" style="width: 100px;"  alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{ asset('home/img/hero/header_card.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="/"><img src="{{ asset('home/img/logo/logo-new.png') }}" style="width: 80px;" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Beranda</a></li>
                                            <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                                            <li><a href="{{ route('categories') }}">Kategori</a></li>

                                            @auth
                                                <li>
                                                    <a href="{{ route('dashboard') }}">
                                                        <i class="fas fa-sign-in-alt"></i> Dashboard
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        <i class="fas fa-sign-in-alt"></i> Login
                                                    </a>
                                                </li>
                                            @endauth
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
