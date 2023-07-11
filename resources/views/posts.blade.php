<x-layout>
        @foreach ($posts as $post)
                <article> 
                        <a href="/posts/{{ $post->id }}">{{ $post ->title }}</a>
                </article>
                <article> 
                        <h3><?= $post ->body; ?></h3>
                </article>
        @endforeach
</x-layout>
