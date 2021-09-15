@extends('admin.layout.master')
@section('title', 'view')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h2>Danh Sách sản phẩm</h2></div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Debut_year</th>
                    <th>Origin</th>
                    <th>Image</th>
                    <th>brand_id</th>
                    <th>category_id</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $key => $product)
                    @if($product->category_id == 2 )
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
                                    <p> Chưa phân loại brand</p>
                                @endif
                            </td>
                            <td>
                                @if($product->category_id)
                                    <p>{{$product->categories->name}}</p>
                                @else
                                    <p>chưa phân loại category</p>
                                @endif
                            </td>
                            <td>
                                <button type="button" onclick="deleteProduct()" class="btn btn-outline-danger btn-delete"  data-url="{{route('product.delete',$product->id)}}">DELETE</button>

                            </td>
                            <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-outline-warning" id="update-product">UPDATE</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

