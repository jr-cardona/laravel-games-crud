<?php

namespace App\ViewModels;

class IndexViewModel extends ViewModel
{
    protected array $collection;

    public function toArray(): array
    {
        return $this->collection + [
            'paginationOptions' => $this->paginationOptions(),
        ];
    }

    public function collection(array $collection): self
    {
        $this->collection = $collection;
        return $this;
    }

    public function paginationOptions(): array
    {
        return range(start: 10, end: 100, step: 10);
    }
}
