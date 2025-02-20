<div>
    @foreach($articles as $article)
        <div wire:key="{{ $article->id }}" class="mt-4  p-4 border rounded-md bg-black border-indigo-900 dark:hover:bg-gray-900">
            <div class="pt-2 text-blue-500">
                <a href="/articles/{{ $article->id }}"> {{ $article->title }}</a>
            </div>
            <p class="text-gray-500">
                {{ str($article->content)->words(45) }}
            </p>
        </div>

    @endforeach
</div>
