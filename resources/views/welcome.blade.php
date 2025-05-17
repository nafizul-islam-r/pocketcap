<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name') . ' | Investment Simplified')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-900 text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    @extends('partials.header')
    <section id="hero" class="bg-gray-900 text-white">
  <div class="mt-20 py-20 px-4 mx-auto max-w-screen-xl text-center lg:py-32 lg:px-12">

    <!-- Animated Tag -->
    <span class="inline-block animate-fade-in-down delay-100 py-1 px-4 mb-6 text-sm bg-gray-800 text-white rounded-full">
      <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full mr-2">Startup</span>
      PocketCap: Invest in Growth with Trust
    </span>

    <!-- Title -->
    <h1 class="animate-fade-in-down delay-200 mb-6 text-4xl font-extrabold tracking-tight leading-tight md:text-5xl lg:text-6xl">
      Empowering Ideas with Smart Capital
    </h1>

    <!-- Subtitle -->
    <p class="animate-fade-in-down delay-300 mb-4 text-lg font-medium text-gray-400 max-w-3xl mx-auto">
      PocketCap connects verified candidates with motivated investors — bridging opportunities with trusted funding.
    </p>

    <!-- Extra content (value line + benefits) -->
    <p class="animate-fade-in-down delay-400 mb-6 text-base text-gray-400 max-w-2xl mx-auto italic">
      Whether you're launching a startup or looking to grow one — we've got you covered.
    </p>

    <div class="animate-fade-in-down delay-500 mb-10 grid gap-4 sm:grid-cols-3 max-w-4xl mx-auto text-sm text-gray-300">
      <div class="bg-gray-800 rounded-lg px-4 py-3">✅ Transparent Funding Process</div>
      <div class="bg-gray-800 rounded-lg px-4 py-3">🤝 Secure Investor-Candidate Match</div>
      <div class="bg-gray-800 rounded-lg px-4 py-3">📈 Track Investments & Equity in One Place</div>
    </div>

    <!-- CTA Button -->
    <div class="animate-fade-in-down delay-600 mb-16">
      <a href="#about"
         class="inline-block px-6 py-3 text-base font-semibold text-white bg-blue-600 hover:bg-orange-400 rounded-lg transition focus:outline-none focus:ring-4 focus:ring-blue-800">
        See more
      </a>
    </div>

    <!-- Scroll Down Arrow -->
    <div class="animate-bounce">
      <svg class="mx-auto w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
      </svg>
    </div>

  </div>
</section>


</body>

</html>
