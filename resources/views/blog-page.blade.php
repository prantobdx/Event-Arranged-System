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
                        <div class="blog-info">
                            <h2>Lets See our mest popular events</h2>
                            <div class="sub-title"> We always with you 
                            </div>
                            
                         <div class="youtube">
                           <iframe width="720" height="380" src="https://www.youtube.com/embed/oPAGje5dFRE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </div>
                            
                            <div class="outher-link">
                                <ul>
                                    <li>It is just one of the events
                                     example</li>
                                </ul>
                            </div>
                            <!-- <p></p> -->
                        </div></div>  



                    @foreach($blog as $blog)
                    <div class="blog-slide">
                        <div class="date-view">
                            <div class="date">{{date('d', strtotime($blog->created_at))}}</div>
                            <div class="year">{{date('F,y', strtotime($blog->created_at))}}</div>
                        </div>
                        <div class="blog-info">
                            <h2>{{$blog->title}}</h2>
                            <div class="sub-title">{{$blog->sub_title}}</div>
                            <div class="img"><img src="../images/blog/{{$blog->image}}" alt=""></div>
                            <div class="outher-link">
                                <ul>

                                   <li><a href="#"> <i class="icon icon-heart"></i> </a></li>

                                    <li><a href="#"><span class="icon icon-comment"></span></a></li>

                                <li><a href="#"><i class="icon icon-user"> 
                                 </i> </a></li>    
                                </ul>
                                <p>{!!$blog->description!!}</p> 
                               </div>
                        </div>
                    </div>
                    @endforeach    
                </div>




                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="right-blog">
                        <div class="popular-post">
                            <h3>Event Categories</h3>
                            @foreach(App\Events::orderBy('id', 'desc')->limit(6)->get() as $event)
                            <div class="post-slide">
                                <div class="img"><img src="images/events/{{$event->image}}" alt=""></div>

                                <div class="post-name"> <a href="{{ url('event-details',$event->id) }}" > {{ $event->category_name }} </a> </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
