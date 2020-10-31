@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<section class="page-header">
    <div class="container">
    	<h1>About us</h1>
    </div>
</section>
<section class="content">
    <div class="container">
        <div class="home-event">
            <div class="heading">
            	<div class="icon"><em class="icon icon-heading-icon"></em></div>
                <div class="text">
                    <h2>About</h2>
                </div>
                <div><h3 class="text-info">Welcome to Bd-Event-Booking-System</h3></div>
                <div class="stickLine"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                    	<p class="text-success">Our All Bd event planners are with to manage your event in proper-way.you can choose from event booking option easily.Our service agent will contact to you within 42 hours.You get amazing offer or bonous coupun in several time from new event planning.stay with us we always try to gives you Best services from our site.Thank you.</p>
                    </div>
                </div>
                <div class="heading">
	            	<div class="icon"><em class="icon icon-heading-icon"></em></div>
	                <div class="text">
	                    <h2>Contact info</h2>
	                </div>
	            </div>
                <div class="col-sm-4">
                    <div class="contact-box">
                        <div class="contactIcon">
                            <span class="icon icon-phone"></span>
                        </div>
                        <a href="telTo:4408007654321">+8802-765 4321</a>
                        <a href="telTo:44047856977145">+8802-478 5697</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-box">
                        <div class="contactIcon">
                        	<span class="icon icon-location-1"></span>
                        </div>
                    	<address>Bonani Dhaka,Head office.<br> Dhanmonddi,corporate office</address>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-box">
                        <div class="contactIcon">
                            <span class="icon icon-message"></span>
                        </div>
                        <span>Email - <a href="mailTo:info@eventplanning.com">info@eventbookingsystem.com</a></span>
                        <span>Website - <a href="#">@eventbookingsystem.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contackForm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<h2>Contact Form</h2>
            </div>
            <form class="has-validation-callback" action="" method="post">
                <div class="col-sm-6">
                	<div class="input-box">
                        <label>Your Name <sup>*</sup></label>
                        <input type="text" data-validation="required" data-validation-error-msg="Name cannot be blank." name="name">
                    </div>
                    <div class="input-box">
                        <label>Your Email <sup>*</sup></label>
                        <input type="text" data-validation="email" data-validation-error-msg="Incorrect e-mail address" name="email">
                    </div>
                    <div class="input-box">
                        <label>Subject <sup>*</sup></label>
                        <input type="text" data-validation="required" data-validation-error-msg="Subject cannot be blank." name="subject">
                    </div>
                </div>
                <div class="col-sm-6">
                	<div class="input-box">
                        <label>Your Message <sup>*</sup></label>
                        <textarea data-validation="required" data-validation-error-msg="Message cannot be blank." name="message"></textarea>
                    </div>
                    <input type="submit" class="btn" value="Submit">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
