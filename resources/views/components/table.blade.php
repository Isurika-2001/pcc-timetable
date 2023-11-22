@props(['title', 'description', 'head', 'body'])

<table class="w-full">
    <caption class="text-left my-4 ml-3 font-medium">
        <h2 class="text-lg">{{ $title }}</h2>
        <h2 class="text-sm">{{ $description }}</h2>
    </caption>
    <thead>
        {{ $head }}
    </thead>
    <tbody>
        {{ $body }}
    </tbody>
</table>
