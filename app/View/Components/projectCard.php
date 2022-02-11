<?php

namespace App\View\Components;

use Illuminate\View\Component;

class projectCard extends Component
{
    public $title;
    public $image;
    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image,$title,$description)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-card');
    }
}
