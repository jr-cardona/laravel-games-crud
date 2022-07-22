<x-index>
    <x-slot name="content">
        @foreach($games as $game)
            <ul>
                <li>{{ $game->name }}</li>
                <li>{{ $game->description }}</li>
                <li>{{ $game->url }}</li>
                <li>{{ $game->url_image }}</li>
            </ul>
        @endforeach
    </x-slot>
    <x-slot name="links">{{ $games->links() }}</x-slot>
</x-index>
