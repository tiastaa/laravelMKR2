<form action="{{route('products.store')}}" method="post">

    @csrf

    <label for="title">Title</label>
    <input required name = "title"/>
    <br/>
    <label for="price">Price</label>
    <input required name = "price"/>
    <br/>
    <label for="data_make">Data_make</label>
    <input type="date" required name = "data_make"/>
    <br/>
    <label for="maker_id">Maker_id</label>
    <input required name = "maker_id"/>
    <br/>
    <br/>

    <button type="submit">Create</button>
</form>
