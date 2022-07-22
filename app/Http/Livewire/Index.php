<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

abstract class Index extends Component
{
    use WithPagination;

    public ?string $search = '';

    public ?int $paginate = 10;
}
