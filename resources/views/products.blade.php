<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

table, th, td {
  border: 1px solid black;
}
</style>
<table style="border: hidden" class="table table-sm" id="myTable">
    <thead>
        <tr>
            <th>Product</th>
            <th>Code</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Category</th>
            <th>Supplier</th>
            <th>Deparment</th>
        </tr>
    </thead>
    <tbody>
@foreach ($products as $k => $product)
<tr>
    <td>{{ $product->name }}</td>
    <td>{{ $product->code }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->stock }}</td>
    <td>{{ $product->category->name }}</td>
    <td>{{ $product->supplier->name }}</td>
    <td>{{ $product->deparment->name }}</td>
</tr>

@endforeach

</tbody>
</table>
