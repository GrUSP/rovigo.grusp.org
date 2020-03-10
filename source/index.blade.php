@extends('_layouts.master')

@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-6 shadow-xl border border-gray-200 rounded-md p-4 bg-white">
            @if ($featuredPost->cover_image)
                <div class="m-0 mb-6 text-center">
                    <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mx-auto">
                </div>
            @endif

            <p class="text-gray-700 font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Leggi
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mr-6">
            @foreach ($row as $post)
                    <div class="w-full md:w-1/2">
                        @include('_components.post-preview-card')
                    </div>

                @if (! $loop->last)
                    <!-- <hr class="block md:hidden w-full border-b mt-2 mb-6"> -->
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <!-- <hr class="w-full border-b mt-2 mb-6"> -->
        @endif
    @endforeach
@stop
