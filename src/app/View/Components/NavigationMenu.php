<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Enums\Menu;
use Illuminate\Contracts\View\View;

class NavigationMenu extends Component
{
    public function render(): View
    {
        return view('components.navigation', [
            'menuList' => Menu::getMenu(),
        ]);
    }
}
