@extends('layouts.app')
@section('content')

<section class="banner">
    <div class="carousel" id="mainBnner">
        <div class="item"><img src="{{ asset('frontend/images/banner-img/slider-img.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('frontend/images/banner-img/slider-img2.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ asset('frontend/images/banner-img/slider-img3.jpg') }}" alt=""></div>
    </div>
    <div class="banner-nav">
        <div class="prev"><span class="icon icon-arrow-left"></span></div>
        <div class="next"><span class="icon icon-arrow-right"></span></div>
    </div>
    <div class="banner-text">
    </br>
    <div class="search-title">
        <h1 style="color:yellow"> Every <span>Event</span> Should be  <span>Perfect</span></h1>
    </div>

    <div class="container">
    </div>
</div>
</section>
<section class="service-type">
    <div class="container">
        <div class="heading">
            <div class="icon"><em class="icon icon-heading-icon"></em></div>
            <div class="text">
                <h2>Our Services</h2>
            </div>
            <div class="info-text">We Organize All Events Carefully.</div>
                       
                </div>
            </div> 

        </div>
     </div>
</section>
<section class="content">
    <div class="container">
        <div class="home-event">
            <div class="heading">
                <div class="icon"><em class="icon icon-heading-icon"></em></div>
                <div class="text">
                    <h2>Recent Events</h2>
                </div>
                <div class="info-text">Here You will Find all New Event details.Just click and know about the event as your requirement</div>
            </div>
            <div class="row">
                <div class="event-slider">

                    <div class="item">
                        <div class="event-box">
                            <div class="img">
                                <a href="{{ url('event-details') }}">
                                    <img src="{{asset('frontend/images/event-img/story-img3.jpg')}}" alt="">
                            <p> Oragnized Conference </p></a></div>
                            <button class="btn btn-primary btn-sm " href="{{ url('event-details') }}"> ReadMore
                              </button></div></div>

                            <div class="item">
                        <div class="event-box">
                            <div class="img">
                                <a href="{{ url('event-details') }}">
                                    <img src="{{asset('frontend/images/event-img/story-img1.jpg')}}" alt="">
                            <p> Birthday </p> </a> </div>
                             <button class="btn btn-primary btn-sm" href="{{ url('event-details') }}"> ReadMore
                              </button> </div></div>
              
                                
                        <div class="item">
                        <div class="event-box">
                            <div class="img">
                                <a href="{{ url('event-details') }}">
                                    <img src="{{asset('frontend/images/event-img/story-img6.jpg')}}" alt="">
                                 <p> Wedding day </p> </a> </div>
                                  <button class="btn btn-primary btn-sm" href="{{ url('event-details') }}"> ReadMore
                              </button></div></div>
                      </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
