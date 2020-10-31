@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="blog-banner">
    <img src="{{ asset('frontend/images/banner-img/blog-bannerImg.jpg') }}" alt="">
    <div class="text">
        <h1>Our <span>Blogs</span></h1>
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="blog-page">
            <div class="row">   
                <div class="col-sm-8 col-md-9 col-lg-9">
                
                    <div class="blog-slide">
                        <div class="date-view">
                            <div class="date">Oct</div>
                            <div class="year">2020</div>
                        </div>
                        <div class="blog-info">
                            <h2>Our experice with live image </h2>
                            <div class="sub-title">Marrige Managemt Organiztion</div>
                            <div class="img"><img src="{{ asset('frontend/images/blog-img/blog-img6.jpg') }}" alt=""></div>
                            <div class="outher-link">
                                <ul>
                                    <li><a href="#"><span class="icon icon-calander-check"></span></a></li>
                                    <li><a href="#"><span class="icon icon-user"></span></a></li>
                                    <li><a href=""><span class="icon icon-comment"></span>Comment</a></li>
                                </ul>
                            </div>
                            <!-- <p></p> -->
                            <a href="" class="btn">Read More</a>
                        </div>
                    </div>


                     <div class="blog-slide">
                        <div class="date-view">
                            <div class="date">July</div>
                            <div class="year">2020</div>
                        </div>
                        <div class="blog-info">
                            <h2>This is the one of the birthday moment </h2>
                            <div class="sub-title">Welcome To organize your birthday</div>
                            <div class="img"><img src="{{ asset('frontend/images/event-img/event-img3.jpg') }}" alt=""></div>
                            <div class="outher-link">
                                <ul>
                                    <li><a href="#"><span class="icon icon-calander-check"></span></a></li>
                                    <li><a href="#"><span class="icon icon-user"></span></a></li>

                                    <li><a href=""><span class="icon icon-comment"></span>Comment</a></li>
                                </ul>
                            </div>
                            <!-- <p></p> -->
                            <a href="" class="btn">Read More</a>
                        </div>
                    </div>







                   
                    <div class="blog-slide">
                        
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="right-blog">
                    <div class="popular-post">
                        <h3>Event Categories</h3>
            
                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/event-img/story-img2.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>

                        <div class="post-slide">
                            <div class="img"><img src="{{ asset('frontend/images/event-img/story-img1.jpg') }}" alt=""></div>
                            <div class="post-name"><a href=""> </a></div>
                        </div>
                        
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
