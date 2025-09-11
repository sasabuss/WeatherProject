@foreach($city->forecasts as $forecast)
    <p>Datuma {{$forecast->forecast_date}} ce u {{$forecast->city->name}} biti {{$forecast->temperature}} °C</p>
@endforeach
