@extends('main')

@section('title', '| Homepage')

@section('content')
<div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="image/bg.png" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    
                                    <h4>PCINU Taiwan</h4>
                                    <h5>台北市印尼服務交流協會</h5>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Spread Islam on Formosan Island. Being a bridge for Taiwan and Indonesia. Together, achieve benefits and blessings for the people.</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="not_found" class="btn gradient-bg mr-2">Register KartaNU</a>
                                    <a href="https://www.youtube.com/channel/UCQjjgkrNEjK5aC8peSm4V9A" class="btn gradient-bg mr-2">Watch Youtube</a>
                                    
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->

    <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="image/lazis.png" alt="">
                            <img src="image/lazis.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Help Each Other</h3>
                        </header>

                        <div class="entry-content">
                            <p>Give aid to fellow Muslims in Taiwan, disaster relief in Indonesia, and various educational and humanitarian programs through LAZISNU Taiwan.
                            </p>
                        </div>
                        <br />
                        <a href="not_found" class="btn orange-border">Learn</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="image/cabang.png" alt="">
                            <img src="image/cabang.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Map of Ranting NU</h3>
                        </header>

                        <div class="entry-content">
                            <p>Inform about the distribution of NU branches throughout Taiwan. Make it easy for you to visit and greet with nahdiyin residents throughout Taiwan.
                            </p>
                        </div>
                        <br />
                        <a href="not_found" class="btn orange-border">See</a>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="image/onair.png" alt="">
                            <img src="image/onair.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Ngaji On Air</h3>
                        </header>

                        <div class="entry-content">
                            <p>Join and enjoy various online courses about Islam through Taiwan's NU Channel. Gaining knowledge to the many credibel teachers from Indonesia.
                            </p>
                        </div>
                        <br />
                        <a href="not_found" class="btn orange-border">Join</a>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Build Islamic Center</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <p>A mission to build a mosque and Islamic Center in Taipei to facilitate Islamic activities in Taiwan. We also dream of a place that could become
                             shelter for Indonesian citizens.</p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="not_found" class="btn gradient-bg mr-2">Support Us</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="image/islamic.png" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-2 mt-2 mt-lg-0">
                    <div class="icon-box">
                        <a href="not_found">
                            <figure class="d-flex justify-content-center">
                            <img src="image/lg1.png" alt="">
                            <img src="image/lg1.png" alt="">
                        </figure>
                        </a>

                        <header class="entry-header">
                            BANSER Taiwan
                        </header>
                    </div>
                </div>

                 <div class="col-12 col-md-6 col-lg-2 mt-2 mt-lg-0">
                    <div class="icon-box">
                        <a href="not_found">
                        <figure class="d-flex justify-content-center">
                            <img src="image/lg4.png" alt="">
                            <img src="image/lg4.png" alt="">
                        </figure>
                        </a>

                        <header class="entry-header">
                            MUSLIMAT Taiwan
                        </header>
                    </div>
                </div>

                 <div class="col-12 col-md-6 col-lg-2 mt-2 mt-lg-0">
                    <div class="icon-box">
                        <a href="not_found">
                            <figure class="d-flex justify-content-center">
                            <img src="image/lg2.png" alt="">
                            <img src="image/lg2.png" alt="">
                        </figure>
                        </a>

                        <header class="entry-header">
                            FATAYAT Taiwan
                        </header>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2 mt-2 mt-lg-0">
                    <div class="icon-box">
                        <a href="not_found">
                        <figure class="d-flex justify-content-center">
                            <img src="image/lg3.png" alt="">
                            <img src="image/lg3.png" alt="">
                        </figure>
                        </a>

                        <header class="entry-header">
                            IPNU / IPPNU 
                        </header>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2 mt-2 mt-lg-0">
                    <div class="icon-box">
                        <a href="not_found">
                        <figure class="d-flex justify-content-center">
                            <img src="image/lg5.png" alt="">
                            <img src="image/lg5.png" alt="">
                        </figure>
                        </a>

                        <header class="entry-header">
                            Pagar Nusa
                        </header>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2 mt-2 mt-lg-0">
                    <div class="icon-box">
                        <a href="not_found">
                        <figure class="d-flex justify-content-center">
                            <img src="image/lg6.png" alt="">
                            <img src="image/lg6.png" alt="">
                        </figure>
                        </a>

                        <header class="entry-header">
                            LAZIS Taiwan
                        </header>

                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h2 class="entry-title">Next Event</h2>
                        </div><!-- .section-heading -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="image/asian.png" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0">Asian Cooking X Sincung X PCINU</h3>

                                    <div class="posted-date">
                                        7 Juni, 2020
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        Aula PCINU Taiwan
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">PCINU event with Asian Cooking and Sincung </p>
                                </div><!-- .entry-content -->

                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

                        

                        
                    </div><!-- .upcoming-events -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h2 class="entry-title">Eid Al-Fitr Prayers 2020 at Taipei Travel Plaza</h2>
                        </div><!-- .section-heading -->

                        <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="image/ied.png" alt="">
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0">Related Coverage</h3>

                                    
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <a href="https://nu.or.id/post/read/120386/saat-perayaan-idul-fitri-muslim-indonesia-di-inggris--malaysia--dan-taiwan">
                                        Nu Online - Saat Perayaan Idul Fitri di Taiwan ... 
                                    </a> <br />

                                    <a href="https://news.tvbs.com.tw/amp/life/1328783">
                                        開齋節祈禱活動　配合防疫戴口罩不逗留
                                    </a><br />

                                    <a href="https://www.antaranews.com/berita/1511685/pcinu-gwo-taiwan-gelar-shalat-id-wni-membeludak-terkendali">
                                        Antara News - PCINU dan GWO Gelar Sholat Ied ...
                                    </a><br />

                                    <a href="https://news.ltn.com.tw/news/life/breakingnews/3175883">
                                        台灣防疫佳開齋節照辦 伊斯蘭移工感動中祈禱
                                    </a><br />

                                </div><!-- .entry-content -->

                                
                            </div><!-- .cause-content-wrap -->

                            
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->



    <div class="our-causes">
        <div class="container">
            <div class="row" >
                <div class="coL-12" >
                    <div class="section-heading" >
                        <h2 class="entry-title" >Latest News</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="image/zakat.png" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="lazis_zakat" class="btn gradient-bg mr-2">Read More</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="lazis_zakat">Social Media, Strategic Key to Increasing Zakat Acquisition in Taiwan</a></h3>
                                        </header><!-- .entry-header -->

                                        
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            
                        </div><!-- .swiper-wrapper -->

                    </div><!-- .swiper-container -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

    
        
@stop