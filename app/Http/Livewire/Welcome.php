<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $post;
    public $collection;
    public $model;
    public $clicked;
    public $toggle;
    public $name;
    public $email;
    public $password;
    protected $rules = [
        'name' => 'required|string|max:4',
        'email' => 'required|email',
        'password' => 'required|min:8'
    ];
    protected $messages = [
        'name.required' => '반드시 입력해 주세요.',
        'name.max' => '이름은 4자를 넘을 수 없습니다.',
        'email.required' => '반드시 입력해 주세요.',
        'email.email' => '올바른 이메일 형식을 입력해 주세요.',
        'password.required' => '반드시 입력해 주세요.',
        'password.min' => '8자 이상으로 설정해야 합니다.'
    ];

    public function mount()
    {
        $this->model = 'model';
        $this->clicked = '클릭 이전';
        $this->toggle = false;
    }

    public function click()
    {
        $this->clicked = '클릭 이후';
    }

    public function validation()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.welcome', ['post' => $this->post, 'collection' => $this->collection]);
    }
}
