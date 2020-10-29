<p> {{ $sale->created_at }}  </p>
<p> <h4> <strong>Sale ID:</strong> {{ $sale->id }} </h4></p>
<table style="border: hidden" class="table table-sm" id="myTable">
    <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
@foreach ($sale->products as $k => $product)
<tr>
    <td>{{ $product->name }}</td>
    <td>{{ $info[$k]->quantity }}</td>
    <td>{{ $product->price }}</td>
</tr>

@endforeach
<tr>
    <td></td>
    <td>
        <h5>Subtotal:</h5>
        <h5>IVA:</h5>
        <h5>Total:</h5>
    </td>
    <td>
        <h5>{{ $sale->subtotal }}</h5>
        <h5>{{ $sale->iva }}</h5>
        <h5>{{ $sale->total }}</h5>
    </td>
</tr>
</tbody>
</table>

<p> <strong>Attended:</strong> {{ $sale->user->name }} </p>
