<div class="shadow-xl border border-gray-200 rounded-md flex flex-col mb-4 md:mr-6 relative bg-white">
    <div class=" bg-size bg-cover bg-center"
         style="background-image: url('{{ $post->cover_image }}')">
        <div class="p-4 h-32 flex items-end text-white">
        </div>
    </div>
    <div class="p-4 h-48">
        <h3 class="mb-2">{{ $post->title }}</h3>

        <p class="text-gray-600 text-xs leading-normal mt-0 mb-10">
            {!! $post->getExcerpt(150) !!}
        </p>

        <p class="text-gray-500 font-thin absolute right-0 bottom-0 m-0 mb-2 mr-4">
            {{ $post->getDate()->format('F j, Y') }}
        </p>

        <div class="absolute left-0 bottom-0 m-0 mb-2 ml-4">
            <a href="{{ $post->getUrl() }}" class="uppercase no-underline mr-4 text-green hover:text-green-light">Leggi</a>
        </div>
    </div>
</div>