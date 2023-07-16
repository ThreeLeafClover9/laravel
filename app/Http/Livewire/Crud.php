<?php

namespace App\Http\Livewire;

use App\Models\Ordermenu;
use Livewire\Component;

class Crud extends Component
{
    public $ordermenus;
    public $from, $name, $count;
    public $num, $cnt;
    public $number;

    public function mount()
    {
        $this->ordermenus = Ordermenu::all();
    }

    public function create()
    {
        Ordermenu::create([
            'from' => $this->from,
            'name' => $this->name,
            'count' => $this->count
        ]);
        $this->ordermenus = Ordermenu::all();
    }

    public function update()
    {
        Ordermenu::where('id', $this->num)->update(['count' => $this->cnt]);
        $this->ordermenus = Ordermenu::all();
    }

    public function delete()
    {
        Ordermenu::where('id', $this->number)->delete();
        $this->ordermenus = Ordermenu::all();
    }

    public function render()
    {
        return view('livewire.crud', ['ordermenus' => $this->ordermenus]);
    }
}
