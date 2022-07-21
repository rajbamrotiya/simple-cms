<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class ShowPage extends Component
{
    protected $slug;
    public $page, $pages, $slugs = [];

    public function mount($slug)
    {
        $this->slugs = explode('/', urldecode($slug));
        $this->slug = last($this->slugs);
        $this->page = Page::where('slug', $this->slug)->firstOrFail();
        $this->pages = Page::whereIn('slug', $this->slugs)->get();
    }

    public function render()
    {
        return view('livewire.show-page');
    }
}
