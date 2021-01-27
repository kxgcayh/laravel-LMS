<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TaskList extends Component
{
    public $title;
    public $mode;

    /**
     * Create a new component instance.
     *
     * @param mixed $title
     * @param mixed $model
     */
    public function __construct($title, $model)
    {
        $this->title = $title;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.task-list');
    }
}
