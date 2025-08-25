<h1>Temperatures in citties:</h1>
@foreach($cities as $city)
    <p>{{$city->city}} - {{$city->temperature}}°C</p>
@endforeach
