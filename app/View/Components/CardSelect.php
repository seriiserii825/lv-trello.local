<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardSelect extends Component
{
    public $card;
    public $slug;
    public $columns;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($card, $slug, $columns)
    {
        $this->card = $card;
        $this->slug = $slug;
        $this->columns = $columns;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-select');
    }
}
