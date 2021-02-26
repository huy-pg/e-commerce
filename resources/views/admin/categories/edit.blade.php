@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.category.title_singular') }}
    </div>
    <div class="card-body">
     <form action="{{ route('admin.categories.update',$cat->id) }}" method="POST"  enctype="multipart/form-data">
     <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{method_field("PUT")}}
    
    <div class="form-group">
    <label class="required" for="c_name">{{ trans('cruds.category.fields.name') }}</label>
        <input type="text" class="form-control" name="c_name" placeholder="Input link" value="{{$cat->name}}">
        @error('c_name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
   
    <div class="form-group">
    <label class="required" for="link">Link</label>
        <input type="text" class="form-control" name="Link" placeholder="Input name">
        @error('Link')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
    <div class="form-group">
        <label for="">description</label>
       
       <textarea name="description" class="form-control editor" rows="3">{{$cat->description}}</textarea>
       
        @error('description')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
                            <label class="control-label">Enable :</label>
                           
                            <input type="checkbox" name="status" id="status" value="0" {{($cat->status==0)?'checked':''}}>                             
                           
                        </div>
    <button type="submit" class="btn btn-primary">     {{ trans('global.save') }}</button>
</form>

    </div>
</div>



@endsection









