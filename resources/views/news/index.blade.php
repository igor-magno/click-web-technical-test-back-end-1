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
        <div class="w-1/2 rounded p-8 dark:bg-gray-800">
            {{ $news->links() }}
        </div>
        @foreach ($news as $n)
            <a href="{{ route('news.detail', $n->id) }}" class="w-1/2 rounded p-8 dark:bg-gray-800">
                <div class="">
                    <h2 class="mb-2 text-4xl font-semibold tracking-tight">{{ $n->title }}</h2>
                    <span class="text-normal mb-2">{{ $n->subtitle }}</span>
                    <p class="text-sm mb-2">{{ __('news.by') }} {{ $n->author }}</p>
                </div>
                <hr class="my-2 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
                <div class="pb-4">
                    <p class="font-normal">{{ $n->summary }}</p>
                </div>
            </a>
        @endforeach
        <div class="w-1/2 rounded p-8 dark:bg-gray-800">
            {{ $news->links() }}
        </div>
    </div>
</body>

</html>
