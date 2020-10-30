<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<style>
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
</style>
<h1>Hola</h1>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>producto</th>
            <th>code</th>
            <th></th>
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
<script>
    $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable({
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
 
} );
</script>