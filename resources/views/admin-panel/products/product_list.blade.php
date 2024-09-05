@extends('admin-panel.layouts.app')

@section('content')


<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product </h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Product List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Sub category</th>
                                <th>Image</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $k=> $product)
                            <tr>

                                <td>{{$k + 1}}</td>
                                <td> {{$product->title}} </td>
                                <td> {{$product->price}} </td>
                                <td> {{$product->discount_price}} </td>
                                <td> {{$product->description}} </td>
                                <td> {{$product->category->name}} </td>
                                <td> {{$product->subcategory->name}} </td>
                                <td>
                                    <img src="{{asset($product->image)}}" height="100">
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->

@endsection
