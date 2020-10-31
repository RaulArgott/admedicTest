<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>
    <div class="myDiv3">

    </div>

    <div class="myDiv">

    <div class="myDiv1">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th style="display:none">ID</th>
                <th>Producto</th>
                <th>Codigo</th>
                <th>Categoria</th>
                <th>Departamento</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Añadir a Carrito</th>
            </tr>
        </thead>
        <tbody align="center">
            @foreach($products as $product)
            <tr>
                <td class="shop-item-id" style="display:none">{{$product->id}}</td>
                <td class="shop-item-title">{{$product->name}}</td>
                <td class="shop-item-code">{{$product->code}}</td>
                <td class="shop-item-category">{{$product->category->name}}</td>
                <td class="shop-item-deparment">{{$product->deparment->name}}</td>
                <td class="shop-item-price">${{$product->price}}</td>
                <td class="shop-item-stock">{{$product->stock}}</td>
                <td><button class="shop-item-button">Añadir</button></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th style="display:none">ID</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Categoria</th>
                <th>Departamento</th>
                <th>Precio</th>
                <th>Stock</th>
                <th style="display:none">Añadir</th>
            </tr>
        </tfoot>
    </table>
    </div>

    <div class="myDiv2">
    <section class="container content-section">
        <h2 class="section-header">CARRITO</h2>
        
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">PRODUCTO</span>
            <span class="cart-price cart-header cart-column">PRECIO</span>
            <span class="cart-quantity cart-header cart-column">CANTIDAD</span>
        </div>
        
    
        <div class="cart-items">
        </div>
        <div class="cart-subtotal">
            <strong class="cart-subtotal-title">Subotal</strong>
            <span class="cart-subtotal-price">$0</span>
            <input hidden type="number" class="subtotal" name="subtotal" id="cart-subtotal" value="0">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>            
            <span class="cart-total-price">$0</span>
            <input hidden type="number" class="total" name="total" id="cart-total" value="0">
        </div>
        <button id="cart-submit"  class="btn btn-primary btn-purchase">COMPRAR</button>
    </section>
    </div>
    </div>

</body>
<script>

$(document).ready(function() {
    $("#cart-submit").click(function(e) {  
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });      
        $.ajax({
            url: "{{route('postCart')}}",
            type: "POST",
            data: {"item_id" : "1" },
            success: function( data ) {
                location.reload();
            },
            error: function(ts) { alert(ts.responseText) }    
        });
    });
});
</script>
</html>