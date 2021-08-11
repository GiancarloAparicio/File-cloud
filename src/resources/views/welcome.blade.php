<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-900 sm:items-center sm:pt-0">
        <x-organisms.header />
        <section class="text-gray-400 body-font bg-gray-900">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <p class="text-xs text-indigo-400 tracking-widest font-medium title-font mb-1">Saco Oliveros</p>
                    <p class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white" data-aos="fade-up"
                        data-aos-duration="800">
                        File Cloud
                    </p>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam
                        erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                    </p>
                </div>

                <x-organisms.group-boxes />

                <button
                    class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    See more
                </button>
            </div>
        </section>


    </div>
</body>

</html>
