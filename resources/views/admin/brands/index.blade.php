@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.brands.create') }}">
                {{ trans('global.add') }} New Brands
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
  brands List
    </div>
                                             

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Permission">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>ID</th>
                        <th>Image</th>
                        <th>title</th>
                        <th>link</th>
                       
                     
                        <th>status</th>
                        <th>prioty</th>
                      

                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($brands as $key => $brand)
                      
                        <tr data-entry-id="{{ $brand->id }}">
                            <td></td>
                            <td>
                                {{ $brand->id ?? '' }}
                            </td>
                            <td style="text-align: center;"><img src="{{url('uploads/',$brand->image)}}" alt="" width="150"></td>
                            <td style="vertical-align: middle;">{{$brand->title}}</td>
                            <td style="vertical-align: middle;">{{$brand->link}}</td>
                            <td style="vertical-align: middle;"> {{($brand->status==0)?' Enable':'Disabled'}}  </td>
                            <td style="vertical-align: middle;"> {{$brand->prioty}} </td>
                             <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal{{$brand->id}}" data-toggle="modal" class="btn btn-info btn-xs">View</a>
                                <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                            </td>
                        </tr>
                        {{--Pop Up Model for View brand--}}
                        <div id="myModal{{$brand->id}}" class="modal hide">
                            <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button">×</button>
                                <h3 style="color:white">{{$brand->p_name}}</h3>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img src="{{url('brands/',$brand->image)}}" width="100" alt="{{$brand->p_code}}"></div>
                                <p class="text-center text-white">{{$brand->description}}</p>
                            </div>
                        </div>
                        {{--Pop Up Model for View brand--}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
  $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('categories_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.categoriess.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Permission:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection










