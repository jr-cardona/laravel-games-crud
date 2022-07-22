<?php

namespace App\Http\Livewire\Games;

use App\Domain\Games\ViewModels\GameIndexViewModel;
use App\Models\Game;
use Illuminate\View\View;

class Index extends \App\Http\Livewire\Index
{
    public function render(GameIndexViewModel $viewModel): View
    {
        $games = Game::query()
            ->where('name', 'like', "%$this->search%")
            ->paginate($this->paginate);

        return view('livewire.games.index', $viewModel->collection([
            'games' => $games,
        ]));
    }
}
