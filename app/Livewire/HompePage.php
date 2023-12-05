<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class HompePage extends Component
{
    public $article;
    public function mount(){
        $this->article=Article::all();
    }
    public function render()
    {
        return view('livewire.hompe-page',[
            'articles'=>$this->article
        ]);
    }
}
