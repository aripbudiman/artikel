<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowArtikel extends Component
{

    public $article;
    public function mount($slug){
        $this->article=Article::where('slug',$slug)->first();
    }
    public function render()
    {
        return view('livewire.show-artikel',[
            'article'=>$this->article
        ]);
    }
    
}
