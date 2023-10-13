<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ThemeSwitcher extends Component
{
    public $isDarkMode = false;

    public function mount(){
        session()->put('dark_mode', $this->isDarkMode);
    }

    public function toggleTheme()
    {
        $this->isDarkMode = !$this->isDarkMode;
        session()->put('dark_mode', $this->isDarkMode);
        $this->dispatch('themeUpdated', $this->isDarkMode);
    }

    public function render()
    {
        return view('livewire.theme-switcher');
    }
}
