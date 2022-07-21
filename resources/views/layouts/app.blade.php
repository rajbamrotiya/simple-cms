<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>


    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
</head>
<body>

<div class="max-w-4xl mx-auto mt-5">
    <div class="px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-black">Simple CMS Demo</h1>
        <ul class="flex">
            <li class="mr-6">
                <a class="text-blue-500 hover:text-blue-800" href="/page">Page CRUD Module</a>
            </li>
            <li class="mr-6">
                <a class="text-blue-500 hover:text-blue-800" href="/">Page Tree View</a>
            </li>
        </ul>
    </div>

</div>


{{ $slot }}


@livewireScripts
</body>
</html>
