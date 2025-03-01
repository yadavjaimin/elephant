<div>
    <h1>http response</h1>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

    <!-- {{print_r($data)}} -->

    <ul>
        <li> <span>name:</span><span>{{$data->name}}</span></li>
        <li> <span>username:</span><span>{{$data->username}}</span></li>
        <li> <span>email:</span><span>{{$data->email}}</span></li>
        <li> <span>city:</span><span>{{$data->address->city}}</span></li>
    </ul>


</div>