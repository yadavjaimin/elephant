<h1>user data</h1>
<!-- <div>{{

print_r($users);

}}</div> -->

<table border="3">

<tr>
<td>name</td>
<td>email</td>
<td>password</td>

</tr>
@foreach($users as $user)

<tr>
    <td>
        {{$user->name}}
    </td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
</tr>
@endforeach
</table>
