<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemProject extends Component
{

    public string $image;

    public int $indice;
    /**
     * Create a new component instance.
     */
    public function __construct(string $image, int $indice)
    {
        $this->image = $image;
        $this->indice = $indice;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item-project');
    }
}
