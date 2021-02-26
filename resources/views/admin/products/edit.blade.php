@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Edit Products</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('admin.products.update',$edit_product->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field("PUT")}}
                    <div class="control-group">
                        <label class="control-label">Select Category</label>
                        <div class="controls">
                            <select name="categories_id" style="width: 415px;">
                            <option value="">choose one</option>
                                @foreach($categories as $key=>$value)

                                <option value="{{$value->id}}"{{$edit_category->id==$value->id?' selected':''}}>{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Name</label>
                        <div class="controls{{$errors->has('p_name')?' has-error':''}}">
                            <input type="text" name="p_name" id="p_name" class="form-control" value="{{$edit_product->p_name}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_name')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_code" class="control-label">Code</label>
                        <div class="controls{{$errors->has('p_code')?' has-error':''}}">
                            <input type="text" name="p_code" id="p_code" class="form-control" value="{{$edit_product->p_code}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_code')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="sumary" class="control-label">Sumary</label>
                        <div class="controls{{$errors->has('sumary')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="sumary" id="sumary" rows="6" placeholder="Product sumary" style="width: 580px;">{{$edit_product->sumary}}</textarea>
                            <span class="text-danger">{{$errors->first('sumary')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="description" class="control-label">Description</label>
                        <div class="controls{{$errors->has('description')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="description" id="description" rows="6" placeholder="Product Description" style="width: 580px;">{{$edit_product->description}}</textarea>
                            <span class="text-danger">{{$errors->first('description')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="price" class="control-label">Price</label>
                        <div class="controls{{$errors->has('price')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input type="number" name="price" id="price" class="" value="{{$edit_product->price}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('price')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="sale_price" class="control-label">Sale Price</label>
                        <div class="controls{{$errors->has('sale_price')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input type="number" name="sale_price" id="sale_price" class="" value="{{$edit_product->sale_price}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('sale_price')}}</span>
                            </div>
                        </div>
                    </div><br>
                    <div class="control-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input type="file" name="image" id="image" />
                            <span class="text-danger">{{$errors->first('image')}}</span>
                            @if($edit_product->image!='')
                                &nbsp;&nbsp;&nbsp;
                                <img src="{{url('products/',$edit_product->image)}}" width="60" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Edit Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

@endsection