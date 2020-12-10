<?php

namespace App\Http\Controllers\Backend;

use Auth;
use validator;
use App\Admin;
use App\Blogs;
use Illuminate\support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function addBlog(Request $request)
    {
        if ($request->isMethod('post')) 
        {
          $this->validate($request,[
          'title' => 'required',
          'image' => 'required|mimes:jpeg,jpg,png,gif',]);

            $blog = new Blogs;
            $blog->title = $request->title;
            $blog->sub_title = $request->sub_title;
            $blog->description = $request->editor1;
            $blog->posted_by_id = Auth::user()->id;
            

            if ($request->hasFile('image')) {
                $dir = 'images/blog/';
                $extension = strtolower($request->file('image')->getClientOriginalExtension()); 
                $fileName = str::random() . '.' . $extension; 
                $request->file('image')->move($dir, $fileName);
                $blog->image = $fileName;
            }
            
            $blog->save();
            return redirect(route('admin.add-blog'))->with('add_blog_flash_success','Successfully addeded');
        }
        return view('Backend.add_new_blog');
     }


   public function showBlog()
   {
       $blog = Blogs::all();
       return view('Backend.show_blog_list')->with(compact('blog'));

   }

   public function editBlog(Request $request,$id)
   {

       $blog = Blogs::find($id);

        if ($request->isMethod('post')) 

        {
            $this->validate($request,[
                'title' => 'required',
            ]);
            $blog->title = $request->title;
            $blog->sub_title = $request->sub_title;
            $blog->description = $request->editor1;
            $blog->posted_by_id = Auth::user()->id;


            if ($request->hasFile('image')) 
            {
                $dir = 'images/blog/';
                if (!empty($blog->image)) {
                    unlink($dir.$blog->image );
                }
                $extension = strtolower($request->file('image')->getClientOriginalExtension()); 
                $fileName = str_random() . '.' . $extension; 
                $request->file('image')->move($dir, $fileName);
                $blog->image = $fileName;
            }
            $blog->save();
            return redirect()->back()->with('upadte_blog_flash_success','Successfully updated');
        }
        return view('Backend.edit_blog')->with(compact('blog'));

   }


  public function deleteBlog($id=null)
    {
        if (!empty($id)) {
            $data = Blogs::FindOrFail($id);
            if (!empty($data->image)) {
                unlink('images/blog/'.$data->image);
            }
            Blogs::find($id)->delete();
            return redirect()->back()->with('delete_blog_flash_success','Blog successfully deleted');
        }
        
    }

}

