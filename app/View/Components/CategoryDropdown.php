<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategoryDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
  
    public function render()
    {
        return view('components.category-dropdown',[
            'categories'=>Category::all(),
            'currentCategory'=>Category::firstWhere('slug',request('category'))
        ]);
    }
}