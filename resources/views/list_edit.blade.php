<h1>list edit</h1>
<table border="1">
<tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Address</td>
    <td>Operation</td>
</tr>
@foreach($members as $member)
<tr>
    <td>{{$member['id']}}</td>
    <td>{{$member['m_name']}}</td>
    <td>{{$member['m_email']}}</td>
    <td>{{$member['m_address']}}</td>
    <td><a href={{"edit_list_item/".$member['id']}}>delete</a>|<a href={{"delete_list_item/".$member['id']}}>edit</a></td>
</tr>
@endforeach
</table>

<div>
    {{$members->links()}}
</div>

<style>
    .w-5{
        display:none;
    }
</style>