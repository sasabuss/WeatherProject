@php use App\Models\CityModel;use App\Models\WeatherModel; @endphp
<form method="POST" action="{{route('weather.update')}}">
    @csrf
    <input type="number" name="temperature" placeholder="Enter City Temperature">
    <select name="city_id">
        @foreach(CityModel::all() as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
    <button>Save</button>
</form>

@foreach(WeatherModel::all() as $weather)
    <p>{{$weather->city->name}} - {{$weather->temperature}} °C</p>
@endforeach
