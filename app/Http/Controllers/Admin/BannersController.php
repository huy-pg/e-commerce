<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Image;
use App\Banner;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::all();
        return view('admin.banners.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->all();
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($formInput['title'],"-").'.'.$image->getClientOriginalExtension();
                $image_path=public_path('uploads/'.$fileName);
               
             
                Image::make($image)->save($image_path);
                
                $formInput['image']=$fileName;
            }
        }
        Banner::create($formInput);
        return redirect()->route('admin.banners.index')->with("add banner success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banners.edit',compact('banner'));
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
        $formInput=$request->all();
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($formInput['title'],"-").'.'.$image->getClientOriginalExtension();
                $image_path=public_path('uploads/'.$fileName);
               
             
                Image::make($image)->save($image_path);
                
                $formInput['image']=$fileName;
            }
        }
        Banner::findOrFail($id)->update($formInput);
        return redirect()->route('admin.banners.index')->with("update banner success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::where('id',$id)->delete();
            return redirect()->back();
    }
}
