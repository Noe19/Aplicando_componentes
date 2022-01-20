<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $color;
    public function __construct($color="yellow")
    {
        $this->color=$color;
    }
   
    public function render()
    {
        return view('components.alert');
    }
}
