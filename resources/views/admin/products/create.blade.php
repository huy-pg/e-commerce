@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} New Product
    </div>

    <div class="card-body">
    
    <div class="widget-content nopadding">
                <form action="{{route('admin.products.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                        <label class="control-label">Select Category</label>
                        <div class="controls">
                            <select name="categories_id" style="width: 415px;"  required="required">
                            <option value="">choose one</option>
                                @foreach($categories as $key=>$value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                   
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Name</label>
                        <div class="controls{{$errors->has('p_name')?' has-error':''}}">
                            <input type="text" name="p_name" id="p_name" class="form-control" value="{{old('p_name')}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_name')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_code" class="control-label">Code</label>
                        <div class="controls{{$errors->has('p_code')?' has-error':''}}">
                            <input type="text" name="p_code" id="p_code" class="form-control" value="{{old('p_code')}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_code')}}</span>
                        </div>
                    </div>
                 
                    <div class="control-group">
                        <label for="sumary" class="control-label">Sumary</label>
                        <div class="controls{{$errors->has('sumary')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="sumary" id="sumary" rows="6" placeholder="Product sumary" style="width: 580px;">{{old('sumary')}}</textarea>
                            <span class="text-danger">{{$errors->first('sumary')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="description" class="control-label">Description</label>
                        <div class="controls{{$errors->has('description')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="description" id="description" rows="6" placeholder="Product Description" style="width: 580px;">{{old('description')}}</textarea>
                            <span class="text-danger">{{$errors->first('description')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="price" class="control-label">Price</label>
                        <div class="controls{{$errors->has('price')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input type="number" name="price" id="price" class="" value="{{old('price')}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('price')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="sale_price" class="control-label">Sale Price</label>
                        <div class="controls{{$errors->has('sale_price')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input type="number" name="sale_price" id="sale_price" class="" value="{{old('sale_price')}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('sale_price')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input type="file" name="image" id="image"/>
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Add New Product</button>
                        </div>
                    </div>
                </form>
            </div>
    
    </div>
   
</div>



@endsection









