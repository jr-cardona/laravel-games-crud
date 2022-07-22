<?php

namespace App\Http\Livewire\Games;

use App\Domain\Games\Enums\StatusEnum;
use App\Domain\Games\ViewModels\GameIndexViewModel;
use App\Http\Requests\GameSaveRequest;
use App\Models\Game;
use Illuminate\View\View;

class Index extends \App\Http\Livewire\Index
{
    public bool $showModalForm = false;

    public ?Game $game = null;

    public ?string $name = '';

    public ?string $description = '';

    public ?string $url = '';

    public ?string $url_image = '';

    public ?string $status = '';

    public function rules(): array
    {
        return (new GameSaveRequest())->rules();
    }

    public function render(GameIndexViewModel $viewModel): View
    {
        $games = Game::query()
            ->where('name', 'like', "%$this->search%")
            ->paginate($this->paginate);

        return view('livewire.games.index', $viewModel->collection([
            'games' => $games,
            'statuses' => StatusEnum::names(),
        ]));
    }

    public function openEditModal(?int $id = null)
    {
        $this->resetValidation();
        $this->reset();
        $this->game = ($id) ? Game::find($id) : new Game();
        $this->name = $this->game->name;
        $this->description = $this->game->description;
        $this->url = $this->game->url;
        $this->url_image = $this->game->url_image;
        $this->status = $this->game->status ?? StatusEnum::ACTIVE->name;
        $this->showModalForm = true;
    }

    public function save()
    {
        $this->validate();

        $this->game->name = $this->name;
        $this->game->description = $this->description;
        $this->game->url = $this->url;
        $this->game->url_image = $this->url_image;
        $this->game->status = $this->status;
        $this->game->save();

        $this->dispatchBrowserEvent('event-notification', [
            'eventName' => 'Game saved!',
            'eventMessage' => 'The game "' . $this->name . '" has been updated!'
        ]);

        $this->reset();
    }
}
