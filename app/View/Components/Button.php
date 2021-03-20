<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    

public $type;
public $href;
/**
* Create a new component instance.
*
* @return void
*/
public function __construct($type, $href)
{

$this->type = $type;
$this->href = $href;
}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
