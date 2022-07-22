<?php

namespace App\Presenters;

trait HasRoutesPresenter
{
    public function routes(): RoutesPresenter
    {
        if (!isset($this->urlInstance)) {
            $this->urlInstance = new RoutesPresenter($this);
        }

        return $this->urlInstance;
    }
}
