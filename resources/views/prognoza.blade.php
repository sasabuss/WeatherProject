@foreach($forecasts as $weather)
    <p>Trenutno je {{$weather->temperature}} stepeni u {{$weather->city->name}}</p>
@endforeach
