@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.banners.create') }}">
                {{ trans('global.add') }} New banner
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
  Banners List
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
                @foreach($banners as $key => $banner)
                      
                        <tr data-entry-id="{{ $banner->id }}">
                            <td></td>
                            <td>
                                {{ $banner->id ?? '' }}
                            </td>
                            <td style="text-align: center;"><img src="{{url('uploads/',$banner->image)}}" alt="" width="300"></td>
                            <td style="vertical-align: middle;">{{$banner->title}}</td>
                            <td style="vertical-align: middle;">{{$banner->link}}</td>
                            <td style="vertical-align: middle;"> {{($banner->status==0)?' Enable':'Disabled'}}  </td>
                            <td style="vertical-align: middle;"> {{$banner->prioty}} </td>
                             <td style="text-align: center; vertical-align: middle;">
   
                                <a href="{{ route('admin.banners.edit', $banner->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                            </td>
                        </tr>
                        {{--Pop Up Model for View banner--}}
                        <div id="myModal{{$banner->id}}" class="modal hide">
                            <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button">×</button>
                                <h3 style="color:white">{{$banner->p_name}}</h3>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img src="{{url('banners/',$banner->image)}}" width="100" alt="{{$banner->p_code}}"></div>
                                <p class="text-center text-white">{{$banner->description}}</p>
                            </div>
                        </div>
                        {{--Pop Up Model for View banner--}}
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










