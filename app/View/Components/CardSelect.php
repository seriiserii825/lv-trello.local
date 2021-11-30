<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardSelect extends Component
{
    public $card;
    public $slug;
    public $columns;
    public $delete;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($card, $slug, $columns, $name, $delete = false)
    {
        $this->card = $card;
        $this->slug = $slug;
        $this->columns = $columns;
        $this->delete = $delete;
        $this->name = $name;
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
