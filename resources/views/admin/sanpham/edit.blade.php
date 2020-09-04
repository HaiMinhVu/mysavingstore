<!-- Page Content -->
@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
                        <small>Edit</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">

                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif

                    <form action="admin/sanpham/edit/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="product_type" id="theloai">
                            @foreach($theloai as $tl)
                                <option
                                @if($sanpham->product_type->id == $tl->id)
                                    {{"selected"}}
                                @endif
                                value="{{$tl->id}}">{{$tl->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input class="form-control" name="name" value="{{$sanpham->name}}" />
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="3">{{$sanpham->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control ckeditor" id="noidung" name="content" rows="3">{{$sanpham->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" />
                            @if(session('error_img'))
                                <div class="alert alert-danger">{{session('error_img')}}</div>
                            @endif
                            <br><img width="200px" src="upload/product/{{$sanpham->image}}">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" name="unit_price" value="{{$sanpham->unit_price}}" />
                        </div>
                        <div class="form-group">
                            <label>Promotion Price</label>
                            <input class="form-control" name="promotion_price" value="{{$sanpham->promotion_price}}" />
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input class="form-control" name="unit" value="{{$sanpham->unit}}" />
                        </div>
                        <div class="form-group">
                            <label>Is New Product &nbsp;</label>
                            <label class="radio-inline">
                                <input name="new" value="0" type="radio"
                                @if($sanpham->new == 0)
                                    {{"checked"}}
                                @endif
                                >No
                            </label>
                            <label class="radio-inline">
                                <input name="new" value="1" type="radio"
                                @if($sanpham->new == 1)
                                    {{"checked"}}
                                @endif>Yes
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Active &nbsp;</label>
                            <label class="radio-inline">
                                <input name="active" value="0" type="radio"
                                @if($sanpham->active == 0)
                                    {{"checked"}}
                                @endif
                                >No
                            </label>
                            <label class="radio-inline">
                                <input name="active" value="1" type="radio"
                                @if($sanpham->active == 1)
                                    {{"checked"}}
                                @endif>Yes
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
<!-- /#page-wrapper -->