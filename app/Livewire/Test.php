<?php

namespace App\Livewire;

use App\Models\Test as ModelsTest;
use Livewire\Component;

class Test extends Component
{
    public $testModel;

    public function mount()
    {
        $this->testModel = ModelsTest::first();
    }

    public function updated()
    {
        $this->validate();
    }

    protected function rules()
    {
        $rules = [
            'testModel.name.en' => ''
        ];

        return $rules;
    }

    public function render()
    {
        return view('livewire.test');
    }
}
