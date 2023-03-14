<div>
    @if ($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 ">
            @foreach ($posts as $post)
                <div class="">
                    <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}">
                        <img src="{{ asset('uploads') . '/' . $post->image }}" alt="Imagem de post {{ $post->title }}">
                    </a>
                    {{-- <p>Postado por: <span class="capitalize">{{ $post->user->username }}</span></p> --}}
                </div>
            @endforeach
        </div>

        <div class="my-10">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    @else
        <p class="text-center">Nao a posts, siga alguem para poder ver os posts</p>
    @endif
</div>
