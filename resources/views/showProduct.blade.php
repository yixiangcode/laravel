@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
               @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><img src="" alt="" width="100" class="img-fluid"></td>
                    <td style="white-space: nowrap;">{{$product->name}}</td>
                    <td style="white-space: nowrap;">{{$product->description}}</td>
                    <td>RM{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->categoryID}}</td>
                    <td style="white-space: nowrap;"><a href="{{route('editProduct', ['id'=>$product->id])}}" class="btn btn-warning btn-xs">Edit</a>&nbsp;<a href="" class="btn btn-danger btn-xs" onClick="return confirm('')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-4"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-6"></div>
</div>

@endsection