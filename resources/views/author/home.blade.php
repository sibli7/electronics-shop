@extends("layouts.layout")


@section("title", "Electronics Shop")
@section("content")
   
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th>Product Photo</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
                <th>Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ShowData as $key=>$data)
            <tr>
                <th>{{ $key+1}}</th>
                <td><img src="{{ asset('storage/product_images/'.$data->product_image) }}" style="height: 100px;width:100px;"></td>
                <td>{{$data->title}} </td>
                <td>{{$data->category}} </td>
                <td>{{ Illuminate\Support\Str::of($data->description)->words(20)}} </td>
                <th>{{$data->price}}</th>
                <th>{{$data->discount}}</th>
                <td>
                    <a class="btn btn-info" href="">Edit</a> 
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
            </tr>
            @endforeach

         

         
        
        </tbody>
    </table>

@endsection