<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class PageTree extends Component
{
    public $pages;

    public function render()
    {
        $this->pages = Page::with(['children.children.children'])->get();
        return view('livewire.page-tree');
    }
}
