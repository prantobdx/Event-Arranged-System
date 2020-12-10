<?php

namespace App\Http\Controllers\Backend;

use Auth;
use Validator;
use App\Admin;
use App\Events;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function showEventPostForm(Request $request)
    {
        if ($request->isMethod('post')) 
        {
            $this->validate($request,[
                'category_name' => 'required',
                'title' => 'required',
                'location'=>'required',
                'contact' => 'required',
                'email' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:2024',
            ]);
           
            $event = new Events;
            $event->category_name = $request->category_name;
            $event->title = $request->title;
            $event->sub_title = $request->sub_title;
            $event->location = $request->location;
            $event->contact = $request->contact;
            $event->email = $request->email;
            $event->description = $request->description;
            

             if ($request->hasFile('image')) 
             {   
                $dir = 'images/events/';
                $extension = strtolower($request->file('image')->getClientOriginalExtension()); 
                $fileName = str::random() . '.' . $extension; 
                $request->file('image')->move($dir, $fileName);
                $event->image = $fileName;
            }
            
            $event->save();
            return redirect(route('admin.add-event'))->with('add_event_flash_success','Successfully addeded');
        }

        return view('Backend.add_new_event');
    }
    	
 
//...........................................
    public function showEventList()
    {
        $event_post = Events::all();
        return view('Backend.show_events')->with(compact('event_post'));
    }
   
  //...........................................
public function EditEventPost(Request $request,$id)

  {    
        $event = Events::find($id);
 
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'category_name' => 'required',
                'title' => 'required',
                'contact' => 'required',
                'email' => 'required',
               'image'=>'required|mimes:jpeg,jpg,png,gif|max:2024',
            ]);
          
            $event->category_name = $request->category_name;
            $event->title = $request->title;
            $event->sub_title = $request->sub_title;
            $event->location = $request->location;
            $event->contact = $request->contact;
            $event->email = $request->email;
            $event->description = $request->description;
            

             if ($request->hasFile('image')) {
                
                $dir = 'images/events/';
                $extension = strtolower($request->file('image')->getClientOriginalExtension()); 
                $fileName = str::random() . '.' . $extension;
                $request->file('image')->move($dir, $fileName);
                $event->image = $fileName;
            }
            
            $event->save();

            return redirect()->back()->with('upadte_event_flash_success','Successfully updated');
        }
        return view('Backend.edit_event')->with(compact('event'));
    } 
//..................................................................

    public function deleteEvent($id=null)
{
    if (!empty($id)) {
        $data = Events::FindOrFail($id);
        if (!empty($data->image))
         {
           unlink('images/events/'.$data->image);
         } 
        Events::find($id)->delete();
        return redirect()->back()->with('delete_event_flash_success','event successfully deleted');
         } 
} 


}
