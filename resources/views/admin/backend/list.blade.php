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

                        {{--                            <a href="{{route('product.delete',$product->id)}}" class="btn btn-outline-danger"--}}
                        {{--                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">DELETE</a>--}}

                        <!-- Modal -->
{{--                            <button type="button" class="btn btn-outline-danger delete"  id="delete_{{$product->id}}"--}}
{{--                                     onclick="abc()" data-product-id={{$product->id}}>--}}
{{--                                DELETE--}}
{{--                            </button>--}}
                            <button type="button" onclick="deleteProduct()" class="btn btn-outline-danger btn-delete"  data-url="{{route('product.delete',$product->id)}}">DELETE</button>

                        </td>
                        <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-outline-warning" id="update-product">UPDATE</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

{{--    <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
{{--         aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">Bạn muốn xóa sản phẩm này không</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                  name:  <p id="product_name"></p>--}}
{{--                  price:  <p id="product_price"></p>--}}
{{--                    color:  <p id="product_color"></p>--}}
{{--                    debut_year:  <p id="product_debut_year"></p>--}}
{{--                    origin:  <p id="product_origin"></p>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
       function deleteProduct(){
         let url =  event.target.getAttribute("data-url");
            // console.log(url)
         if (confirm(' Bạn chắc chắn muốn xóa không')){
             $.ajax({
                 type:'delete',
                 url:url,
                 data: {_token: '{{csrf_token()}}' },
                 success: function (response){
                     window.location.reload()
                 },

             })
         }
       }


      // function  abc(){
      //     let id = event.target.getAttribute("data-product-id");
      //     $.ajax({
      //         url: window.location.origin +  '/' + id,
      //         type: "get",
      //         success: function (data) {
      //             $("#product_name").text(data.name)
      //             $("#product_price").text(data.price)
      //             $("#product_color").text(data.color)
      //             $("#product_debut_year").text(data.debut_year)
      //             $("#product_origin").text(data.origin)
      //             $('#modal_delete').modal('show')
      //         },
      //         error: function (){
      //
      //         },
      //      })
      //   }

    </script>
@endsection
