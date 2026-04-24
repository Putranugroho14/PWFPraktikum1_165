<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditProduct extends Component
{
    public $url;
    public $name;

    public function __construct($url, $name = 'Product')
    {
        $this->url = $url;
        $this->name = $name;
    }

    public function render(): View|Closure|string
    {
        return view('components.edit-product');
    }
}
