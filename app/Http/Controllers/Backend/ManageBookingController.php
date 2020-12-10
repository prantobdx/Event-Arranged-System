<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use validator;
use App\Admin;
Use App\Booking;
Use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class ManageBookingController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

	public function showBookingList($id=null)
	{
		$bookings= Booking::get();

        if(!empty($id))
        {
        	$book = Booking::find($id);
        	$book->status = 1;
        	$book->save();
        	return redirect()->back()->with('booking_flash_success','successfully approved',compact('bookings'));
        }
	   return view('Backend.show_booking_list')->with(compact('bookings'));
	}

	public function deleteBooking($id=null)
    {
        if (!empty($id)) 
        {
            Booking::find($id)->delete();
            return redirect()->back()->with('delete_booking_flash_success','Booking request successfully deleted');
        }
     }   




}
