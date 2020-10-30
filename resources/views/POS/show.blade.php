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
            <th>add</th>
        </tr>
    </tfoot>
</table>
<section class="container content-section">
    <h2 class="section-header">CART</h2>
    <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM</span>
        <span class="cart-price cart-header cart-column">PRICE</span>
        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
    </div>
    <div class="cart-items">
    <div class="cart-row">
            <div class="cart-item cart-column">
                
                <span class="cart-item-title">T-Shirt blue</span>
            </div>
            <span class="cart-price cart-column">$29.99</span>
            <div class="cart-quantity cart-column">
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-danger" type="button">REMOVE</button>
            </div>
        </div>
        <div class="cart-row">
            <div class="cart-item cart-column">
                <img class="cart-item-image" src="" width="100" height="100">
                <span class="cart-item-title">T-Shirt</span>
            </div>
            <span class="cart-price cart-column">$19.99</span>
            <div class="cart-quantity cart-column">
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-danger" type="button">REMOVE</button>
            </div>
        </div>
        <div class="cart-row">
            <div class="cart-item cart-column">
                <img class="cart-item-image" src="" width="100" height="100">
                <span class="cart-item-title">Album 3</span>
            </div>
            <span class="cart-price cart-column">$9.99</span>
            <div class="cart-quantity cart-column">
                <input class="cart-quantity-input" type="number" value="2">
                <button class="btn btn-danger" type="button">REMOVE</button>
            </div>
        </div>
    </div>
    <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">$39.97</span>
    </div>
    <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
</section>

