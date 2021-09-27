<h1>rendering data into view</h1>
<table border="1">
<tr>
<th>id</th>
<th>name</th>
<th>email id</th>
<th>gender</th>
<th>status</th>
</tr>
@foreach($collection as $show_data)
<tr>
<td>{{$show_data['id']}}</td>
<td>{{$show_data['name']}}</td>
<td>{{$show_data['email']}}</td>
<td>{{$show_data['gender']}}</td>
<td>{{$show_data['status']}}</td>
</tr>
@endforeach
</table>
