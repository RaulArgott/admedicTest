<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/app.css">
<script src="/js/app.js"></script>

<h1>Hola</h1>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>producto</th>
            <th>code</th>
            <th>add</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->code}}</td>
            <td>añadir al carrito</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>name</th>
            <th>code</th>
        </tr>
    </tfoot>
</table>