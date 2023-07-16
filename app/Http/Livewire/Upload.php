<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $photo;
    public $abs_root;
    public $path;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024'
        ]);
        $this->abs_root = $this->photo->store('photos', 's3');
        $this->path = Storage::disk('s3')->url($this->abs_root);
    }

    public function down()
    {
        return Storage::disk('s3')->download($this->abs_root);
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
