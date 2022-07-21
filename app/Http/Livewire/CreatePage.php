<?php

namespace App\Http\Livewire;

use App\Models\Page;
use App\Rules\Slug;
use Livewire\Component;

class CreatePage extends Component
{
    public $pages, $page;

    protected $rules = [
        'page.parent_id' => 'nullable|integer|exists:App\Models\Page,id',
        'page.title' => 'required|string|max:255|unique:App\Models\Page,title',
        'page.slug' => [
            'required',
            'string',
            'max:100',
            'unique:App\Models\Page,slug',
            'not_in:page,add,edit'
        ],
        'page.content' => 'required',
    ];


    public function mount()
    {
        $this->rules['page.slug'][] = new Slug();
        $this->page = new Page();
        $this->pages = Page::select(['id', 'parent_id', 'title'])->get();
    }

    public function save()
    {
        $this->validate();

        $this->page->save();

        return redirect()->to('/page');
    }

    public function render()
    {
        return view('livewire.create-page');
    }
}
