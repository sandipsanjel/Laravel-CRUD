<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */

     public $type;
     public $name;
     public $label;
     public $demo;
    public function __construct($type,$name,$label,$demo=0)
    {
    $this->type=$type;
    $this->name=$name;
    $this->label=$label;
    $this->demo=$demo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
