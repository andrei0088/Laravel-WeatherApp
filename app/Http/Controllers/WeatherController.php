<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class WeatherController extends Controller
{
    // Hărțile pentru icon și direcția vântului
    private $iconMap = [
        '01d' => 'bi-sun',
        '01n' => 'bi-moon',
        '02d' => 'bi-cloud-sun',
        '02n' => 'bi-cloud-moon',
        '03d' => 'bi-cloud',
        '03n' => 'bi-cloud',
        '04d' => 'bi-clouds',
        '04n' => 'bi-clouds',
        '09d' => 'bi-cloud-drizzle',
        '09n' => 'bi-cloud-drizzle',
        '10d' => 'bi-cloud-rain',
        '10n' => 'bi-cloud-rain',
        '11d' => 'bi-cloud-lightning',
        '11n' => 'bi-cloud-lightning',
        '13d' => 'bi-snow',
        '13n' => 'bi-snow',
        '50d' => 'bi-cloud-fog',
        '50n' => 'bi-cloud-fog',
    ];

    private $windDirs = ['N','NE','E','SE','S','SW','W','NW'];

    public function index()
    {
        $cities = ['Bucharest', 'Brasov']; // poți adăuga cât vrei
        $API_KEY = env('WEATHER_API_KEY');
        $client = new Client();

        $meteos = [];

        foreach($cities as $city) {
            $url = "https://api.openweathermap.org/data/2.5/weather?q=".urlencode($city)."&appid=".$API_KEY."&units=metric";

            try {
                $response = $client->request('GET', $url, ['timeout' => 5]);
                $data = json_decode($response->getBody(), true);

                // adaugă icon și direcția vântului direct în array
                $data['icon_class'] = $this->getBootstrapWeatherIcon($data['weather'][0]['icon'] ?? null);
                $data['wind_dir'] = isset($data['wind']['deg']) ? $this->getWindDirection($data['wind']['deg']) : null;

                $meteos[$city] = $data;

            } catch(RequestException $e) {
                $meteos[$city] = ['error' => "Unable to fetch weather data: ".$e->getMessage()];
            }
        }

        return view('home', ['meteos' => $meteos]);
    }

    // funcții private pentru icon și direcția vântului
    private function getBootstrapWeatherIcon($icon) {
        return $this->iconMap[$icon] ?? 'bi-question-circle';
    }

    private function getWindDirection($deg) {
        $idx = round($deg / 45) % 8;
        return $this->windDirs[$idx];
    }


    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
