<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<form class="row g-3" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <label  class="form-label">name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="col-md-4">
        <label for="price" class="form-label">price</label>
        <input type="number" class="form-control" name="price">
    </div>
    <div class="col-6">
        <label for="color" class="form-label">color</label>
        <input type="text" class="form-control" name="color">
    </div>
    <div class="col-4">
        <label for="debut_year" class="form-label">debut_year</label>
        <input type="date" class="form-control" name="debut_year">
    </div>
    <div class="col-md-6">
        <label for="origin" class="form-label">origin</label>
        <input type="text" class="form-control" id="origin" name="origin">
    </div>
    <div class="col-md-4">
        <label for="image" class="form-label">image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="col-md-4">
        <label for="">brand_id</label>
        <select name="brand_id" class="form-control" type="number">
            @foreach($brands as  $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

