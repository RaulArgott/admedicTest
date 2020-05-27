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
            <th>Employee</th>
            <th>Role</th>
            <th>Date-Time</th>
        </tr>
    </thead>
    <tbody>
@foreach ($logins as $k => $login)
<tr>
    <td>{{ $login->user->name }}</td>
    <td>{{ $login->user->role->display_name }}</td>
    <td>{{ $login->created_at }}</td>
</tr>

@endforeach

</tbody>
</table>
