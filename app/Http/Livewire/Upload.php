<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $photo;
    public $path;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024'
        ]);
        $abs_root = $this->photo->storeAs('public', 'test_image.png');
        $this->path = Storage::url($abs_root);
    }

    public function down()
    {
        return Storage::download('public/test_image.png');
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
