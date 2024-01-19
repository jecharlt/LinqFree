<?php

namespace App\Livewire;

use Livewire\Component;

class Landing extends Component
{
    public $display_data;
    public $profile_name;
    public $initial;
    public $links;
    public $custom_url;
    public $short_custom_url;
    public $custom_identifier;
    public function render()
    {
        return view('livewire.landing')
            ->layout("layouts.app", ['title' => 'NamePlaceholder']);
    }

    public function mount() {
        $this->display_data = config('display.display');
        $this->profile_name = $this->display_data['profile_name'];
        $this->initial = strtoupper($this->profile_name[0]);
        $this->links = $this->display_data['links'];
        $this->custom_identifier = $this->display_data['custom_identifier'];
        $this->custom_url = url()->to("/{$this->custom_identifier}");
        $parsedUrl = parse_url($this->custom_url);
        $host = $parsedUrl['host'];
        $path = $parsedUrl['path'] ?? '';
        $this->short_custom_url = $host . $path;
    }
}
