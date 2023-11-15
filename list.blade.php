<h1> Members' List </h1>

<table border='1'>
    <tr>
        <td> ID </td>
        <td> Full Name </td>
        <td> Email </td>
        <td> Password  </td>
        <td> Operation  </td>
</tr>
@foreach ($members as $member)
<tr>
        <td> {{$member['id']}} </td>
        <td> {{$member['Name']}} </td>
        <td> {{$member['Email']}} </td>
        <td> {{$member['Password']}} </td>
        <td> <a href="delete/{{$member['id']}}">Delete</a>  <a href="edit/{{$member['id']}}">Edit</a> </td>
    </tr> 
@endforeach
</table> 

<span>
    {{$members->links()}}
</span>

<style>
    .w-5{
        display:none;
    }
    </style>
