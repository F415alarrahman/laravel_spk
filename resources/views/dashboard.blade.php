<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
    <header>
        <!-- Navbar -->
        @include('layouts.nav')
    </header>

    <main class="bg-white p-6">
        <section id="hero_landing_page">
            <div class="flex flex-col lg:flex-row items-center w-full">
                <div class="flex-1 h-screen flex items-center justify-center mr-24">
                    <div class="text-center lg:text-left">
                        <h1 class="text-4xl font-bold text-blue-600 mb-4">WELCOME CAPS!</h1>
                        <p class="text-gray-700 dark:text-gray-400 mb-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam corporis vero aperiam.
                            Obcaecati, officiis eum odit nihil sunt eligendi dolorem tempore molestiae temporibus
                            suscipit natus. Iusto ea sint quis tempora.
                        </p>
                        <a href="{{ route('field_place') }}"
                            class="inline-flex items-center px-5 py-3 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            More
                            <svg class="rtl:rotate-180 w-4 h-4 ml-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex-shrink-0 mt-6 lg:mt-0 lg:ml-6">
                    <img src="{{ asset('src/assets/field.png') }}" alt="Illustration"
                        class="w-128 h-128 object-contain">
                </div>
            </div>
        </section>

        <section>
            <h1
                class="text-center font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black">
                List of Football Fields</h1>
            <p class="text-center font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Find the
                right Football Field for your team</p>
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-16 grid-costume">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

        </section>
    </main>


    <footer class="bg-gray-800 p-4 text-white w-full">
        <!-- Footer -->
        @include('layouts.footer')
    </footer>
</body>

</html>
