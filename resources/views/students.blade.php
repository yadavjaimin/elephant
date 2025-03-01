<div>
    <h1>student data</h1>

    <!-- {{print_r($data)}} -->
    
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>

<table border="4">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>password</td>
    </tr>
    @foreach($data as $s_data)
    <tr>
        <td>{{$s_data->id}}</td>
        <td>{{$s_data->name}}</td>
        <td>{{$s_data->email}}</td>
        <td>{{$s_data->password}}</td>
    </tr>
    @endforeach
</table>