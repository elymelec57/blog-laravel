<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Crear extends Component
{
    use WithFileUploads;
    public $photo,$title,$text;

    public function render()
    {
        return view('livewire.blog.crear');
    }

    public function guardar(){
        $this->validate([
            'title' => 'required',
            'text' => 'required',
            'photo' => 'required|image',
        ]);

       $path = $this->photo->store('public/blogs');

       $blog = new Blog();
       $blog->title = $this->title;
       $blog->photo = $path;
       $blog->text = $this->text;
       $blog->user_id = Auth::id();
       $blog->save();
       $this->limpiar();
       $this->emit('actualizarblog');

    }

    public function limpiar(){
        $this->title = '';
        $this->photo = '';
        $this->text = '';
    }
}
