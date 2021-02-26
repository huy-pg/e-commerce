@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.category.title_singular') }}
    </div>

    <div class="card-body">
     <form action="{{ route("admin.categories.store") }}" method="POST"  enctype="multipart/form-data">

    @csrf
    <div class="form-group">
    <label class="required" for="c_name">{{ trans('cruds.category.fields.name') }}</label>
        <input type="text" class="form-control" name="c_name" placeholder="Input name">
        @error('c_name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
    <div class="form-group">
    <label class="required" for="link">Link</label>
        <input type="text" class="form-control" name="Link" placeholder="Input link">
        @error('Link')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
   
   
    <div class="form-group">
        <label for="">description</label>
       
       <textarea name="description" class="form-control editor" rows="3" ></textarea>
       
        @error('description')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
                            <label class="control-label">Enable :</label>
                           
                                <input type="checkbox" name="status" id="status" value="0">
                             
                           
                        </div>
    <button type="submit" class="btn btn-primary">     {{ trans('global.save') }}</button>
</form>

    </div>
</div>



@endsection









