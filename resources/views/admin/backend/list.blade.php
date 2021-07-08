@extends('admin.layout.master')
@section('title', 'product')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h2>Danh Sách sản phẩm</h2></div>
            <a href="{{route('product.create')}}" class="btn btn-success mb-2">ADD</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Debut_year</th>
                    <th>Origin</th>
                    <th>Image</th>
                    <th>brand_id</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $product)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->debut_year }}</td>
                        <td>{{ $product->origin}}</td>
                        <td><img width="80px" src="{{asset('storage/images/'.$product->image)}}"></td>
                        <td>
                            @if($product->brand)
                            <p>{{$product->brand->name}}</p>
                            @else
                            <p> Chua phan loai brand</p>
                            @endif
                        </td>
                        <td><a href="" class="btn btn-outline-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">DELETE</a></td>
                        <td><a href="{{route('product.edit')}}" class="btn btn-outline-warning">UPDATE</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
