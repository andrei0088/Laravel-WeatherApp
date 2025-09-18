@extends('./layouts/app')
@section('content')


<div class="weather-card bg-white shadow-md rounded-2xl p-6 flex flex-col justify-between">
            <div class="weather-header mb-4">
                <div class="weather-title text-lg font-bold mb-2">
                    Weather in <span class="text-blue-600">{{ $city }}</span>
                </div>

                @if(isset($meteo['error']))
                    <div class="text-red-500 font-semibold">{{ $meteo['error'] }}</div>
                @else
                    <div class="flex items-center mb-2">
                        <i class="weather-icon bi {{ $meteo['icon_class'] }} text-4xl text-yellow-400 mr-3"
                           aria-label="{{ $meteo['weather'][0]['description'] ?? 'Weather icon' }}"></i>
                        <span class="weather-desc capitalize text-gray-700 text-lg">
                            {{ $meteo['weather'][0]['description'] ?? 'N/A' }}
                        </span>
                    </div>

                    <ul class="weather-list text-gray-600 space-y-1">
                        <li><span class="font-semibold">Temperature:</span> {{ $meteo['main']['temp'] ?? 'N/A' }} °C</li>
                        <li><span class="font-semibold">Feels like:</span> {{ $meteo['main']['feels_like'] ?? 'N/A' }} °C</li>
                        <li><span class="font-semibold">Pressure:</span> {{ $meteo['main']['pressure'] ?? 'N/A' }} hPa</li>
                        <li><span class="font-semibold">Humidity:</span> {{ $meteo['main']['humidity'] ?? 'N/A' }} %</li>
                        <li>
                            <span class="font-semibold">Wind:</span>
                            @if(isset($meteo['wind']['speed']))
                                {{ number_format($meteo['wind']['speed'] * 3.6, 1) }} km/h
                                @if(isset($meteo['wind_dir']))
                                    • {{ $meteo['wind_dir'] }}
                                @endif
                            @else
                                N/A
                            @endif
                        </li>
                    </ul>
                @endif
            </div>
        </div>


        @endsection