<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Image;
use App\Brand;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        return view('admin.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
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
        Brand::create($formInput);
        return redirect()->route('admin.brands.index')->with("add Brand success!");
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
        $brands = Brand::find($id);
        return view('admin.brands.edit',compact('brands'));
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
        Brand::findOrFail($id)->update($formInput);
        return redirect()->route('admin.brands.index')->with("update brand success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::where('id',$id)->delete();
            return redirect()->back();
    }
}
