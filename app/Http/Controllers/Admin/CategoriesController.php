<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( )
    {
        // $request=request()->all();
        // dd($request);
        request()->validate([
            
            'c_name' => 'required',
           
        ],[
           
        ]);
    
        if(is_null( request()->status)){
            request()->status=1;
         }
        Category::create([
            'name' => request()->c_name,
            'link' => request()->link,
         
            'description' =>  request()->description,
       
            'status' => request()->status,
        ]);



        return redirect()->route('admin.categories.index');
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
        // dd($id);
        $cat = Category::find($id); // select * From category Where id = $id
        
        return view('admin.categories.edit', compact('cat'));
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
        $update_categories=Category::findOrFail($id);
        request()->validate([
            
            'c_name' => 'required',
           
        ],[
           
        ]);
        // dd($request->status);die();
        $input_data=$request->all();
        if(is_null($request->status)){
           $request->status=1;
        }
     


        $update_categories->update([
            'name' => request()->c_name,
            'link' => request()->link,
       
            'description' =>  request()->description,
       
            'status' => request()->status,
        ]);
        return redirect()->route('admin.categories.index')->with('message','Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Category::findOrFail($id);
        $delete->delete();
        return redirect()->route('admin.categories.index')->with('message','Delete Success!');
    }
}
