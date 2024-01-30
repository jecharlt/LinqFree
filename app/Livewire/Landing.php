<?php

namespace App\Livewire;

use Livewire\Component;

class Landing extends Component
{
    public $profile_name;
    public $initial;
    public $links;
    public $short_url;
    public $page_title;
    public $sharebar_links;
    public $background;
    public $profile_picture;
    public $paragraph_text;
    public $link_background;
    public function render()
    {
        return view('livewire.landing')
            ->layout('layouts.app', ['title' => $this->page_title]);
    }

    public function mount() {
        $this->profile_name = config('display.display')['profile_name'];
        $this->initial = strtoupper($this->profile_name[0]);
        $this->links = config('display.display')['links'];
        $this->page_title = config('display.display')['page_title'];
        $this->sharebar_links = config('display.display')['sharebar-links'];
        $this->background = config('display.display')['background'];
        $this->profile_picture = config('display.display')['profile_picture'];
        $this->short_url = config('display.display')['short_url'];
        $this->paragraph_text = config('display.display')['paragraph_text'];
        $this->link_background = config('display.display')['link_background'];
    }
}
