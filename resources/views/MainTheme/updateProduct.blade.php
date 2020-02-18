@extends('MainTheme.index')

@section('body')
<div class="container" style="    box-sizing: border-box; display: block; margin-top: 155px;">
    <form action="{{route('updateProductsPost', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="firstName">Name</label>
            <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" id="name" value="{{$product->price}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" value="{{$product->description}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Product Image</label>
            <input type="file" name="image" value="{{asset('images/'.$product->image)}}" class="form-control">
        </div>
       

        <div class="form-group">
            <input type="submit" name="btn" value="Update" class="btn btn-success btn-block" />
        </div>
    </form>
</div>
@endsection