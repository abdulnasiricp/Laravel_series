@extends('admin-panel.layouts.app')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Product Create</h2>

                        <div class="clearfix"></div>
                    </div>
                    <br />
                    <form action="{{route('product.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="title" class="form-control " name="title" required>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="price">Price
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="price" name="price" class="form-control" required>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="discount_price">Discount
                                Price
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="discount_price" name="discount_price" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea name="description" id="description" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="category" class="col-form-label col-md-3 col-sm-3 label-align"
                                class="form-control">Category <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="category_id" required class="form-control">
                                    <option value="">Select category</option>
                                    @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="subcategory" class="col-form-label col-md-3 col-sm-3 label-align"
                                class="form-control">Sub Category
                                <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="subcategory_id" required class="form-control">
                                    <option value="">Select Sub category</option>
                                    @foreach ($sub_categories as $sub_cat)
                                    <option value="{{$sub_cat->id}}" class="sub_cat_options"
                                        data-category_id="{{$sub_cat->category_id}}">
                                        {{$sub_cat->name}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="image"
                                class="form-control">Image
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

@endsection

@push('scripts')
<script>
$('select[name=category_id]').change(function() {
    var category_id = $(this).val();
    $('.sub_cat_options').hide();
    $('.sub_cat_options[data-category_id=' + category_id + ']').show();

});
</script>


@endpush
