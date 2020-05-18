@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.order.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.orders.update", [$order->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('customer_name') ? 'has-error' : '' }}">
                <label for="customer_name">{{ trans('cruds.order.fields.customer_name') }}*</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control" value="{{ old('customer_name', isset($order) ? $order->customer_name : '') }}" required>
                @if($errors->has('customer_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('customer_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.customer_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('customer_email') ? 'has-error' : '' }}">
                <label for="customer_email">{{ trans('cruds.order.fields.customer_email') }}</label>
                <input type="email" id="customer_email" name="customer_email" class="form-control" value="{{ old('customer_email', isset($order) ? $order->customer_email : '') }}">
                @if($errors->has('customer_email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('customer_email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.customer_email_helper') }}
                </p>
            </div>
            <div class="card">
                <div class="card-header">
                    Products
                </div>

                <div class="card-body">
                    <table class="table" id="products_table">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach (old('products', $order->products->count() ? $order->products : ['']) as $order_product)
                            <tr id="product{{ $loop->index }}">
                                <td>
                                    <select name="products[]" class="form-control">
                                        <option value="">-- choose product --</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}"
                                                @if (old('products.' . $loop->parent->index, optional($order_product)->id) == $product->id) selected @endif
                                            >{{ $product->name }} (${{ number_format($product->price, 2) }})</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="number" name="quantities[]" class="form-control"
                                           value="{{ (old('quantities.' . $loop->index) ?? optional(optional($order_product)->pivot)->quantity) ?? '1' }}" />
                                </td>
                            </tr>
                        @endforeach
                        <tr id="product{{ count(old('products', $order->products->count() ? $order->products : [''])) }}"></tr>
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-md-12">
                            <button id="add_row" class="btn btn-default pull-left">+ Add Row</button>
                            <button id='delete_row' class="pull-right btn btn-danger">- Delete Row</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
    <script>
      $(document).ready(function(){
        let row_number = {{ count(old('products', $order->products->count() ? $order->products : [''])) }};
        $("#add_row").click(function(e){
          e.preventDefault();
          let new_row_number = row_number - 1;
          $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
          $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
          row_number++;
        });

        $("#delete_row").click(function(e){
          e.preventDefault();
          if(row_number > 1){
            $("#product" + (row_number - 1)).html('');
            row_number--;
          }
        });
      });
    </script>
@endsection
