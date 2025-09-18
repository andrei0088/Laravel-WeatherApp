@extends('./layouts/app')

@section('content')

<section class="about-wrapper py-6 bg-gray-100 flex items-center justify-center">
    <div class="about-card bg-white shadow-lg rounded-2xl max-w-3xl p-6 md:p-8">
        <h2 class="about-title text-2xl md:text-3xl font-bold text-gray-800 mb-4 text-center">
            About WeatherApp
        </h2>

        <p class="about-text text-gray-700 text-base md:text-lg mb-3">
            <strong>WeatherApp</strong> is a modern web application that allows you to view real-time weather information for major European cities. You can check the current temperature, humidity, wind speed and direction, and weather conditions, all in a clean and minimalist interface.
        </p>

        <p class="about-text text-gray-700 text-base md:text-lg mb-3">
            The app is built with React and TypeScript for the frontend, and uses a Python Flask backend to fetch data from the OpenWeatherMap API. The design is responsive and user-friendly, making it easy to check the weather from any device.
        </p>

        <p class="about-text text-gray-700 text-base md:text-lg font-semibold mt-4 text-center">
            <strong>Made by Soft88A</strong>
        </p>
    </div>
</section>


@endsection
