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
                <h5>Edit Brands</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('admin.brands.update',$brands->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field("PUT")}}
                    <div class="control-group">
                        <label for="title" class="control-label">Title</label>
                        <div class="controls{{$errors->has('title')?' has-error':''}}">
                            <input type="text" name="title" id="title" class="form-control" value="{{$brands->title}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('title')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input type="file" name="image" id="image"/>
                            <span class="text-danger">{{$errors->first('image')}}</span>
                          
                                <img src="{{url('uploads/',$brands->image)}}" width="200" alt="">
                         
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="sumary" class="control-label">sumary</label>
                        <div class="controls{{$errors->has('sumary')?' has-error':''}}">
                            <input type="text" name="sumary" id="sumary" class="form-control" value="{{$brands->sumary}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('sumary')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="link" class="control-label">link</label>
                        <div class="controls{{$errors->has('link')?' has-error':''}}">
                            <input type="text" name="link" id="sumary" class="form-control" value="{{$brands->link}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('link')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="prioty" class="control-label">prioty</label>
                        <div class="controls{{$errors->has('prioty')?' has-error':''}}">
                            <div class="input-prepend"> 
                                <input type="number" name="prioty" id="prioty" class="" value="{{$brands->prioty}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('prioty')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label">Enable :</label>
                           
                            <input type="checkbox" name="status" id="status" value="0" {{($brands->status==0)?'checked':''}}>                             
                           
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