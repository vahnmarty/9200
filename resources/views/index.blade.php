<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <nav class="bg-black text-white flex justify-between items-center px-8 py-4">
            <div class="max-w-7xl mx-auto px-8">
                <div class="flex gap-x-7">
                    <a href="#" class="text-sm text-gray-300 hover:text-white">Home</a>
                    <a href="#" class="text-sm text-gray-300 hover:text-white">Insignia</a>
                    <a href="#" class="text-sm text-gray-300 hover:text-white">Roster</a>
                    <a href="#" class="text-sm text-gray-300 hover:text-white">Identity</a>
                    <a href="#" class="text-sm text-gray-300 hover:text-white">Shop</a>
                </div>
            </div>
        </nav>
        <div id="hero" class="bg-black py-32">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('img/logo_white.png') }}" alt="" class="w-32 lg:w-48 h-auto">
                <img src="{{ asset('img/logo_title.png') }}" alt="" class="h-20 lg:h-32 w-auto mt-8">
                <p class="text-red-600 uppercase font-bold text-2xl lg:text-4xl mt-3 font-orbitron">Pickleball Club</p>
            </div>

        </div>

        <section class="bg-white py-32">
            <div class="max-w-5xl mx-auto px-8">
                <h6 class="font-orbitron bg-red-700 inline-block text-white px-8 py-1">Iligan City</h6>
                <h2 class="font-work text-3xl lg:text-6xl mt-8">Built to Get Better.</h2>
                <p class="lg:w-2/3 font-work mt-5 text-xl">
                    9200 is more than a number. It's a mindset — a constant pursuit of something better.
                    We play hard, grow together, and keep raising the bar, one point at a time.
                </p>
            </div>

            <div class="mt-16">
                <section class="splide" aria-label="Gallery">
                    <div class="splide__track">
                        <ul class="splide__list">

                            <li class="splide__slide">
                                <div class="h-96 w-80 bg-gray-200">
                                    <img src="{{ asset('img/gallery/image1.jpg') }}" alt="" class="object-cover h-full w-full">
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="h-96 w-80 bg-gray-200">
                                    <img src="{{ asset('img/gallery/image2.jpg') }}" alt="" class="object-cover h-full w-full">
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="h-96 w-80 bg-gray-200">
                                   <img src="{{ asset('img/gallery/image3.jpg') }}" alt="" class="object-cover h-full w-full">
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="h-96 w-80 bg-gray-200">
                                    <img src="{{ asset('img/gallery/image4.PNG') }}" alt="" class="object-cover h-full w-full">
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="h-96 w-80 bg-gray-200">
                                    <img src="{{ asset('img/gallery/image5.JPG') }}" alt="" class="object-cover h-full w-full">
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="h-96 w-80 bg-gray-200">
                                    <img src="{{ asset('img/gallery/image6.jpg') }}" alt="" class="object-cover h-full w-full">
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="h-96 w-80 bg-gray-200">
                                    <img src="{{ asset('img/gallery/image7.PNG') }}" alt="" class="object-cover h-full w-full">
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="h-96 w-80 bg-gray-200">
                                    <img src="{{ asset('img/gallery/image8.PNG') }}" alt="" class="object-cover h-full w-full">
                                </div>
                            </li>

                        </ul>
                    </div>
                </section>
            </div>
        </section>


        <section class="lg:grid grid-cols-2 bg-gradient-to-r from-black to-gray-800 py-32 px-8 lg:px-16  gap-x-16 text-gray-200 via-5% space-y-8">
            <div>
                <h3 class="font-orbitron text-5xl font-bold text-red-700">Vision</h3>

                <div class="pl-3 lg:pl-8 mt-8">
                    <h4 class="text-xl">
                        To become a thriving pickleball community that inspires people to play, compete, connect, and continuously become better.
                    </h4>
                    <p class="mt-4">
                        We envision 9200 as a community where players of every level feel welcome, challenged, and motivated to grow—building not just better players, but stronger relationships and a lasting culture around the sport.
                    </p>
                </div>
            </div>
            <div>
                <h3 class="font-orbitron text-5xl font-bold text-red-700">Mission</h3>
                <div class="pl-3 lg:pl-8 mt-8">
                    <h4 class="text-xl">
                        To create a welcoming, competitive, and supportive environment where everyone can enjoy pickleball and pursue their next level.
                    </h4>
                    <p class="mt-4">
                        We bring players together through open play, organized events, tournaments, and community activities that encourage healthy competition, sportsmanship, friendship, and continuous improvement.
                    </p>
                </div>
            </div>
            <div class="col-span-2 mt-8">
                <h3 class="font-orbitron text-5xl font-bold text-red-700">Goals</h3>
                <div class="pl-3 lg:pl-8 mt-8">
                    <h4 class="text-xl">
                        To become a thriving pickleball community that inspires people to play, compete, connect, and continuously become better.
                    </h4>
                    <div class="mt-8">

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-4 gap-y-4">

                            <div class="flex gap-3 md:gap-4">
                                <div class="bg-yellow-600 size-12 md:size-16 flex justify-center items-center p-2 rounded-full shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 md:size-8 shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-bold md:text-xl">Raise the Standard</h5>
                                    <p class="mt-2 text-sm hidden md:block">Promote quality play, good sportsmanship, and a culture of respect both on and off the court.</p>
                                </div>

                            </div>


                            <div class="flex gap-4">
                                <div class="bg-yellow-600 size-12 md:size-16 flex justify-center items-center p-2 rounded-full shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 md:size-8 shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                                    </svg>

                                </div>
                                <div>
                                    <h5 class="font-bold md:text-xl">Develop Players</h5>
                                    <p class="mt-2 text-sm hidden md:block">Encourage players to improve their skills, confidence, fitness, and competitive experience.</p>
                                </div>

                            </div>

                            <div class="flex gap-4">
                                <div class="bg-yellow-600 size-12 md:size-16 flex justify-center items-center p-2 rounded-full shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 md:size-8 shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                        </svg>

                                </div>
                                <div>
                                    <h5 class="font-bold md:text-xl">Create Experiences</h5>
                                    <p class="mt-2 text-sm hidden md:block">Organize engaging open plays, tournaments, leagues, and community events that bring people together.</p>
                                </div>

                            </div>

                            <div class="flex gap-4">
                                <div class="bg-yellow-600 size-12 md:size-16 flex justify-center items-center p-2 rounded-full shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 md:size-8 shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-２.２５" />
                                        </svg>

                                </div>
                                <div>
                                    <h5 class="font-bold md:text-xl">Build a Lasting Club</h5>
                                    <p class="mt-2 text-sm hidden md:block">Develop a strong identity, culture, and community that continues to grow from 90 to 100—and beyond.</p>
                                </div>

                            </div>



                        </div>



                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-5xl mx-auto px-8">
                <div class="flex justify-center">
                    <h6 class="font-orbitron bg-red-700 block text-white px-8 py-1">Partnerships</h6>
                </div>

                <h2 class="font-work text-3xl lg:text-6xl mt-8 text-center font-work">The Collective</h2>
                <p class="font-work mt-5 text-xl text-center">
                    Because getting better is better together.
                </p>

                <div class="flex gap-x-8 mt-16 justify-between max-w-3xl mx-auto px-8">
                    <a href="https://www.facebook.com/dottedstudios" target="_blank">
                        <img src="{{ asset('img/brands/dotted.png') }}" alt="" class="w-full md:h-20 h-10 grayscale hover:grayscale-0 transition-all duration-300">
                    </a>
                    <a href="https://www.facebook.com/studiochulsday" target="_blank">
                        <img src="{{ asset('img/brands/chulsday.jpg') }}" alt="" class="w-full md:h-20 h-10 grayscale hover:grayscale-0 transition-all duration-300 rounded-full">
                    </a>
                    <a href="https://www.facebook.com/banyard.pb" target="_blank">
                        <img src="{{ asset('img/brands/banyard1.png') }}" alt="" class="w-full md:h-20 h-10 grayscale hover:grayscale-0 transition-all duration-300">
                    </a>
                    <a href="https://www.facebook.com/pixieboxfotobooth" target="_blank">
                        <img src="{{ asset('img/brands/pixie.jpg') }}" alt="" class="w-full md:h-20 h-10 grayscale hover:grayscale-0 transition-all duration-300 rounded-full">
                    </a>
                    <a href="https://www.facebook.com/brookside.pickleball" target="_blank">
                        <img src="{{ asset('img/brands/brookside.jpg') }}" alt="" class="w-full md:h-20 h-10 grayscale hover:grayscale-0 transition-all duration-300 rounded-full">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61575482521082" target="_blank">
                        <img src="{{ asset('img/brands/3rd.jpg') }}" alt="" class="w-full md:h-20 h-10 grayscale hover:grayscale-0 transition-all duration-300 rounded-full">
                    </a>
                </div>
            </div>
        </section>

        <footer class="bg-white border-t border-gray-100">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                <div class="flex justify-center gap-x-6 md:order-2">

                    <a href="https://www.facebook.com/profile.php?id=61590812360901" target="_blank" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">Facebook</span>
                        <img src="{{ asset('img/facebook.png') }}" alt="" class="w-full h-6">
                    </a>

                    <a href="https://instagram.com/@9200-pickleball" target="_blank" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">Instagram</span>
                        <img src="{{ asset('img/instagram.png') }}" alt="" class="w-full h-6">
                    </a>

                    <a href="https://reclub.co/clubs/@9200-pickleball" target="_blank" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">Reclub</span>
                        <img src="{{ asset('img/reclub.png') }}" alt="" class="w-full h-6">
                    </a>
                </div>
                <p class="mt-8 text-center text-sm/6 text-gray-600 md:order-1 md:mt-0">&copy; {{ date('Y') }}. 9200 Pickleball. All rights reserved.</p>
            </div>
            </footer>



    </body>

</html>
