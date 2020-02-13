@extends('MainTheme.index')

@section('body')
<div class="container">
    <table class="table" style="box-sizing: border-box; margin-top: 144px">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Sl</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                <!-- $product->image -->
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                
                <td><img src="{{ asset($product->image) }}" width="100"></td>
                <td> <a href="" class="btn">Edit</a>|
                  <a href="" data-toggle="modal" class="btn">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection