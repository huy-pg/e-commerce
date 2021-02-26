<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Symfony\Component\HttpFoundation\Response;

use Illuminate\Http\Request;
use App\ImageGallery;
use App\Product;
use Image;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputData=$request->all();
        if($request->file('image')){
            $images=$request->file('image');
            foreach ($images as $image){
                if($image->isValid()){
                    $extension=$image->getClientOriginalExtension();
                    $filename=rand(100,999999).time().'.'.$extension;
                    $image_path=public_path('products/'.$filename);
                 
                    //// Resize Images
                    Image::make($image)->save($image_path);
                   
                    $inputData['image']=$filename;
                    ImageGallery::create($inputData);
                }
            }
        }
        return back()->with('message','Add Images Successed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::findOrFail($id);
        $imageGalleries=ImageGallery::where('products_id',$id)->get();
        return view('admin.products.add_images_gallery',compact('product','imageGalleries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=ImageGallery::findOrFail($id);
        $image=public_path().'/products/'.$delete->image;
    
        if($delete->delete()){
            unlink($image);
            
        }
        return back()->with('message','Delete image Success!');
    }
}
