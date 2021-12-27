<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Language;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $galleries = Gallery::all()->groupBy('lang');
        $all_language = Language::all();
        return view('backend.pages.home.gallery')->with(['galleries' => $galleries,'all_language' => $all_language]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required|string|max:191',
            'description' => 'required|string',
            'image' => 'mimes:jpg,jpeg,png|max:5064',
            'lang' => 'required|string|max:191'
        ]);

        $id = Gallery::create($request->all())->id;

        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'gallery-image-'.$id.'.' . $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/gallery-images/', $image_name);
                Gallery::find($id)->update(['image' => $image_extenstion]);
            }
        }

        return redirect()->back()->with(['msg' => 'Added new item in image gallery...','type' => 'success']);
    }

    public function update(Request $request){

        $this->validate($request,[
            'title' => 'required|string|max:191',
            'description' => 'required|string',
            'image' => 'mimes:jpg,jpeg,png|max:5064',
            'lang' => 'required|string|max:191'
        ]);

        Gallery::find($request->id)->update($request->all());
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'gallery-image-'.$request->id.'.' . $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/gallery-images/', $image_name);
                Gallery::find($request->id)->update(['image' => $image_extenstion]);
            }
        }
        return redirect()->back()->with(['msg' => 'Header Slider Updated...','type' => 'success']);
    }

    public function delete($id){
        $brand = Gallery::find($id);
        if (file_exists('assets/uploads/gallery-images/gallery-image-'.$id.'.'.$brand->image)){
            unlink('assets/uploads/gallery-images/gallery-image-'.$id.'.'.$brand->image);
        }
        $brand->delete();
        return redirect()->back()->with(['msg' => 'Delete Success...','type' => 'danger']);
    }
}
