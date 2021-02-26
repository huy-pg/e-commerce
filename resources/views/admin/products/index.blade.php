@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.products.create') }}">
                {{ trans('global.add') }} New Product
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.category.title_singular') }} {{ trans('global.list') }}
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
                        <th>Product Name</th>
                        <th>Under Category</th>
                        <th>Code Of Product</th>
                     
                        <th>Price</th>
                        <th>sale_Price</th>
                        <th>Image Gallery</th>
                        <th>Add Attribute</th>

                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $product)
                      
                        <tr data-entry-id="{{ $product->id }}">
                            <td></td>
                            <td>
                                {{ $product->id ?? '' }}
                            </td>
                            <td style="text-align: center;"><img src="{{url('products',$product->image)}}" alt="" width="50"></td>
                            <td style="vertical-align: middle;">{{$product->p_name}}</td>
                            <td style="vertical-align: middle;">{{$product->category->name ?? '-- unset--'}}</td>
                            <td style="vertical-align: middle;">{{$product->p_code}}</td>
                            <td style="vertical-align: middle;">{{$product->price}}</td>
                            <td style="vertical-align: middle;">{{$product->sale_price}}</td>
                            <td style="vertical-align: middle;text-align: center;"><a href="{{route('admin.image-gallery.show',$product->id)}}" class="btn btn-default btn-mini">Add Images</a></td>
                            <td style="vertical-align: middle;text-align: center;"><a href="{{route('admin.product_attr.show',$product->id)}}" class="btn btn-success btn-mini">Add Attr</a></td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal{{$product->id}}" data-toggle="modal" class="btn btn-info btn-xs">View</a>
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                            </td>
                        </tr>
                        {{--Pop Up Model for View Product--}}
                        <div id="myModal{{$product->id}}" class="modal hide">
                            <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button">×</button>
                                <h3 style="color:white">{{$product->p_name}}</h3>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img src="{{url('products/',$product->image)}}" width="100" alt="{{$product->p_code}}"></div>
                                <h4  class="text-center text-white">sumary</h4>
                                <p class="text-center text-white">{{$product->sumary}}</p>
                                <br><br>
                                <h4  class="text-center text-white">description</h4>
                                <p class="text-center text-white">{{$product->description}}</p>
                            </div>
                        </div>
                        {{--Pop Up Model for View Product--}}
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










