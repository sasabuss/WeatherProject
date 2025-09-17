<form action="" method="POST">

    <select name="city_id">
        @foreach(\App\Models\CityModel::all() as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>

    <input type="text" name="temperature" placeholder="Enter Temperature">

    <select name="weather_type">
        @foreach(\App\Models\ForecastsModel::WEATHER as $weather)
            <option>{{$weather}}</option>

        @endforeach
    </select>

    <input type="text" name="probability" placeholder="Enter probability">
    <input type="date" name="forecast_date">

    <button>Save</button>

</form>


@foreach(\App\Models\CityModel::all() as $city)
    <p>{{$city->name}}</p>
    <ul>
        @foreach($city->forecasts as $forecast)
        <li>{{$forecast->forecast_date}} - {{$forecast->temperature}}</li>
        @endforeach
    </ul>
@endforeach
