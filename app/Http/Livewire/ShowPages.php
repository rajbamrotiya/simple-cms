<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPages extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.show-pages', [
            'pages' => Page::paginate(5),
        ]);
    }

    public function delete(Page $page)
    {
        $page->delete();
    }
}
