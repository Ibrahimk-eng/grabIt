@extends('MainTheme.index')

@section('body')

<div class="container" style="    box-sizing: border-box; display: block; margin-top: 155px;">
    <form action="{{route('form')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="firstName">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label>Product Image</label>
            <input type="file" name="image" class="form-control">
        </div>

       

        <div class="form-group">
            <input type="submit" name="btn" value="Submit" class="btn btn-success btn-block" />
        </div>
    </form>
</div>
@endsection