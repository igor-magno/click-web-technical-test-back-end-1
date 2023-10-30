<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('news.news') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased dark:bg-gray-600 dark:text-slate-300 font-sans">

    <div class="flex flex-col justify-content-center items-center gap-4 py-8">
        <h2 class="text-4xl font-extrabold dark:text-white">{{ __('news.news') }}</h2>
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
              <li class="inline-flex items-center">
                <a href="{{ route('news.index') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                  {{ __('news.news') }}
                </a>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $news->title }}</span>
                </div>
              </li>
            </ol>
          </nav>
        <div class="w-1/2 rounded p-8 dark:bg-gray-800">
            <div class="">
                <h2 class="mb-2 text-4xl font-semibold tracking-tight">{{ $news->title }}</h2>
                <span class="text-normal mb-2">{{ $news->subtitle }}</span>
                <p class="text-sm mb-2">{{ __('news.by') }} {{ $news->author }}</p>
            </div>
            <hr class="my-2 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
            <div class="pb-4">
                <p class="font-normal">{{ $news->content }}</p>
            </div>
        </div>
    </div>
</body>

</html>
