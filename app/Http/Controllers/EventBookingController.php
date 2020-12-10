<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;
use App\User;
use App\Events;
use App\Booking;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;

class EventBookingController extends Controller
{


    Public function userEventBook(Request $request)
   {
      if ($request->isMethod('post'))
      {
           $this->validate($request,
           	[ 
           		'name'=>'required',
           		'phone'=>'required',
           		'date' => 'required',
           	]);

           $booking = new Booking;
           $booking->booked_by_name= $request->name;
           $booking->booked_by_email= $request->email;
           $booking->phone= $request->phone;
           $booking->date= $request->date;
           $booking->start_time = $request->start_time;
           $booking->end_time= $request->end_time;
           $booking->min_guest= $request->min_guest;
           $booking->max_guest= $request->max_guest;
           $booking->description= $request->note;
           $booking->event_id= $request->event_id;
           $booking->user_id = Auth::user()->id;

           $booking->save();
           
           return redirect()->back()->with('booking_event_success','Your booking will be confirmd via phone call. Thank you!');
         }
     }
}
