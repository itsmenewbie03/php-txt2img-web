<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="container min-h-screen min-w-full p-5 flex flex-col bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <p class="text-3xl text-white text-center font-bold">Simple Text to Image Tool built with Laravel</p>
        <img class="lg-rounded" src="https://miro.medium.com/v2/resize:fit:1400/format:webp/1*XWzCZV4vjdBMKy16r8TMfw.png" alt="nothing xD">
        <input type="text" class="input input-bordered input-primary" placeholder="Enter your prompt" />
        <button class="btn btn-primary mt-2">Generate Image</button>
    </div>
</body>

</html>
