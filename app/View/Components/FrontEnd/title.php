<?php

namespace App\View\Components\FrontEnd;

use Illuminate\View\Component;

class title extends Component
{

    public $titleType;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titleType)
    {
        //
        $this->titleType = $titleType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front-end.title');
    }
}
