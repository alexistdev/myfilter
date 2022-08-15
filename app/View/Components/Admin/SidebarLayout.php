<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class SidebarLayout extends Component
{
    public $menuUtama;
    public $menuKedua;

    public function __construct($menuUtama,$menuKedua)
    {
        $this->menuUtama = $menuUtama;
        $this->menuKedua = $menuKedua;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.sidebar-layout');
    }
}
