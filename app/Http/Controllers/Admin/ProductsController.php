<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderBy('created_at','desc')->get();
        return view('admin.products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.products.create',compact('categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'categories_id'=>'required',
            'p_name'=>'required|min:5',
            'p_code'=>'required',
           
            'sumary'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'sale_price'=>'required|numeric',
            'image'=>'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);
        $formInput=$request->all();
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($formInput['p_name'],"-").'.'.$image->getClientOriginalExtension();
                $image_path=public_path('products/'.$fileName);
               
             
                Image::make($image)->save($image_path);
                
                $formInput['image']=$fileName;
            }
        }
        Product::create($formInput);
        return redirect()->route('admin.products.index')->with('message','Add Products Successfully!');
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
  
        $categories=Category::all();
        $edit_product=Product::findOrFail($id);
        $edit_category=Category::findOrFail($edit_product->categories_id);
        return view('admin.products.edit',compact('edit_product','categories','edit_category'));
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
     $this->validate($request,[
            'categories_id'=>'required',
            'p_name'=>'required|min:5',
            'p_code'=>'required',
           
            'sumary'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'sale_price'=>'required|numeric',
            'image'=>'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);
        $formInput=$request->all();
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($formInput['p_name'],"-").'.'.$image->getClientOriginalExtension();
                $image_path=public_path('products/'.$fileName);
               
             
                Image::make($image)->save($image_path);
                
                $formInput['image']=$fileName;
            }
        }
        Product::findOrFail($id)->update($formInput);
        return redirect()->route('admin.products.index')->with('message','update Products Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Product::findOrFail($id);
        $image=public_path().'/products/'.$delete->image;
    
        if($delete->delete()){
            unlink($image);
            
        }
        return redirect()->route('admin.products.index')->with('message','Delete Success!');
    }
    public function deleteImage($id){
        //Products_model::where(['id'=>$id])->update(['image'=>'']);
        $delete_image=Product::findOrFail($id);
        $image=public_path().'/products/'.$delete_image->image;
       
        if($delete_image){
            $delete_image->image='';
            $delete_image->save();
            ////// delete image ///
            unlink($image);
        
        }
        return back();
    }
}
