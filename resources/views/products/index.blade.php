<table>
    <tr><th>Title</th><th>Price</th><th>Data_make</th><th>Maker_id</th></tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->data_make}}</td>
            <td>{{$product->maker_id}}</td>
        </tr>
    @endforeach
</table>
<a href="{{route('products.create')}}">Create</a>
