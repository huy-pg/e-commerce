@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} New Banner
    </div>

    <div class="card-body">
    
    <div class="widget-content nopadding">
                <form action="{{route('admin.banners.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                
                    <div class="control-group">
                        <label for="title" class="control-label">Title</label>
                        <div class="controls{{$errors->has('title')?' has-error':''}}">
                            <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('title')}}</span>
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
                        <label for="sumary" class="control-label">sumary</label>
                        <div class="controls{{$errors->has('sumary')?' has-error':''}}">
                            <input type="text" name="sumary" id="sumary" class="form-control" value="{{old('sumary')}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('sumary')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="link" class="control-label">link</label>
                        <div class="controls{{$errors->has('link')?' has-error':''}}">
                            <input type="text" name="link" id="sumary" class="form-control" value="{{old('link')}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('link')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="prioty" class="control-label">prioty</label>
                        <div class="controls{{$errors->has('prioty')?' has-error':''}}">
                            <div class="input-prepend"> 
                                <input type="number" name="prioty" id="prioty" class="" value="{{old('prioty')}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('prioty')}}</span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                            <label class="control-label">Enable :</label>
                           
                                <input type="checkbox" name="status" id="status" value="0">
                             
                           
                        </div>
                 
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Add New Banner</button>
                        </div>
                    </div>
                </form>
            </div>
    
    </div>
   
</div>



@endsection









