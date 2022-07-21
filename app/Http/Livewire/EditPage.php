<?php

namespace App\Http\Livewire;

use App\Models\Page;
use App\Rules\Slug;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditPage extends Component
{
    public $pages, $page;

    protected $rules = [
        'page.parent_id' => [
            'nullable',
            'integer',
        ],
        'page.title' => [
            'required',
            'string',
            'max:255'
        ],
        'page.slug' => [
            'required',
            'string',
            'max:100',
            'not_in:page,add,edit'
        ],
        'page.content' => 'required',
    ];


    public function mount(Page $page)
    {
        $this->page = $page;
        $this->rules['page.slug'][] = new Slug();
        $this->rules['page.slug'][] = Rule::exists(Page::class, 'slug')->where(function ($query) use ($page) {
            return $query->whereNot('id', $page->id);
        });
        $this->rules['page.title'][] = Rule::exists(Page::class, 'title')->where(function ($query) use ($page) {
            return $query->whereNot('id', $page->id);
        });
        $this->rules['page.parent_id'][] = Rule::exists(Page::class, 'id')->where(function ($query) use ($page) {
            return $query->whereNot('id', $page->id);
        });
        $this->pages = Page::select(['id', 'parent_id', 'title'])->whereNot('id', $page->id)->get();
    }

    public function save()
    {
        $this->validate();

        $this->page->save();

        return redirect()->to('/page');
    }

    public function render()
    {
        return view('livewire.edit-page');
    }
}
