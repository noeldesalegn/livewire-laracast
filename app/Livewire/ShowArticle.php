<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowArticle extends Component
{
    public $article;

    public function mount($id)
    {
        $this->article = Article::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.show-article');
    }
}
